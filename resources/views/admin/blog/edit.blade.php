@extends('layout.dashboard')

@section('title', 'Edit Blog')

@section('content')

<div class="card mt-3">
    <div class="card-header">
        <h5 class="mb-0">Edit Blog</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- JUDUL --}}
            <div class="mb-3">
                <label class="form-label">Judul Blog</label>
                <input type="text" name="title" class="form-control" id="titleInput"
                       value="{{ $blog->title }}" required>
            </div>

            {{-- SLUG --}}
            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" id="slugInput"
                       value="{{ $blog->slug }}" readonly>
            </div>

            {{-- ROUTE NAME --}}
            <div class="mb-3">
                <label class="form-label">Route Name</label>
                <input type="text" name="route_name" class="form-control"
                       value="{{ $blog->route_name }}">
            </div>

            {{-- GAMBAR --}}
            <div class="mb-3">
                <label class="form-label">Gambar Utama Blog</label>
                <input type="file" name="image" class="form-control">

                @if ($blog->image)
                    <img src="{{ asset('uploads/blogs/'.$blog->image) }}"
                         class="img-thumbnail mt-2"
                         width="120">
                @endif
            </div>

            {{-- DESKRIPSI --}}
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="5" required>{{ $blog->description }}</textarea>
            </div>

            {{-- ITINERARY / HARI --}}
            <div class="mb-3">
                <label class="form-label">Itinerary / Hari</label>
                <div id="blog-days-container">

                    @foreach ($blog->days as $index => $day)
                    <div class="blog-day mb-3 p-3 border rounded border-primary bg-light">
                        <input type="hidden" name="days[{{ $index }}][id]" value="{{ $day->id }}">

                        <label>Judul Hari</label>
                        <input type="text"
                               name="days[{{ $index }}][title]"
                               class="form-control mb-2"
                               value="{{ $day->title }}"
                               required>

                        <label>Deskripsi Hari</label>
                        <textarea name="days[{{ $index }}][description]"
                                  class="form-control mb-2"
                                  rows="3"
                                  required>{{ $day->description }}</textarea>

                        <label>Gambar Hari</label>
                        <input type="file"
                               name="days[{{ $index }}][image]"
                               class="form-control mb-2">

                        @if ($day->image)
                            <img src="{{ asset('uploads/blog_days/'.$day->image) }}"
                                 width="100"
                                 class="img-thumbnail mb-2">
                        @endif

                        <label>Judul Gambar</label>
                        <input type="text"
                               name="days[{{ $index }}][image_title]"
                               class="form-control mb-2"
                               value="{{ $day->image_title ?? '' }}"
                               placeholder="Judul Gambar Hari {{ $index + 1 }}">

                        <label>Deskripsi Gambar</label>
                        <textarea name="days[{{ $index }}][image_description]"
                                  class="form-control mb-2"
                                  rows="2"
                                  placeholder="Deskripsi Gambar Hari {{ $index + 1 }}">{{ $day->image_description ?? '' }}</textarea>

                        <button type="button"
                                class="btn btn-sm btn-danger remove-day-btn">
                            Hapus Hari
                        </button>
                    </div>
                    @endforeach

                </div>

                <button type="button" id="add-day-btn" class="btn btn-sm btn-success mt-2">
                    Tambah Hari
                </button>
            </div>

            {{-- STATUS --}}
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ $blog->status == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ $blog->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>

            <button class="btn btn-primary">Update</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    // AUTO SLUG
    const titleInput = document.getElementById("titleInput");
    const slugInput = document.getElementById("slugInput");

    titleInput.addEventListener("keyup", function () {
        let slug = this.value.toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)+/g, '');
        slugInput.value = slug;
    });

    // ITINERARY DINAMIS
    let container = document.getElementById("blog-days-container");
    let addBtn = document.getElementById("add-day-btn");

    let dayIndex = {{ count($blog->days) }};

    // Tambah Hari Baru
    addBtn.addEventListener("click", function() {
        let html = `
        <div class="blog-day mb-3 p-3 border rounded border-success bg-light">
            <label>Judul Hari</label>
            <input type="text"
                   name="days[${dayIndex}][title]"
                   class="form-control mb-2"
                   placeholder="Day ${dayIndex + 1} Title"
                   required>

            <label>Deskripsi Hari</label>
            <textarea name="days[${dayIndex}][description]"
                      class="form-control mb-2"
                      rows="3"
                      placeholder="Deskripsi Day ${dayIndex + 1}"
                      required></textarea>

            <label>Gambar Hari</label>
            <input type="file"
                   name="days[${dayIndex}][image]"
                   class="form-control mb-2">

            <label>Judul Gambar</label>
            <input type="text"
                   name="days[${dayIndex}][image_title]"
                   class="form-control mb-2"
                   placeholder="Judul Gambar Hari ${dayIndex + 1}">

            <label>Deskripsi Gambar</label>
            <textarea name="days[${dayIndex}][image_description]"
                      class="form-control mb-2"
                      rows="2"
                      placeholder="Deskripsi Gambar Hari ${dayIndex + 1}"></textarea>

            <button type="button" class="btn btn-sm btn-danger mt-2 remove-day-btn">
                Hapus Hari
            </button>
        </div>`;
        container.insertAdjacentHTML('beforeend', html);
        dayIndex++;
    });

    // Hapus Hari
    container.addEventListener("click", function(e) {
        if (e.target && e.target.classList.contains("remove-day-btn")) {
            e.target.closest(".blog-day").remove();
        }
    });

});
</script>
@endpush
