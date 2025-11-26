@extends('layout.dashboard')
@section('title', 'Review')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="page-header row no-gutters py-2">
        <div class="col-12 col-sm-4 text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Data Master</span>
            <h3 class="page-title">Review</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-12 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="card-title mb-0">Data Review</h3>

                    <a href="{{ route('review.create') }}" class="btn btn-sm btn-primary">
                        <i class="ti ti-plus"></i>&nbsp; Tambah Review
                    </a>
                </div>

                <div class="card-datatable table-responsive table-main">
                    <table class="table border-top nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th> {{-- Tambahan kolom email --}}
                                <th>Foto</th>
                                <th>Rating</th>
                                <th>Review</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($reviews as $key => $review)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $review->name }}</td>
                                    <td>{{ $review->email ?? '-' }}</td> {{-- Tampilkan email, default '-' jika null --}}

                                    <td>
                                        @if ($review->photo)
                                            <img src="{{ asset('uploads/reviews/' . $review->photo) }}"
                                                 width="60" class="rounded">
                                        @else
                                            <span class="text-muted">Tidak ada</span>
                                        @endif
                                    </td>

                                    <td>⭐ {{ $review->rating }}/5</td>

                                    <td style="max-width: 300px;">
                                        <div style="white-space: normal;">
                                            {{ Str::limit($review->review_text, 80) }}
                                        </div>
                                    </td>

                                    <td>
                                        @if ($review->status)
                                            <span class="badge bg-success">Aktif</span>
                                        @else
                                            <span class="badge bg-danger">Nonaktif</span>
                                        @endif
                                    </td>

                                    <td>
                                        <a href="{{ route('review.edit', $review->id) }}"
                                           class="btn btn-sm btn-warning mb-1">
                                            <i class="ti ti-pencil"></i>
                                        </a>

                                       <form action="{{ route('review.destroy', $review->id) }}"
      method="POST"
      class="d-inline delete-form">
    @csrf
    @method('DELETE')

    <button type="button" class="btn btn-sm btn-danger btn-delete">
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


@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {

    // =============== DELETE CONFIRMATION ===============
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function () {
            let form = this.closest('.delete-form');

            Swal.fire({
                title: 'Hapus review ini?',
                text: "Review akan dihapus permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });

    // =============== SUCCESS ALERT ===============
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: @json(session('success')),
            confirmButtonText: 'OK'
        });
    @endif

    // =============== ERROR ALERT (jika ada) ===============
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: @json(session('error')),
            confirmButtonText: 'OK'
        });
    @endif

});
</script>
@endpush

