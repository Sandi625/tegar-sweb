@include('base2.header')

<section class="blog" style="margin-top: 120px; display:flex; gap:30px;">

    {{-- Main Blog Content --}}
    <div class="blogWrapper" style="flex:3;">

        {{-- Blog description --}}
        <p class="para one" id="para">
            {!! $blog->description !!}
        </p>

        {{-- Loop each child day / itinerary --}}
        @foreach($blog->days as $index => $day)
            {{-- Day Title & Description --}}
            <div class="para two">
                <h2>{{ $index + 1 }}. {{ $day->title }}</h2>
                <hr />
                {!! $day->description !!}
            </div>

            {{-- Day Image --}}
            @if($day->image)
            <div class="imageContainer">
                <img src="{{ asset('uploads/blog_days/' . $day->image) }}" alt="{{ $day->image_title ?? $day->title }}" />
                <div class="imgDescription">
                    <h4 class="imageTitle">{{ $day->image_title ?? $day->title }}</h4>
                    <p class="imageDescription">{{ $day->image_description ?? Str::limit(strip_tags($day->description), 120) }}</p>
                </div>
            </div>
            @endif
        @endforeach

        {{-- Closing thank you section --}}
        <div class="para two">
            <hr />
            Thank you for reading!
        </div>
    </div>

    {{-- Sidebar Content --}}
    <div class="contentContainer" style="flex:1;">
        <p class="contentHeader">Content</p>
        <ol>
            @foreach($blog->days as $index => $day)
                <li>{{ $day->title }}</li>
            @endforeach
        </ol>
    </div>

</section>

@include('base2.footer')
