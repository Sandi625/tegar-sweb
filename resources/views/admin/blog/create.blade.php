@extends('layout.dashboard')

@section('title', 'Tambah Blog')

@section('content')

<div class="card mt-3">
    <div class="card-header">
        <h5 class="mb-0">Tambah Blog</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- JUDUL BLOG --}}
            <div class="mb-3">
                <label class="form-label">Judul Blog</label>
                <input type="text" name="title" class="form-control" id="titleInput" required>
            </div>

            {{-- SLUG --}}
            <div class="mb-3">
                <label class="form-label">Slug (otomatis)</label>
                <input type="text" name="slug" class="form-control" id="slugInput" readonly>
            </div>

            {{-- ROUTE NAME --}}
            <div class="mb-3">
                <label class="form-label">Route Name</label>
                <input type="text" name="route_name" class="form-control" placeholder="contoh: blog.detail">
            </div>

            {{-- GAMBAR --}}
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>

            {{-- DESKRIPSI --}}
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="5" placeholder="Isi konten blog..." required></textarea>
            </div>

           {{-- ITINERARY / HARI --}}
           <div class="mb-3">
               <label class="form-label">Itinerary / Hari</label>

               <div id="blog-days-container">

                   <div class="blog-day mb-3 p-3 border rounded border-success bg-light">
                       <label>Judul Hari</label>
                       <input type="text" name="days[0][title]" class="form-control mb-2" placeholder="Day 1 Title" required>

                       <label>Deskripsi Hari</label>
                       <textarea name="days[0][description]" class="form-control mb-2" rows="3" placeholder="Deskripsi Day 1" required></textarea>

                       <label>Gambar Hari</label>
                       <input type="file" name="days[0][image]" class="form-control mb-2">

                       <button type="button" class="btn btn-sm btn-danger mt-2 remove-day-btn">Hapus Hari</button>
                   </div>

               </div>

               <button type="button" id="add-day-btn" class="btn btn-sm btn-success mt-2">
                   Tambah Hari
               </button>
           </div>

            {{-- STATUS --}}
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1" selected>Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>

            {{-- BUTTON --}}
            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ========== AUTO SLUG ==========
    const titleInput = document.getElementById("titleInput");
    const slugInput = document.getElementById("slugInput");

    titleInput.addEventListener("keyup", function () {
        let slug = this.value.toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)+/g, '');
        slugInput.value = slug;
    });

    // ========== ITINERARY DINAMIS ==========
    let container = document.getElementById("blog-days-container");
    let addBtn = document.getElementById("add-day-btn");

    let dayIndex = 1; // index pertama sudah dipakai (0)

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

            <button type="button" class="btn btn-sm btn-danger mt-2 remove-day-btn">
                Hapus Hari
            </button>

        </div>
        `;

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
