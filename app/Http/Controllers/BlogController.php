<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogDay;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('days')->latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }
    public function show($id)
{
    $blog = Blog::with('days')->findOrFail($id);
    return view('admin.blog.show', compact('blog'));
}


    public function create()
    {
        return view('admin.blog.create');
    }

  public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required',
        'route_name' => 'nullable|string',
        'status' => 'nullable|boolean',

        // Single Blog Image
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        // Itinerary Validation
        'days.*.title' => 'required|string|max:255',
        'days.*.description' => 'required',
        'days.*.image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);


    /* =====================================================
     * UPLOAD MAIN BLOG IMAGE
     * ===================================================== */
    $imageName = null;
    if ($request->hasFile('image')) {
        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/blogs'), $imageName);
    }


    /* =====================================================
     * INSERT BLOG
     * ===================================================== */
    $blog = Blog::create([
        'title'       => $request->title,
        'slug'        => Str::slug($request->title),
        'description' => $request->description,
        'route_name'  => $request->route_name,
        'image'       => $imageName,
        'status'      => $request->status ?? 1,
    ]);


    /* =====================================================
     * INSERT BLOG DAYS / ITINERARY
     * ===================================================== */
    if ($request->days) {
        foreach ($request->days as $day) {

            // Upload image for day
            $dayImage = null;
            if (isset($day['image']) && $day['image']) {
                $dayImage = time() . '_' . uniqid() . '.' . $day['image']->extension();
                $day['image']->move(public_path('uploads/blog_days'), $dayImage);
            }

            BlogDay::create([
                'blog_id'     => $blog->id,
                'title'       => $day['title'],
                'description' => $day['description'],
                'image'       => $dayImage,
            ]);
        }
    }


    return redirect()
        ->route('blogs.index')
        ->with('success', 'Blog berhasil dibuat!');
}

    public function edit($id)
    {
        $blog = Blog::with('days')->findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'route_name' => 'nullable|string',
            'status' => 'boolean',
            'image' => 'nullable|image',
            'days.*.title' => 'required',
            'days.*.description' => 'required',
        ]);

        // Update Image
        $imageName = $blog->image;
        if ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path('uploads/blogs/'.$blog->image))) {
                unlink(public_path('uploads/blogs/'.$blog->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/blogs'), $imageName);
        }

        // update blog data
        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'route_name' => $request->route_name,
            'image' => $imageName,
            'status' => $request->status ?? 1,
        ]);

        // Update itinerary
        BlogDay::where('blog_id', $blog->id)->delete();

        foreach ($request->days as $day) {
            BlogDay::create([
                'blog_id' => $blog->id,
                'title' => $day['title'],
                'description' => $day['description'],
            ]);
        }

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && file_exists(public_path('uploads/blogs/'.$blog->image))) {
            unlink(public_path('uploads/blogs/'.$blog->image));
        }

        $blog->delete();

        return redirect()->route('blogs.index')->with('success', 'Blog berhasil dihapus!');
    }
}
