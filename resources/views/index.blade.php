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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>


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
    <a href="{{ route('home.page') }}" class="brand-logo">Travel</a>
    <ul class="links">
        <li class="link">
            <b><a href="{{ route('home.page') }}"style="color: #f2870c">Home</a></b>
        </li>
        {{-- <li class="link"><a href="{{ route('places.page') }}">Places</a></li> --}}
        <li class="link"><a href="{{ route('allpackage.page') }}">Tour Package</a></li>
        <li class="link"><a href="{{ route('blog.page') }}">Blog</a></li> <!-- Tambahan -->
        <li class="link"><a href="{{ route('gallery.page') }}">Gallery</a></li>
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

      <a href="#places">
        <button class="headerButton">
          Discover New
          <span class="buttonHighlight">
            <img src="/Images/icon.svg" alt="location icon" class="cocoIcon" />
            Locations
          </span>
        </button>
      </a>

      <div class="quote">
        <h4 class="quoteText">
          <i>
            “I am not the same, having seen the moon shine on the other side
            of the world”
          </i>
        </h4>
        <h4 class="author">– Mary Anne Radmacher</h4>
      </div>
    </div>

    <!-- Grid Gambar -->
    <div class="images">
      <div class="image wide" style="background-image: url('{{ asset('Images/7.jpg') }}');"></div>
      <div class="image" style="background-image: url('{{ asset('Images/13.jpg') }}');"></div>
      <div class="image tall" style="background-image: url('{{ asset('Images/bluefire1.jpg') }}');"></div>
      <div class="image" style="background-image: url('{{ asset('Images/51.jpg') }}');"></div>
      <div class="image" style="background-image: url('{{ asset('Images/47.jpg') }}');"></div>
      <div class="image wide" style="background-image: url('{{ asset('Images/44.jpg') }}');"></div>
    </div>

    <!-- Slider (pakai gambar yang sama) -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('{{ asset('Images/7.jpg') }}');"></div>
        <div class="swiper-slide" style="background-image: url('{{ asset('Images/12.jpg') }}');"></div>
        <div class="swiper-slide" style="background-image: url('{{ asset('Images/1.jpg') }}');"></div>
        <div class="swiper-slide" style="background-image: url('{{ asset('Images/51.jpg') }}');"></div>
        <div class="swiper-slide" style="background-image: url('{{ asset('Images/47.jpg') }}');"></div>
        <div class="swiper-slide" style="background-image: url('{{ asset('Images/44.jpg') }}');"></div>
      </div>

      <!-- navigation -->
      {{-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> --}}

      <!-- pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <!-- Shape bawah -->
  <div class="custom-shape-divider-bottom-1630587725">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
      preserveAspectRatio="none">
      <path
        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,
           82.39-16.72,168.19-17.73,250.45-.39C823.78,31,
           906.67,72,985.66,92.83c70.05,18.48,
           146.53,26.09,214.34,3V0H0V27.35A600.21,
           600.21,0,0,0,321.39,56.44Z"
        class="shape-fill"></path>
    </svg>
  </div>
</section>






{{-- Tour Paket --}}

  <section class="blogs">
    <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
        Bromo - Ijen <span class="buttonHighlight">Tour Packages</span>
    </h1>
    <div class="blogsContainer">
        <div class="blogsContent">

            <div class="blog">
                <img src="{{ asset('Images/7.jpg') }}" alt="Bromo Ijen Tour" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Explore the magical sunrise of Mount Bromo and the stunning blue flames of Ijen Crater in this 4-day 3-night tour.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$350 / person</span>
                </p>
                <a href="{{ route('bromoijen1.page') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/11.jpg') }}" alt="Bromo Ijen Tour from Surabaya" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour from Surabaya (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Starting from Surabaya, enjoy a comfortable journey to Mount Bromo and Ijen, including transport and local guide.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$370 / person</span>
                </p>
                <a href="{{ route('blog.italy') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/bromo3.jpg') }}" alt="Bromo Ijen Tour from Bali" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour from Bali (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Begin your adventure from Bali, crossing to Java to witness Bromo’s sunrise and Ijen’s mesmerizing blue fire.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$400 / person</span>
                </p>
                <a href="{{ route('bromoijen.bali') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

        </div>
    </div>
</section>



 <section class="blogs">
    <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
        Bromo - Ijen - Tumpak Sewu <span class="buttonHighlight">Tour Packages</span>
    </h1>
   <div class="blogsContainer">
        <div class="blogsContent">

            <div class="blog">
                <img src="{{ asset('Images/7.jpg') }}" alt="Bromo Ijen Tour" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Explore the magical sunrise of Mount Bromo and the stunning blue flames of Ijen Crater in this 4-day 3-night tour.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$350 / person</span>
                </p>
                <a href="{{ route('bromoijen1.page') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/11.jpg') }}" alt="Bromo Ijen Tour from Surabaya" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour from Surabaya (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Starting from Surabaya, enjoy a comfortable journey to Mount Bromo and Ijen, including transport and local guide.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$370 / person</span>
                </p>
                <a href="{{ route('blog.italy') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/bromo3.jpg') }}" alt="Bromo Ijen Tour from Bali" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour from Bali (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Begin your adventure from Bali, crossing to Java to witness Bromo’s sunrise and Ijen’s mesmerizing blue fire.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$400 / person</span>
                </p>
                <a href="{{ route('bromoijen.bali') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

        </div>
    </div>
</section>



<section class="blogs">
    <h1 class="blogsTitle" data-aos="fade-up" data-aos-duration="3000">
        Midnight Ijen Crater <span class="buttonHighlight">Tour Packages</span>
    </h1>
   <div class="blogsContainer">
        <div class="blogsContent">

            <div class="blog">
                <img src="{{ asset('Images/7.jpg') }}" alt="Bromo Ijen Tour" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Explore the magical sunrise of Mount Bromo and the stunning blue flames of Ijen Crater in this 4-day 3-night tour.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$350 / person</span>
                </p>
                <a href="{{ route('bromoijen1.page') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/11.jpg') }}" alt="Bromo Ijen Tour from Surabaya" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour from Surabaya (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Starting from Surabaya, enjoy a comfortable journey to Mount Bromo and Ijen, including transport and local guide.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$370 / person</span>
                </p>
                <a href="{{ route('blog.italy') }}">
                    <button class="readBlog">Details</button>
                </a>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/bromo3.jpg') }}" alt="Bromo Ijen Tour from Bali" />
                <h3 class="blogTitle">
                    Bromo Ijen Tour from Bali (4D 3N)
                </h3>
                {{-- <p class="blogDescription">
                    Begin your adventure from Bali, crossing to Java to witness Bromo’s sunrise and Ijen’s mesmerizing blue fire.
                </p> --}}
                <p class="blogPrice">
                    Start from <span class="highlightText">$400 / person</span>
                </p>
                <a href="{{ route('bromoijen.bali') }}">
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
</section>






 <section class="customTourForm" style="max-width:600px;margin:50px auto;padding:20px;border:1px solid #ccc;border-radius:8px;">
  <h2 style="text-align:center;margin-bottom:20px;">Customize Your Tour Package</h2>

  <form id="tourForm">
    <div style="margin-bottom:15px;">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required style="width:100%;padding:8px;border-radius:4px;border:1px solid #ccc;">
    </div>

    <div style="margin-bottom:15px;">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required style="width:100%;padding:8px;border-radius:4px;border:1px solid #ccc;">
    </div>

    <div style="margin-bottom:15px;">
      <label for="destination">Destination:</label>
      <input type="text" id="destination" name="destination" required style="width:100%;padding:8px;border-radius:4px;border:1px solid #ccc;">
    </div>

    <div style="margin-bottom:15px;">
      <label for="date">Preferred Date:</label>
      <input type="date" id="date" name="date" required style="width:100%;padding:8px;border-radius:4px;border:1px solid #ccc;">
    </div>

    <div style="margin-bottom:15px;">
      <label for="notes">Additional Notes:</label>
      <textarea id="notes" name="notes" rows="4" style="width:100%;padding:8px;border-radius:4px;border:1px solid #ccc;"></textarea>
    </div>

    <!-- Tombol WA -->
    <button type="button" onclick="sendWhatsApp()"
      style="width:100%;padding:12px;background-color:#25d366;color:white;border:none;border-radius:6px;font-size:16px;cursor:pointer;margin-bottom:10px;">
      Send via WhatsApp
    </button>

    <!-- Tombol Email -->
    <button type="button" onclick="sendEmail()"
      style="width:100%;padding:12px;background-color:#f2870c;color:white;border:none;border-radius:6px;font-size:16px;cursor:pointer;">
      Send via Email
    </button>
  </form>
</section>

<section class="reviews">
  <h1 class="reviewsTitle" data-aos="fade-up" data-aos-duration="2000">
    What People <span class="highlight">Say</span>
  </h1>

  <div class="marquee">
    <div class="marquee-inner">
      <!-- Review Cards (set 1) -->
      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="reviewImg">
        <h3 class="reviewName">Sarah Johnson</h3>
        <p class="reviewText">“The Ijen Crater tour was absolutely breathtaking! The team was professional and made sure everything went smoothly.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/men/36.jpg" class="reviewImg">
        <h3 class="reviewName">Michael Lee</h3>
        <p class="reviewText">“Amazing experience! Blue fire is something I will never forget. Highly recommended tour service.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/women/65.jpg" class="reviewImg">
        <h3 class="reviewName">Emily Davis</h3>
        <p class="reviewText">“Everything was well-organized from Bali pickup to the hike itself. Tour guide was friendly and helpful.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/men/22.jpg" class="reviewImg">
        <h3 class="reviewName">David Kim</h3>
        <p class="reviewText">“One of the best tours I’ve ever joined! Worth every penny. I’ll recommend this to all my friends.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/women/12.jpg" class="reviewImg">
        <h3 class="reviewName">Sophia Martinez</h3>
        <p class="reviewText">“The guides were super friendly and the hike was magical. Thank you for the unforgettable experience.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <!-- Copy kedua supaya looping mulus -->
      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="reviewImg">
        <h3 class="reviewName">Sarah Johnson</h3>
        <p class="reviewText">“The Ijen Crater tour was absolutely breathtaking! The team was professional and made sure everything went smoothly.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/men/36.jpg" class="reviewImg">
        <h3 class="reviewName">Michael Lee</h3>
        <p class="reviewText">“Amazing experience! Blue fire is something I will never forget. Highly recommended tour service.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/women/65.jpg" class="reviewImg">
        <h3 class="reviewName">Emily Davis</h3>
        <p class="reviewText">“Everything was well-organized from Bali pickup to the hike itself. Tour guide was friendly and helpful.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/men/22.jpg" class="reviewImg">
        <h3 class="reviewName">David Kim</h3>
        <p class="reviewText">“One of the best tours I’ve ever joined! Worth every penny. I’ll recommend this to all my friends.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>

      <div class="reviewCard">
        <img src="https://randomuser.me/api/portraits/women/12.jpg" class="reviewImg">
        <h3 class="reviewName">Sophia Martinez</h3>
        <p class="reviewText">“The guides were super friendly and the hike was magical. Thank you for the unforgettable experience.”</p>
        <div class="reviewRating">⭐⭐⭐⭐⭐</div>
      </div>
    </div>
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

                <!-- Bromo -->
                <div class="item">
                    <div class="item-content">
                        <div class="item-image"
                            style="background: url('{{ asset('Images/bromo3.jpg') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            <a href="{{ route('bromo.page') }}" class="location">
                                <img src="{{ asset('Images/bromo3.jpg') }}" />
                                <p class="place">Mount Bromo</p>
                            </a>
                        </div>
                        <div class="placeTitle">Mount Bromo <span></span></div>
                        <div class="placeDescription">
                            Mount Bromo is one of the most famous volcanoes in Indonesia...
                        </div>
                        <div class="button-wrapper">
                            <button onclick="window.location.href='{{ route('bromo.page') }}'" class="viewButton">View Blog</button>
                        </div>
                    </div>
                </div>

                <!-- Ijen -->
                <div class="item">
                    <div class="item-content">
                        <div class="item-image"
                            style="background: url('{{ asset('Images/ijen1.jpg') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            <a href="{{ route('ijen.page') }}" class="location">
                                <img src="{{ asset('Images/ijen1.jpg') }}" />
                                <p class="place">Ijen</p>
                            </a>
                        </div>
                        <div class="placeTitle">Ijen <span></span></div>
                        <div class="placeDescription">
                            Ijen is a famous volcanic complex in East Java, Indonesia...
                        </div>
                        <div class="button-wrapper">
                            <button onclick="window.location.href='{{ route('ijen.page') }}'" class="viewButton">View Blog</button>
                        </div>
                    </div>
                </div>

                <!-- Tumpak Sewu -->
                <div class="item">
                    <div class="item-content">
                        <div class="item-image"
                            style="background: url('{{ asset('Images/tumpak-sewu.jpg') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            <a href="{{ route('tumpaksewu.page') }}" class="location">
                                <img src="{{ asset('Images/tumpak-sewu.jpg') }}" />
                                <p class="place">Tumpak Sewu</p>
                            </a>
                        </div>
                        <div class="placeTitle">Tumpak Sewu <span></span></div>
                        <div class="placeDescription">
                            Tumpak Sewu is often called the Niagara of Java, a stunning waterfall in East Java...
                        </div>
                        <div class="button-wrapper">
                            <button onclick="window.location.href='{{ route('tumpaksewu.page') }}'" class="viewButton">View Blog</button>
                        </div>
                    </div>
                </div>

                <!-- Bali -->
                <div class="item">
                    <div class="item-content">
                        <div class="item-image"
                            style="background: url('{{ asset('Images/bali2.jpg') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
                            <a href="{{ route('bali.page') }}" class="location">
                                <img src="{{ asset('Images/bali2.jpg') }}" />
                                <p class="place">Bali</p>
                            </a>
                        </div>
                        <div class="placeTitle">Bali <span></span></div>
                        <div class="placeDescription">
                            Bali, the Island of Gods, famous for its beaches, temples, and cultural richness...
                        </div>
                        <div class="button-wrapper">
                            <button onclick="window.location.href='{{ route('bali.page') }}'" class="viewButton">View Blog</button>
                        </div>
                    </div>
                </div>

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
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>













<!-- Shape Divider di luar section -->
<div class="custom-shape-divider-bottom-1631607238">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>
    <footer>

        <div class="footerDetails">
            <div class="footerDescription">
                <h1 class="footerTitle">Tegar</h1>
                <p class="footerPara">
                    Discover New Destinations. See breath-taking places and experience
                    them from your device online.
                    <br />
                    Our travel writing captures the one thing we always strive to create
                    – incredible travel experiences. From learning about the historical
                    and political context of a destination to finding some really great
                    hikes, each new place has something to discover.
                    <br />
                    We have a passion for storytelling, a knack for putting itineraries
                    together and a strong desire to have fun. Here are all our
                    adventures, our travel tips and our guides.
                </p>
            </div>

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
                    <div href="" class="contactOption discord">
                        <abbr title="Discord">
                            <img src="https://img.icons8.com/ios/50/ca7717/discord-logo--v1.png" />
                        </abbr>
                    </div>
                </div>
            </div>
        </div>

        <div class="footerCopyright">
            <p>
                This website is designed and developed by
                <span>Tegar Firmansyah And Sandi Permadi</span>
                <span></span>
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
