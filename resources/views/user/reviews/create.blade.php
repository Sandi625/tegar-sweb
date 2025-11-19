@include('base3.header')

<section class="customTripSection" style="padding:50px 20px; background:#f4f8ff;">
  <div class="customTripContainer" style="max-width:600px; margin:0 auto;">

    <h2 class="customTripTitle" style="text-align:center; font-size:2.5rem; color:#142361; margin-bottom:15px;">
      Write Your Review
    </h2>
    <p class="customTripDescription" style="text-align:center; font-size:1.1rem; margin-bottom:30px; color:#555;">
      Share your experience joining our tour:
    </p>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('user.review.store') }}" method="POST" enctype="multipart/form-data" class="customTripForm" style="display:flex; flex-direction:column; gap:15px;">
      @csrf

      <label for="reviewName" style="font-weight:bold;">Name</label>
      <input type="text" id="reviewName" name="name" placeholder="Your Name" required
             style="width:100%; padding:10px; border-radius:6px; border:1px solid #ccc; font-size:1rem;">

      <label for="reviewEmail" style="font-weight:bold;">Email</label>
      <input type="email" id="reviewEmail" name="email" placeholder="Your Email" required
             style="width:100%; padding:10px; border-radius:6px; border:1px solid #ccc; font-size:1rem;">

      <label for="reviewRating" style="font-weight:bold;">Rating</label>
      <select id="reviewRating" name="rating" required
              style="width:100%; padding:10px; border-radius:6px; border:1px solid #ccc; font-size:1rem; background:#e9ecef; color:#555;">
        <option value="">-- Select Rating --</option>
        @for ($i = 1; $i <= 5; $i++)
          <option value="{{ $i }}">{{ $i }} ★</option>
        @endfor
      </select>

      <label for="reviewText" style="font-weight:bold;">Review</label>
      <textarea id="reviewText" name="review_text" rows="5" placeholder="Write your review here..." required
                style="width:100%; padding:10px; border-radius:6px; border:1px solid #ccc; font-size:1rem;"></textarea>

      <label for="reviewPhoto" style="font-weight:bold;">Photo (optional)</label>
      <input type="file" id="reviewPhoto" name="photo" style="width:100%; padding:10px; border-radius:6px; border:1px solid #ccc; font-size:1rem;">

      <button type="submit" class="customTripBtn emailBtn"
              style="width:100%; padding:12px; background-color:#f2870c; color:white; border:none; border-radius:8px; font-size:1.2rem; cursor:pointer; transition:all 0.3s; margin-top:10px;">
        Submit Review
      </button>
    </form>
  </div>
</section>

@include('base3.footer')

{{-- SweetAlert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
<script>
  Swal.fire({
    icon: 'success',
    title: 'Success!',
    text: '{{ session('success') }}',
    confirmButtonColor: '#f2870c'
  });
</script>
@endif
