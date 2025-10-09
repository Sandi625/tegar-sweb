<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Ijen Tumpak Sewu | Tegar</title>
  </head>
      <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <body>
  <nav>
    <a href="{{ route('home.page') }}" class="brand-logo">Travel</a>
    <ul class="links">
        <li class="link">
            <b><a href="{{ route('home.page') }}">Home</a></b>
        </li>
        {{-- <li class="link"><a href="{{ route('places.page') }}">Places</a></li> --}}
        <li class="link"><a href="{{ route('allpackage.page') }}"style="color: #f2870c">Tour Package</a></li>
        <li class="link"><a href="{{ route('blog.page') }}">Blog</a></li> <!-- Tambahan -->
        <li class="link"><a href="{{ route('gallery.page') }}">Gallery</a></li>
    </ul>

    <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </div>
</nav>


    <a href="#header">
      <div class="toTop">
        <img src="https://img.icons8.com/metro/26/eb9431/left-up2.png" />
      </div>
    </a>

<section class="headerContainer" id="header">
  <!-- Background Slider -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background:url('/Images/IMG_3235.jpg') center/cover no-repeat;"></div>
      <div class="swiper-slide" style="background:url('/Images/IMG_4255.jpg') center/cover no-repeat;"></div>
      <div class="swiper-slide" style="background:url('/Images/IMG_6434.jpg') center/cover no-repeat;"></div>
    </div>
  </div>

  <!-- Konten di atas slider -->
  <div class="headerWrapper"></div>
  <div class="content">
    <div class="title">
      <h1 style="text-transform: uppercase;">
     Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Surabaya (finish at Surabaya)
      </h1>
    </div>
    <div class="otherDetails">
      <p class="readTime">
        <span>
          <img src="https://img.icons8.com/ios/50/ffffff/time--v1.png" />
        </span>
        3 Day 2 Night
      </p>

      <p class="readTime">
        <span>
          <img src="https://img.icons8.com/ios-glyphs/30/ffffff/user--v1.png" />
        </span>
        Private Trip
      </p>
    </div>

    <div class="downloadBtn">
      <a href="{{ asset('pdf/Itinerary 4D3N.pdf') }}" target="_blank" download>
        <button
          style="
            margin-top: 15px;
            padding: 10px 20px;
            background: #ffffff;
            color: #333;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
          ">
          📄 Download PDF Itinerary
        </button>
      </a>
    </div>
  </div>

  <a href="#para">
    <img src="https://img.icons8.com/external-those-icons-fill-those-icons/24/ffffff/external-down-arrows-those-icons-fill-those-icons-7.png"
         class="scrollButton" />
  </a>
</section>


    <script>
        var swiper = new Swiper(".mySwiper", {
            loop: true, // agar muter terus
            autoplay: {
                delay: 3000, // 3 detik
                disableOnInteraction: false,
            },
            effect: "slide", // geser ke kanan
        });
    </script>

    <style>
        .swiper {
            width: 100%;
            height: 100vh;
            /* full layar */
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            /* supaya konten tetap di atas */
        }

        .swiper-slide {
            width: 100%;
            height: 100%;
        }
    </style>



    <div class="progress"></div>

   <section class="blog">
        <div class="blogWrapper">


            <div class="para two" id="itinerary">
                <h2>Itinerary Tumpaksewu-Ijen-Bromo Tour (4D3N)    </h2>
                <hr />

                <b>Day 1: SURABAYA - ACOMMODATION IN TUMPAKSEWU
WATERFALL AREA  </b><br />
              The Tumpak Sewu – Bromo – Ijen Tour will begin from the Surabaya area.
Our crew will pick you up from your hotel, airport, or train station, and then we will drive from Surabaya to your accommodation near Tumpak Sewu Waterfall.
The journey takes approximately 4 hours, with several stops along the way for rest or sightseeing. <br> <br>
<b>PROGRAM OPSIONAL (No Additional Cost):</b>
If you depart in the morning and the weather is clear, you’ll have the opportunity to visit Jodipan Rainbow Village in Malang on the way from Surabaya to your hotel near Tumpak Sewu.
Feel free to check out pictures of Jodipan Rainbow Village online — it’s a colorful and vibrant spot worth seeing.

Upon arrival at your accommodation, check in and enjoy your free time.
You may explore the surroundings of your hotel or simply relax and enjoy a comfortable stay before starting your Tumpak Sewu Waterfall Tour the next day.
                (<a href="#" id="openPopup">Gambar Jodipan rainbow village. </a>)<br />

                <!-- Modal / Popup Slider -->
                <div id="popup" class="popup">
                    <div class="popup-content">
                        <span id="closePopup" class="close">&times;</span>

                        <!-- Slider Container -->
                        <div class="slider">
                            <div class="slides">
                                <img src="{{ asset('Images/IMG_4205.jpg') }}" alt="Jodipan rainbow village">
                                <img src="{{ asset('Images/mada1.jpg') }}" alt="Jodipan rainbow village">
                                <img src="{{ asset('Images/mada2.jpg') }}" alt="Jodipan rainbow village">
                            </div>

                            <!-- Navigation Arrows -->
                            <a class="prev">&#10094;</a>
                            <a class="next">&#10095;</a>
                        </div>

                        <p>Jodipan rainbow village</p>
                    </div>
                </div>

                <style>
                    .popup {
                        display: none;
                        position: fixed;
                        z-index: 9999;
                        padding-top: 60px;
                        left: 0;
                        top: 0;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.8);
                    }

                    .popup-content {
                        margin: auto;
                        background: #fff;
                        border-radius: 10px;
                        padding: 15px;
                        width: 80%;
                        max-width: 700px;
                        position: relative;
                        text-align: center;
                    }

                    .close {
                        position: absolute;
                        top: 10px;
                        right: 15px;
                        font-size: 28px;
                        font-weight: bold;
                        color: #aaa;
                        cursor: pointer;
                    }

                    .close:hover {
                        color: #000;
                    }

                    /* Slider */
                    .slider {
                        position: relative;
                        max-width: 100%;
                        overflow: hidden;
                    }

                    .slides img {
                        width: 100%;
                        display: none;
                        border-radius: 10px;
                    }

                    .slides img.active {
                        display: block;
                    }

                    .prev,
                    .next {
                        position: absolute;
                        top: 50%;
                        transform: translateY(-50%);
                        font-size: 30px;
                        font-weight: bold;
                        color: #333;
                        background: rgba(255, 255, 255, 0.7);
                        padding: 8px 12px;
                        border-radius: 50%;
                        cursor: pointer;
                        user-select: none;
                    }

                    .prev {
                        left: 10px;
                    }

                    .next {
                        right: 10px;
                    }
                </style>

                <script>
                    // Popup open/close
                    const popup = document.getElementById("popup");
                    const openPopup = document.getElementById("openPopup");
                    const closePopup = document.getElementById("closePopup");

                    openPopup.onclick = function(e) {
                        e.preventDefault();
                        popup.style.display = "block";
                        showSlide(slideIndex);
                    };
                    closePopup.onclick = function() {
                        popup.style.display = "none";
                    };
                    window.onclick = function(e) {
                        if (e.target === popup) popup.style.display = "none";
                    };

                    // Slider functionality
                    let slideIndex = 0;
                    const slides = document.querySelectorAll(".slides img");
                    const prev = document.querySelector(".prev");
                    const next = document.querySelector(".next");

                    function showSlide(n) {
                        slides.forEach((img, i) => {
                            img.classList.remove("active");
                            if (i === n) img.classList.add("active");
                        });
                    }

                    prev.onclick = function() {
                        slideIndex = (slideIndex - 1 + slides.length) % slides.length;
                        showSlide(slideIndex);
                    };
                    next.onclick = function() {
                        slideIndex = (slideIndex + 1) % slides.length;
                        showSlide(slideIndex);
                    };

                    // Default show first slide
                    showSlide(slideIndex);
                </script> <br /><br />

                <b>Day2: EXPLORE TUMPAKSEWU WATERFALL -
ACOMMODATION IN BONDOWOSO  </b><br />
             Upon arrival at Tumpak Sewu Waterfall, our guide will accompany you to the Panorama Viewpoint, which offers a breathtaking 180-degree view of the magnificent waterfall.

After taking in the scenery, we will descend to the base of the waterfall, where you can capture stunning photos from various angles.
The descent can be slippery due to wet conditions, but there are bamboo and newly built concrete stairs to assist you. In addition, sturdy ropes are available to hold onto when passing along paths where water drips over the rocks.
(Proper footwear and a waterproof bag are highly recommended.)

This activity will take approximately 3 hours, depending on how long you wish to explore and enjoy the waterfall.

Afterward, we will return to the hotel for breakfast before continuing our journey to Bondowoso (near Mount Ijen), which takes about 4 hours by car from Tumpak Sewu.
Along the way, you’ll pass through beautiful countryside landscapes, small towns, rice fields, plantations, and even coastal views.

For lunch, we can take you to a local restaurant en route.
By late afternoon, we will arrive at your hotel in Bondowoso, located about 2 hours from Mount Ijen.
You will spend the night here and rest before the Ijen Crater trekking adventure the next morning. <br /><br />



                <b>Day 3: IJEN CRATER BLUE FIRE TOUR - ACOMMODATION IN
MOUNT BROMO  </b><br />
              The Ijen Crater Tour will begin at 11:30 PM.
Our staff will pick you up from your hotel or villa in the Bondowoso area, and the journey will continue to Paltuding, the starting point of the hike, which takes approximately 2 hours from downtown Bondowoso.

The trekking starts around 2:00 AM. From here, it takes about 1.5 hours to hike up the slopes of Mount Ijen, covering a distance of approximately 3.5 kilometers. Along the way, you’ll enjoy the fresh mountain air, the sounds of nature, and the beautiful nighttime scenery.

Upon reaching the summit of Ijen Crater at an altitude of around 2,385 meters above sea level, you’ll have the option to descend to the crater floor to witness the world-famous Blue Fire phenomenon.
The descent takes about 30 minutes, with a slightly challenging and slippery path due to loose rocks and sand. Once you arrive at the sulfur mining area, you’ll be amazed by the sight of the Blue Fire — a natural phenomenon caused by the combustion of sulfuric gases emerging from the crater.

Please note:
The trail to the crater floor and lake is not equipped with safety facilities, and it can be dangerous. We strongly advise against descending to the lake area, and the tour operator will not be responsible for any risks or consequences should you choose to proceed on your own.

After enjoying the Blue Fire, we will hike back up to the crater rim.
Around 5:00 AM, you’ll witness the breathtaking sunrise over Ijen Crater, featuring a turquoise-green acidic lake, one of the largest sulfur lakes in Asia. The view is truly mesmerizing, especially for photography enthusiasts.

You’ll also see local sulfur miners carrying loads weighing 40–70 kilograms up the steep and rocky paths. It’s a challenging and dangerous job that truly highlights their remarkable endurance.

After exploring and admiring the incredible view, we’ll descend back to the parking area, where our vehicle will be waiting to take you back to the hotel for breakfast and packing before continuing our journey to the Mount Bromo area.

The drive from Ijen to Bromo takes approximately 4 hours, with several short stops along the way.
Upon arrival, you’ll check in to your hotel and have free time to relax, explore the surroundings, or simply enjoy a comfortable rest before beginning your Mount Bromo Sunrise Tour the following day.   <br /><br />


                  <b>Day 4: MOUNT BROMO SUNRISE TOUR - SURABAYA </b><br />
             The Mount Bromo Sunrise Tour will begin around 3:00 AM from your hotel.
A 4WD Jeep will take you to the most famous viewpoint in the Mount Bromo area — Penanjakan Hill (also known as King Kong Hill). From this point, you’ll witness the most spectacular sunrise in East Java, with breathtaking views of the surrounding mountains and volcanoes as the first light of day breaks through the mist.

(Optional: If you visit Mount Bromo on a weekend, the tour will start earlier, or you can choose to enjoy the sunrise from the Bromo Crater area to avoid the crowds.)

After fully enjoying the beauty of the sunrise and the stunning Bromo landscape, we’ll return to the Jeep and continue your adventure to the Sea of Sand, a vast desert-like plain surrounding the volcano.
From the parking area, you’ll cross this sandy expanse — either on horseback or on foot — to reach the stairway at the slope of Mount Bromo, which leads up to the crater rim.

Once you reach the top, you can witness the volcanic activity inside the crater, hear the rumbling sound from below, and take in the incredible scenery from one of Indonesia’s most iconic volcanoes.

After enjoying your time at the crater, we’ll return to the Jeep and drive back to your hotel for breakfast, a shower, and packing.
Once everything is ready, we’ll continue our journey back to Surabaya, which takes approximately 3 hours.

Upon arrival in Surabaya, we’ll drop you off at your hotel, airport, or train station, marking the end of your tour.  <br /><br />
                <b>TOUR’S SERVICES FINISHED ✅</b>
            </div>



            <div class="thanks">
                <img src="https://img.icons8.com/fluency/50/4a90e2/filled-like.png" />
                <p>Thank you for reading!</p>
            </div>
        </div>

        <div class="contentContainer">
            <p class="contentHeader">Content</p>
            <ol>
                <li><a href="#itinerary">Itinerary Ijen – Bromo Tour</a></li>
                <li><a href="#penginapan">Dimana Menginap</a></li>
                <li><a href="#aktivitas">Aktivitas Utama</a></li>
                <li><a href="#kesimpulan">Kesimpulan</a></li>
            </ol>
        </div>
    </section>








<section class="bookingSection">
  <div class="container">
    <div class="bookingCard">
      <h2 class="bookingTitle">Booking</h2>
      <a href="{{ route('tumpakpesan1.page') }}" class="bookingBtn">Klik Here</a>
    </div>
  </div>
</section>

<section class="anotherTour">
  <div class="container">
    <h2>Another Tour Packages</h2>

    <div class="tourCard">
      <h3>Pilihan Tour Lainnya</h3>
      <ul>
        <li><a href="#">Bali Full Day Tour</a></li>
        <li><a href="#">Yogyakarta Heritage Tour</a></li>
        <li><a href="#">Bali to Ijen Crater Tour</a></li>
        <li><a href="#">Komodo Island Adventure</a></li>
      </ul>
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





    <a href="{{ route('allpackage.page') }}" class="backButton">
      <abbr title="Back">
        <img
          class="buttonn"
          src="https://img.icons8.com/material-outlined/48/142361/back--v1.png"
        />
      </abbr>
    </a>
    </section>
<footer>
  <div class="footerDetails">
    <!-- Kolom 1 -->
    <div class="footerDescription">
      <h1 class="footerTitle">Tegar</h1>
      <p class="footerPara">
        Discover New Destinations. See breath-taking places and experience
        them from your device online.
        <br /><br />
        Our travel writing captures the one thing we always strive to create
        – incredible travel experiences. From learning about the historical
        and political context of a destination to finding some really great
        hikes, each new place has something to discover.
        <br /><br />
        We have a passion for storytelling, a knack for putting itineraries
        together and a strong desire to have fun.
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
<script src="{{ asset('app.js') }}"></script>
  </body>
</html>
