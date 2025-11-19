@extends('layout.dashboard')
@section('title', 'Blog')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="page-header row no-gutters py-2">
        <div class="col-12 col-sm-4 text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Data Master</span>
            <h3 class="page-title">Blog</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title mb-0">Data Blog</h3>

                    <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-primary">
                        <i class="ti ti-plus"></i> Tambah Blog
                    </a>
                </div>

                <div class="card-datatable table-responsive table-main">
                    <table class="table border-top nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Route</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($blogs as $key => $blog)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->slug }}</td>
                                <td>{{ $blog->route_name }}</td>

                                <td>
                                    @if ($blog->image)
                                        <img src="{{ asset('uploads/blogs/' . $blog->image) }}" width="60"
                                             class="rounded">
                                    @else
                                        <span class="text-muted">Tidak ada</span>
                                    @endif
                                </td>

                                <td>
                                    @if ($blog->status)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-danger">Nonaktif</span>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('blogs.show', $blog->id) }}"
                                       class="btn btn-sm btn-info mb-1">
                                        <i class="ti ti-eye"></i>
                                    </a>

                                    <a href="{{ route('blogs.edit', $blog->id) }}"
                                       class="btn btn-sm btn-warning mb-1">
                                        <i class="ti ti-pencil"></i>
                                    </a>

                                    <form action="{{ route('blogs.destroy', $blog->id) }}"
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-danger mb-1"
                                            onclick="return confirm('Hapus blog ini?')">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
