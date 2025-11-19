@extends('layout.dashboard')

@section('title', 'Tambah Tour')

@section('content')

<div class="card mt-3">
    <div class="card-header">
        <h5 class="mb-0">Tambah Tour</h5>
    </div>

    <div class="card-body">
<form id="tourForm" action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
            @csrf

            {{-- KATEGORI --}}
            <div class="mb-3">
                <label class="form-label">Kategori Tour</label>
                <select name="category_id" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>

            {{-- JUDUL TOUR --}}
            <div class="mb-3">
                <label class="form-label">Judul Tour</label>
                <input type="text" name="title" class="form-control" id="titleInput" required>
            </div>

            {{-- SLUG --}}
            <div class="mb-3">
                <label class="form-label">Slug (otomatis)</label>
                <input type="text" name="slug" class="form-control" id="slugInput" readonly>
            </div>

            {{-- HARGA --}}
            <div class="mb-3">
                <label class="form-label">Harga Tour</label>
                <input type="number" name="price" class="form-control" required>
            </div>

            {{-- MULTIPLE IMAGE --}}
            <div class="mb-3">
                <label class="form-label">Gambar (Multiple)</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>

            {{-- ITINERARY / HARI --}}
            <div class="mb-3">
                <label class="form-label">Itinerary / Hari</label>
                <div id="tour-days-container">
                    <div class="tour-day mb-3 p-2 border rounded">
                        <label>Judul Hari</label>
                        <input type="text" name="days[0][title]" class="form-control mb-2" placeholder="Day 1 Title" required>

                        <label>Deskripsi Hari</label>
                        <textarea name="days[0][description]" class="form-control" rows="3" placeholder="Deskripsi Day 1" required></textarea>

                        <button type="button" class="btn btn-sm btn-danger mt-2 remove-day-btn">Hapus Hari</button>
                    </div>
                </div>
                <button type="button" id="add-day-btn" class="btn btn-sm btn-secondary mt-2">Tambah Hari</button>
            </div>

            {{-- STATUS --}}
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>

            {{-- BUTTON --}}
            <button class="btn btn-primary">Simpan</button>
            <a href="{{ route('tour.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection

@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ========== AUTO SLUG ==========
    const titleInput = document.getElementById("titleInput");
    const slugInput   = document.getElementById("slugInput");

    titleInput.addEventListener("keyup", function () {
        let slug = this.value.toLowerCase()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/(^-|-$)+/g, '');
        slugInput.value = slug;
    });

    // ========== ITINERARY DINAMIS ==========
    let container = document.getElementById("tour-days-container");
    let addBtn = document.getElementById("add-day-btn");
    let dayIndex = 1;

    addBtn.addEventListener("click", function() {
        let html = `
        <div class="tour-day mb-3 p-2 border rounded">
            <label>Judul Hari</label>
            <input type="text" name="days[${dayIndex}][title]" class="form-control mb-2" placeholder="Day ${dayIndex + 1} Title" required>

            <label>Deskripsi Hari</label>
            <textarea name="days[${dayIndex}][description]" class="form-control" rows="3" placeholder="Deskripsi Day ${dayIndex + 1}" required></textarea>

            <button type="button" class="btn btn-sm btn-danger mt-2 remove-day-btn">Hapus Hari</button>
        </div>`;
        container.insertAdjacentHTML('beforeend', html);
        dayIndex++;
    });

    container.addEventListener("click", function(e) {
        if (e.target && e.target.classList.contains("remove-day-btn")) {
            e.target.closest(".tour-day").remove();
        }
    });


    // ======================================================
    //  AJAX SUBMIT WITH SWEETALERT (CREATE TOUR)
    // ======================================================
    const form = document.getElementById("tourForm");

    form.addEventListener("submit", function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        fetch("{{ route('tour.store') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {

            if (data.errors) {
                let errorText = "";
                for (const key in data.errors) {
                    data.errors[key].forEach(msg => {
                        errorText += `• ${msg}\n`;
                    });
                }

                Swal.fire({
                    icon: "error",
                    title: "Terjadi Kesalahan!",
                    html: `<pre style="text-align:left;">${errorText}</pre>`
                });
            }

            if (data.success) {
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: data.success,
                    timer: 1800,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = "{{ route('tour.index') }}";
                });
            }

        })
        .catch(() => {
            Swal.fire({
                icon: "error",
                title: "Server Error",
                text: "Terjadi kesalahan pada server."
            });
        });

    });

});
</script>
@endpush
