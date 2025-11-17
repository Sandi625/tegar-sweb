@extends('layout.dashboard')

@section('title', 'Edit Review')

@section('content')

<div class="card mt-3">
    <div class="card-header">
        <h5 class="mb-0">Edit Review</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('review.update', $review->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- NAMA --}}
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control"
                       value="{{ $review->name }}" required>
            </div>

            {{-- FOTO LAMA --}}
            <div class="mb-3">
                <label class="form-label">Foto Saat Ini</label><br>
                @if ($review->photo)
                    <img src="{{ asset('uploads/reviews/'.$review->photo) }}"
                         width="120" class="rounded mb-2">
                @else
                    <p class="text-muted">Tidak ada foto</p>
                @endif
            </div>

            {{-- FOTO BARU --}}
            <div class="mb-3">
                <label class="form-label">Ganti Foto (Opsional)</label>
                <input type="file" name="photo" class="form-control">
            </div>

            {{-- RATING --}}
            <div class="mb-3">
                <label class="form-label">Rating</label>
                <select name="rating" class="form-control" required>
                    <option value="1" {{ $review->rating == 1 ? 'selected' : '' }}>1 - Sangat Buruk</option>
                    <option value="2" {{ $review->rating == 2 ? 'selected' : '' }}>2 - Buruk</option>
                    <option value="3" {{ $review->rating == 3 ? 'selected' : '' }}>3 - Cukup</option>
                    <option value="4" {{ $review->rating == 4 ? 'selected' : '' }}>4 - Baik</option>
                    <option value="5" {{ $review->rating == 5 ? 'selected' : '' }}>5 - Sangat Baik</option>
                </select>
            </div>

            {{-- REVIEW TEXT --}}
            <div class="mb-3">
                <label class="form-label">Review</label>
                <textarea name="review_text" class="form-control" rows="5" required>{{ $review->review_text }}</textarea>
            </div>

            {{-- STATUS --}}
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ $review->status == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="0" {{ $review->status == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>

            {{-- BUTTON --}}
            <button class="btn btn-primary">Update</button>
            <a href="{{ route('review.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection
