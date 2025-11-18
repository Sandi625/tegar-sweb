@include('base.header')

<div class="container" style="margin-top: 120px;">

    {{-- Parent Blog --}}
    <h1 class="blogsTitle">{{ $blog->title }}</h1>

    @if($blog->image)
        <img
            src="{{ asset('uploads/blogs/' . $blog->image) }}"
            alt="{{ $blog->title }}"
            style="width:100%;max-width:800px;margin:auto;display:block;border-radius:12px"
        >
    @endif

    <div style="margin-top: 30px; font-size: 1.1rem;">
        {!! $blog->description !!}
    </div>

    {{-- Child Table: Days / Itinerary --}}
    @if($blog->days->count() > 0)
        <h2 style="margin-top: 50px;">Itinerary / Hari</h2>
        <div class="blog-days">
            @foreach($blog->days as $index => $day)
                <div class="blog-day mb-4 p-3 border rounded">
                    <h4>Hari {{ $index + 1 }}: {{ $day->title }}</h4>
                    <p>{{ $day->description }}</p>

                    @if($day->image)
                        <img
                            src="{{ asset('uploads/blog_days/' . $day->image) }}"
                            alt="{{ $day->title }}"
                            style="width:100%;max-width:600px;margin-top:10px;border-radius:8px;"
                        >
                    @endif
                </div>
            @endforeach
        </div>
    @endif

</div>

@include('base.footer')
