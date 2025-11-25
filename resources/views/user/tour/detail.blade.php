{{-- resources/views/tour/detail.blade.php --}}
@include('partials.header')

<section class="headerContainer" id="header">

    {{-- SWIPER --}}
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @forelse($tour->images as $img)
                <div class="swiper-slide"
                    style="background: url('{{ asset('uploads/tours/' . $img) }}') center/cover no-repeat fixed;">
                </div>
            @empty
                <div class="swiper-slide"
                    style="background: url('{{ asset('Images/default.jpg') }}') center/cover no-repeat fixed;">
                </div>
            @endforelse
        </div>
    </div>

    <div class="headerWrapper"></div>

    {{-- CONTENT --}}
    <div class="content" style="display:flex; flex-direction:column; align-items:center; text-align:center; gap:10px;">

        <div class="title">
            <h1 style="text-transform: uppercase; margin-bottom:10px;">{{ $tour->title }}</h1>
        </div>

        <div class="otherDetails" style="display:flex; gap:20px; justify-content:center; align-items:center;">
            @if($tour->duration)
            <p class="readTime" style="display:flex; align-items:center; gap:5px;">
                <span><img src="https://img.icons8.com/ios/50/ffffff/time--v1.png" style="width:20px;" /></span>
                {{ $tour->duration }}
            </p>
            @endif

            <p class="readTime" style="display:flex; align-items:center; gap:5px;">
                <span><img src="https://img.icons8.com/ios-glyphs/30/ffffff/user--v1.png" style="width:20px;" /></span>
                {{ $tour->trip_type ?? 'Private Trip' }}
            </p>
        </div>

        {{-- PDF BUTTON --}}
        @if($tour->pdf)
        <div>
            <a href="{{ asset('uploads/pdfs/' . $tour->pdf) }}" target="_blank" download>
                <button style="margin-top:15px; padding:10px 25px; background:#fff; color:#333; border:none; border-radius:6px; cursor:pointer; font-weight:bold;">
                    📄 Download PDF Itinerary
                </button>
            </a>
        </div>
        @endif

    </div>

    <a href="#para">
        <img src="https://img.icons8.com/external-those-icons-fill-those-icons/24/ffffff/external-down-arrows-those-icons-fill-those-icons-7.png"
             class="scrollButton" />
    </a>
</section>

{{-- DESCRIPTION & ITINERARY --}}
<section class="blog">
    <div class="blogWrapper">
        <p class="para one" id="para"></p>

        <div class="para two" id="itinerary">
            <h2>Itinerary</h2>
            <hr />

            @forelse($tour->days as $index => $day)
                <b>Day {{ $index + 1 }}: {{ $day->title }}</b><br>
                {!! nl2br(e($day->description)) !!}<br><br>
            @empty
                <span class="text-muted">Belum ada itinerary</span>
            @endforelse

            <b>Tour Services Finished</b>
        </div>

        <div class="thanks">
            <img src="https://img.icons8.com/fluency/50/4a90e2/filled-like.png" alt="Thank You" />
        </div>
    </div>


<div class="contentContainer">
    <p class="contentHeader">Other Tour Packages</p>
    <ol>
        @foreach ($allTours as $item)
            <li>
                <a href="{{ route('tour.detail', $item->slug) }}">
                    {{ $item->title }}
                </a>
            </li>
        @endforeach
    </ol>
</div>


</section>
  {{-- BOOKING BUTTON BAWAH --}}
    <div style="text-align:center; margin:40px 0;">
        <a href="{{ route('tour.booking', $tour->id) }}">
            <button class="btn-book"
                style="background:#f2870c; color:#fff; padding:15px 35px; border:none; border-radius:50px; font-size:18px; font-weight:bold; cursor:pointer; box-shadow:0 4px 10px rgba(0,0,0,0.2); transition:.3s;">
                🛒 Booking Now
            </button>
        </a>
    </div>


@include('partials.footer')

{{-- Swiper JS --}}
<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: { delay: 3000, disableOnInteraction: false },
        effect: "slide",
    });
</script>
