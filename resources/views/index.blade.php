<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
        integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('Images/favicon.png') }}" type="image/x-icon" />

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>

    <title>Tegar's Web</title>
</head>


<body>
    {{-- <div id="leafContainer"></div> --}}

    <div class="loaderr">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>
  <nav>
    <a href="#" class="brand-logo">Vamos</a>

    <ul class="links">
        <li class="link">
            <b><a href="#" style="color: #f2870c">Home</a></b>
        </li>
        {{-- <li class="link"><a href="{{ route('places.page') }}">Places</a></li> --}}
        <li class="link"><a href="{{ route('allpackage.page') }}">Tour</a></li>
        <li class="link"><a href="{{ route('user.blog.index') }}">Blog</a></li>
        <li class="link"><a href="{{ route('gallery.page') }}">Gallery</a></li>

        <!-- 🔥 Tambahkan Login di sini -->
        <li class="link"><a href="{{ route('login') }}">Login</a></li>
    </ul>

    <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </div>
</nav>




    <div class="whatsapp-logo" onclick="redirectToWhatsApp()">
        <i class="fab fa-whatsapp"></i>
    </div>

    <section class="headerContainer">
        <div class="headerWrapper">
            <!-- Bagian Teks -->
            <div class="headerInfo">
                <h1 class="headerTitle">Discover New <span>Destinations</span></h1>

                <div class="headerDescription">
                    <b>Want memories for yourself, try TRAVELLING.</b><br>
                    <b>A Big World is waiting for you!!</b><br>
                    Discover, we bet you'll love it.
                </div>

       <button class="headerButton" onclick="location.href='#reviews'">
    What People
    <span class="buttonHighlight">
        <img src="/Images/icon.svg" alt="location icon" class="cocoIcon" />
        Say About Us
    </span>
</button>


                {{-- <div class="quote">
                    <h4 class="quoteText">
                        <i>
                            “I am not the same, having seen the moon shine on the other side
                            of the world”
                        </i>
                    </h4>
                    <h4 class="author">– Mary Anne Radmacher</h4>
                </div> --}}
            </div>

            <!-- Grid Gambar -->
            <div class="images">
                <div class="image wide" style="background-image: url('{{ asset('Images/IMG_4603.jpg') }}');"></div>
                <div class="image" style="background-image: url('{{ asset('Images/IMG_4123.jpg') }}');"></div>
                <div class="image tall" style="background-image: url('{{ asset('Images/i6.jpg') }}');"></div>
                <div class="image" style="background-image: url('{{ asset('Images/i5.jpg') }}');"></div>
                <div class="image" style="background-image: url('{{ asset('Images/IMG_4585.jpg') }}');"></div>
                <div class="image wide" style="background-image: url('{{ asset('Images/IMG_3343.jpg') }}');"></div>
            </div>

            <!-- Slider (pakai gambar yang sama) -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('{{ asset('Images/7.jpg') }}');"></div>
                    <div class="swiper-slide" style="background-image: url('{{ asset('Images/i8.jpg') }}');"></div>
                    <div class="swiper-slide" style="background-image: url('{{ asset('Images/IMG_8779.jpg') }}');">
                    </div>
                    <div class="swiper-slide" style="background-image: url('{{ asset('Images/i5.jpg') }}');"></div>
                    <div class="swiper-slide" style="background-image: url('{{ asset('Images/IMG_3303.jpg') }}');">
                    </div>
                    <div class="swiper-slide" style="background-image: url('{{ asset('Images/IMG_4120.jpg') }}');">
                    </div>
                </div>

                <!-- navigation -->
                {{-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> --}}

                <!-- pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <div class="aboutInfo">
            <h2 class="aboutTitle">
                <i class="fas fa-route aboutIcon"></i> <!-- 🔹 icon hiasan -->
                About <span>Us</span>
            </h2>
            <p class="aboutDescription">
                At Vamos Adventure, we believe that a journey is more than just a holiday it is an unforgettable
                adventure filled with discovery and wonder. With us, you can witness the breathtaking sunrise over Mount
                Bromo, explore the natural beauty of the Ijen Crater with its world-famous blue flames, be amazed by the
                majestic Tumpak Sewu Waterfall, and enjoy many other fascinating destinations we have to offer. But the
                experience doesn’t end there. Java is home to countless hidden treasures, and through our carefully
                designed tour packages, you will uncover destinations that are just as captivating. At Vamos Adventure,
                we not only provide a wide selection of ready made tour packages but also offer the flexibility to
                customize your journey according to your preferences and needs. Get ready for an extraordinary adventure
                where every step creates cherished moments and memories that will last a lifetime. </p>

        </div>


        <!-- Shape bawah -->
        <div class="custom-shape-divider-bottom-1630587725">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,
           82.39-16.72,168.19-17.73,250.45-.39C823.78,31,
           906.67,72,985.66,92.83c70.05,18.48,
           146.53,26.09,214.34,3V0H0V27.35A600.21,
           600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>

    {{-- <section class="aboutContainer" id="about">
  <div class="aboutWrapper">
    <!-- Bagian teks -->


    <!-- Bagian gambar -->
    <div class="aboutImage">
      <img src="/Images/43qq.jpg" alt="About Vamos Adventure" />
    </div>
  </div>

  <!-- Wave bawah -->
  <div class="custom-shape-divider-bottom-about">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M985.66,92.83C906.67,72,823.78,31,
        743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39,
        -57.87,11.73-114,31.07-172,41.86A600.21,
        600.21,0,0,1,0,27.35V120H1200V95.81
        C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
        class="shape-fill"></path>
    </svg>
  </div>
</section> --}}







    {{-- Tour Paket --}}

    {{-- <section class="blogs">
        <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
            Bromo - Ijen <span class="buttonHighlight">Tour Packages</span>
        </h1>
        <div class="blogsContainer">
            <div class="blogsContent">

                <div class="blog">
                    <img src="{{ asset('Images/7.jpg') }}" alt="Bromo Ijen Tour" />
                    <h3 class="blogTitle">
                        Bromo Ijen Tour From Surabaya (4D 3N)
                    </h3>

                    <p class="blogPrice">
                        Start from <span class="highlightText">$350 / person</span>
                    </p>
                    <a href="{{ route('bromoijen1.page') }}">
                        <button class="readBlog">Details</button>
                    </a>
                </div>

                <div class="blog">
                    <img src="{{ asset('Images/IMG_4120.jpg') }}" alt="Bromo Ijen Tour from Surabaya" />
                    <h3 class="blogTitle">
                        Bromo Ijen Tour from Bali (4D 3N)
                    </h3>

                    <p class="blogPrice">
                        Start from <span class="highlightText">$370 / person</span>
                    </p>
                    <a href="{{ route('bromoijen2.page') }}">
                        <button class="readBlog">Details</button>
                    </a>
                </div>



            </div>
        </div>
    </section> --}}
  <div class="searchContainer" style="text-align:center; margin-top:40px;">
    <form action="{{ route('home') }}" method="GET">
        <input
            type="text"
            id="searchInput"
            name="search"
            placeholder="Search tour packages..."
            value="{{ request('search') }}"
            class="searchInput"
        >
        <button type="submit" class="searchBtn">Search</button>
    </form>
</div>



  @foreach ($categories as $category)
    @php
        $firstThree = $category->tours->take(3);
        $others = $category->tours->skip(3);
    @endphp

    <section class="blogs">
        <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
            {{ $category->name }} <span class="buttonHighlight">Tour Packages</span>
        </h1>

        <div class="blogsContainer">

            {{-- BARIS PERTAMA → Hanya 3 Card --}}
            <div class="blogsTopRow">
                @foreach ($firstThree as $tour)
                    <div class="blog">

                        <img src="{{ asset('uploads/tours/' . ($tour->images[0] ?? 'default.jpg')) }}"
                            alt="{{ $tour->title }}">

                        <h3 class="blogTitle">{{ $tour->title }}</h3>

                        <p class="blogPrice">
                            Start from <span class="highlightText">${{ $tour->price }} / person</span>
                        </p>

                        <a href="{{ route('tour.detail', $tour->slug) }}">
                            <button class="readBlog">Details</button>
                        </a>

                    </div>
                @endforeach
            </div>

            {{-- BARIS KEDUA → Sisa card --}}
            <div class="blogsContent">
                @foreach ($others as $tour)
                    <div class="blog">

                        <img src="{{ asset('uploads/tours/' . ($tour->images[0] ?? 'default.jpg')) }}"
                            alt="{{ $tour->title }}">

                        <h3 class="blogTitle">{{ $tour->title }}</h3>

                        <p class="blogPrice">
                            Start from <span class="highlightText">${{ $tour->price }} / person</span>
                        </p>

                        <a href="{{ route('tour.detail', $tour->slug) }}">
                            <button class="readBlog">Details</button>
                        </a>

                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endforeach






    {{-- <section class="blogs">
        <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
            Tumpak Sewu - Bromo - Ijen <span class="buttonHighlight">Tour Packages</span>
        </h1>
        <div class="blogsContainer">
            <div class="blogsContent">

                <div class="blog">
                    <img src="{{ asset('Images/IMG_4145.jpg') }}" alt="Tumpak Sewu" />
                    <h3 class="blogTitle">
                        Tumpaksewu-Bromo-Ijen Tour Tour From Surabaya (4D3N)
                    </h3>

                    <p class="blogPrice">
                        Start from <span class="highlightText">$350 / person</span>
                    </p>
                    <a href="{{ route('tumpakoption1.page') }}">
                        <button class="readBlog">Details</button>
                    </a>
                </div>

                <div class="blog">
                    <img src="{{ asset('Images/IMG_4687.jpg') }}" alt="Bromo Ijen Tour from Surabaya" />
                    <h3 class="blogTitle">
                          Tumpaksewu-Bromo-Ijen Tour Tour From Bali (4D3N)
                    </h3>

                    <p class="blogPrice">
                        Start from <span class="highlightText">$370 / person</span>
                    </p>
                    <a href="{{ route('tumpakoption2.page') }}">
                        <button class="readBlog">Details</button>
                    </a>
                </div>


            </div>
        </div>
    </section> --}}



    {{-- <section class="blogs">
        <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
            Midnight Ijen Crater <span class="buttonHighlight">Tour Packages</span>
        </h1>
        <div class="blogsContainer">
            <div class="blogsContent">
                <div class="blog">
                    <img src="{{ asset('Images/i5.jpg') }}" alt="Bromo Ijen Tour" />
                    <h3 class="blogTitle">
                        Mid night ijen
                    </h3>

                    <p class="blogPrice">
                        Start from <span class="highlightText">$350 / person</span>
                    </p>
                    <a href="{{ route('midnightijen.option') }}">
                        <button class="readBlog">Details</button>
                    </a>
                </div>




            </div>
        </div>

        <div class="funFact" data-aos="fade-up" data-aos-duration="2000">
            <div class="factContent">
                <div class="funFactButton">
                    <a href="{{ route('allpackage.page') }}" class="btn">View All Package</a>
                </div>
            </div>
        </div>
    </section> --}}


    <section class="blogs">
        <h1 style="font-size:1.8rem; color:#142361; text-align:center; margin-top:30px;" data-aos="fade-up"
            data-aos-duration="3000">
            Customize <span class="buttonHighlight">Your Tour</span>
        </h1>

        <div style="display:flex; justify-content:center; width:100%;">
            <div
                style="display:flex; justify-content:center; width:100%; max-width:600px; flex-direction:column; align-items:center;">

                <div id="customTourCard"
                    style="width:100%; max-width:500px; padding:15px 12px; font-size:0.95rem; border-radius:8px; box-shadow:0 2px 5px rgba(0,0,0,0.1); transition:all 0.3s;">

                    <img src="{{ asset('Images/IMG_7671.jpg') }}" alt="Bromo Ijen Tour" id="customTourImg"
                        style="width:100%; height:auto; border-radius:8px; object-fit:cover; transition: transform 0.3s;">

                    <h3 id="customTourTitle"
                        style="font-size:20px; margin-top:12px; color:#142361; text-align:center;">
                        Custom Your Tour Trip
                    </h3>

                    <button id="customTourButton" onclick="window.location.href='{{ route('custom.tour.form') }}'"
                        style="width:100%; font-size:1rem; padding:10px 0; border-radius:6px; border:none; background-color:#f2870c; color:white; cursor:pointer; margin-top:10px; transition:all 0.3s;">
                        Plan Now
                    </button>
                </div>

            </div>
        </div>
    </section>










<section id="reviews" class="reviews">
    <h1 class="reviewsTitle" data-aos="fade-up" data-aos-duration="2000">
        What People <span class="highlight">Say</span>
    </h1>

    <div class="marquee">
        <div class="marquee-inner" style="display:flex; align-items:center;">

            {{-- Looping reviews --}}
            @foreach ($reviews as $review)
                <div class="reviewCard" style="flex:0 0 auto; margin:0 15px; width:200px; box-sizing:border-box;">
                    @if ($review->photo)
                        <img src="{{ asset('uploads/reviews/' . $review->photo) }}" class="reviewImg">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($review->name) }}&background=random" class="reviewImg">
                    @endif

                    <h3 class="reviewName">{{ $review->name }}</h3>
                    <p class="reviewText">“{{ Str::limit($review->review_text, 150) }}”</p>
                    <div class="reviewRating">
                        {{ str_repeat('⭐', $review->rating) }}
                    </div>
                </div>
            @endforeach

            {{-- SET 2 --}}
            @foreach ($reviews as $review)
                <div class="reviewCard" style="flex:0 0 auto; margin:0 15px; width:200px; box-sizing:border-box;">
                    @if ($review->photo)
                        <img src="{{ asset('uploads/reviews/' . $review->photo) }}" class="reviewImg">
                    @else
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($review->name) }}&background=random" class="reviewImg">
                    @endif

                    <h3 class="reviewName">{{ $review->name }}</h3>
                    <p class="reviewText">“{{ Str::limit($review->review_text, 150) }}”</p>
                    <div class="reviewRating">
                        {{ str_repeat('⭐', $review->rating) }}
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <div style="text-align:center; margin-top:25px;">
        <button onclick="window.location.href='{{ route('user.review.create') }}'"
            style="padding:12px 25px; font-size:1rem; border:none; border-radius:6px; background-color:#f2870c; color:white; cursor:pointer; transition:all 0.3s;">
            Create Your Review
        </button>
    </div>
</section>







 <section class="trending" id="places">
    <div class="trendingWrapper">
        <img src="{{ asset('assets/leaf.svg') }}" class="trendingSVG1" />

        <h1 class="trendingTitle" data-aos="fade-up" data-aos-duration="2000">
            Read The <span class="buttonHighlight">Blogs</span>
        </h1>

        <div class="menu-wrapper">
            <div class="menu">

                @foreach ($blogs as $blog)
                    <div class="item">
                        <div class="item-content">

                            <!-- IMAGE -->
                            <div class="item-image"
                                style="
                                    background: url('{{ asset('uploads/blogs/' . $blog->image) }}');
                                    background-position: center;
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                ">

                                <a href="{{ route('user.blog.show', $blog->slug) }}" class="location">
                                    <img src="{{ asset('uploads/blogs/' . $blog->image) }}" alt="{{ $blog->title }}" />
                                    <p class="place">{{ $blog->title }}</p>
                                </a>
                            </div>

                            <!-- TITLE -->
                            <div class="placeTitle">
                                {{ $blog->title }}
                            </div>

                            <!-- DESCRIPTION -->
                            <div class="placeDescription">
                                {{ Str::limit(strip_tags($blog->description), 120) }}
                            </div>

                            <!-- BUTTON -->
                            <div class="button-wrapper">
                                <button
                                    onclick="window.location.href='{{ route('user.blog.show', $blog->slug) }}'"
                                    class="viewButton">
                                    View Blog
                                </button>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>







    <section class="googleMap" style="padding: 50px 0; background: var(--bg-color);">
        <div class="container" style="max-width: 1200px; margin: auto; text-align: center;">
            <h2 style="font-size: 28px; margin-bottom: 20px; color: var(--text-color);">
                Find Us on Google Maps
            </h2>
            <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d709.5816697941696!2d114.2573701416686!3d-8.205609772008037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd14f6d1d6614bb%3A0xf9c55b4687931297!2sPT.%20IJEN%20CRATER%20TOUR%20INDONESIA!5e0!3m2!1sen!2sid!4v1724565411781!5m2!1sen!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>













    <!-- Shape Divider di luar section -->
    <div class="custom-shape-divider-bottom-1631607238">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
            preserveAspectRatio="none">
            <path
                d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                class="shape-fill"></path>
        </svg>
    </div>
    <footer>
        <div class="footerDetails">
            <!-- Kolom 1 -->
            <div class="footerDescription">
                <h1 class="footerTitle">Tegar</h1>
                <p class="footerPara">
                    At Vamos Adventure, we believe that a journey is more than just a
                    holiday—it is an unforgettable adventure filled with discovery and wonder.
                    <br /><br />
                    With us, you can witness the breathtaking sunrise over Mount Bromo, explore
                    the natural beauty of the Ijen Crater with its world-famous blue flames, be
                    amazed by the majestic Tumpak Sewu Waterfall, and enjoy many other fascinating
                    destinations we have to offer.
                    <br /><br />
                    But the experience doesn’t end there. Java is home to countless hidden treasures,
                    and through our carefully designed tour packages, you will uncover destinations
                    that are just as captivating.
                    <br /><br />
                    At Vamos Adventure, we not only provide a wide selection of ready-made tour packages
                    but also offer the flexibility to customize your journey according to your preferences
                    and needs.
                    <br /><br />
                    Get ready for an extraordinary adventure where every step creates cherished
                    moments and memories that will last a lifetime.
                </p>

            </div>

            <!-- Kolom 2 -->
            <div class="footerContact">
                <h1 class="contactTitle">Contact Me</h1>
                <p class="contactPara">
                    If you want to make any inquiries about the website, you can contact
                    me through below options
                </p>
                <div class="contactOptions">
                    <a href="https://github.com/chamindujs" target="_blank" class="contactOption">
                        <abbr title="GitHub">
                            <img src="https://img.icons8.com/ios-glyphs/60/ca7717/github.png" />
                        </abbr>
                    </a>
                    <a href="https://wa.link/1yweij" target="_blank" class="contactOption">
                        <abbr title="WhatsApp">
                            <img src="https://img.icons8.com/material-outlined/48/ca7717/whatsapp--v1.png" />
                        </abbr>
                    </a>
                    <div class="contactOption call">
                        <abbr title="Call">
                            <img src="https://img.icons8.com/ios/48/ca7717/phone.png" />
                        </abbr>
                    </div>
                    <a href="mailto:chamindujs@gmail.com" target="_blank" class="contactOption">
                        <abbr title="Gmail">
                            <img src="https://img.icons8.com/ios/50/ca7717/gmail-new.png" />
                        </abbr>
                    </a>
                    <div class="contactOption discord">
                        <abbr title="Discord">
                            <img src="https://img.icons8.com/ios/50/ca7717/discord-logo--v1.png" />
                        </abbr>
                    </div>
                </div>
            </div>

            <!-- Kolom 3 -->
            <div class="footerPayment">
                <h1 class="paymentTitle">Payment Method</h1>
                <div class="paymentOptions">
                    <img src="/Images/paypal.png" alt="PayPal" />
                    <img src="/Images/wise.png" alt="Wise" />
                    <img src="/Images/bri.png" alt="BRI" />
                </div>

                <h1 class="paymentTitle">Available At</h1>
                <div class="availableOptions">
                    <img src="/Images/airbnb.png" alt="Airbnb" />
                    <img src="/Images/getyourguide.png" alt="GetYourGuide" />
                </div>
            </div>


            <div class="footerCopyright">
                <p>
                    This website is designed and developed by
                    <span>Tegar Firmansyah And Sandi Permadi</span>
                </p>
            </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="{{ asset('JS/app.js') }}"></script>

</body>

</html>
