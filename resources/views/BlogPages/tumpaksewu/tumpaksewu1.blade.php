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

    {{-- <section
  class="headerContainer"
  id="header"
  style="
    background: url('/Images/tumpak-sewu.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  "
>
  <div class="headerWrapper"></div>
  <div class="content">
    <div class="title">
      <h1>Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Surabaya (finish at Bali)</h1>
    </div>
    <div class="otherDetails">
      <p class="date">
        <span>
          <img
            src="https://img.icons8.com/material-rounded/24/ffffff/calendar--v1.png"
        /></span>
        01 AUG 2021
      </p>
      <p class="readTime">
        <span>
          <img src="https://img.icons8.com/ios/50/ffffff/time--v1.png"
        /></span>
        08mins
      </p>
      <p class="author">
        <span>
          <img
            src="https://img.icons8.com/ios-glyphs/30/ffffff/book.png"
        /></span>
        BY Alyse
      </p>
    </div>
     <!-- Tombol Download PDF -->
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
          "
        >
          📄 Download PDF Itinerary
        </button>
      </a>
    </div>
  </div>
  <a href="#para">
    <img
      src="https://img.icons8.com/external-those-icons-fill-those-icons/24/ffffff/external-down-arrows-those-icons-fill-those-icons-7.png"
      class="scrollButton"
    />
  </a>
</section> --}}

    <section class="headerContainer" id="header">
        <!-- Background Slider -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background:url('/Images/IMG_4145.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_2810.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_3311.jpg') center/cover no-repeat;"></div>
            </div>
        </div>

        <!-- Konten di atas slider -->
        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1 style="text-transform: uppercase;">
                    Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Surabaya (finish at Bali)
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
                <h2>Itinerary Tumpaksewu-Bromo-Ijen Tour (4D3N) </h2>
                <hr />

                <b>Day1: SURABAYA - ACOMMODATION IN TUMPAKSEWU
                    WATERFALL AREA </b><br />
               The Tumpak Sewu – Bromo & Ijen Tour will begin from the Surabaya area.
Our guide and driver will pick you up from your hotel, airport, or train station, and we will then drive from Surabaya to your accommodation near Tumpak Sewu Waterfall, a journey that takes approximately 4–5 hours with several stops along the way. <br>
                <b>PROGRAM OPSIONAL (No Additional Cost):</b>
               If you can depart in the morning and the weather is nice, you’ll have the opportunity to visit Jodipan Rainbow Village in Malang on your way from Surabaya to your hotel near Tumpak Sewu. Feel free to look up pictures of Jodipan Rainbow Village on the internet.

Upon arrival at your accommodation, check in and enjoy some free time. You may explore the area around your hotel or simply relax and enjoy a pleasant stay before beginning your Tumpak Sewu tour the next day.
                (<a href="#" id="openPopup"> Jodipan rainbow village Image. </a>)<br /><br />

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
                    ACOMMODATION IN MOUNT BROMO AREA </b><br />
                The Tumpak Sewu Waterfall Tour will begin at 6:00 AM.
Upon arriving at the waterfall, our guide will take you to the Panorama Viewpoint, which offers a breathtaking 180-degree view of the magnificent cascade.

After enjoying the view, we’ll descend to the base of the waterfall. The path can be slippery due to wet conditions, but newly built iron and concrete stairs are available, along with sturdy ropes to hold on to while crossing sections where water trickles over the rocks.
(Wearing proper footwear and carrying a waterproof bag is highly recommended.)

This activity will take around 3 hours, depending on how much time you spend exploring the waterfall.

Afterward, we’ll return to the hotel for breakfast, before continuing our journey to the Bromo Mountain area, which takes about 3 hours by car from Tumpak Sewu.

Upon arrival at your hotel, check in and enjoy some free time — you can explore the surroundings or simply relax and unwind to enjoy a pleasant night’s stay before your Mount Bromo tour the next day. <br /><br />



                <b>Day3: MOUNT BROMO SUNRISE TOUR - ACOMMODATION IN
                    IJEN CRATER AREA </b><br />
               The Mount Bromo Sunrise Tour will start around 3:00 AM from your hotel.
A Jeep will take you to the most famous viewpoint in the Bromo area — Penanjakan Hill (also known as King Kong Hill). From this spot, you can witness the most stunning sunrise in East Java, with a breathtaking backdrop of mountains and active volcanoes.

(Optional: If you visit Mount Bromo on a weekend, the tour may start earlier, or you can choose to enjoy the sunrise directly from the Bromo Crater to avoid the crowds.)

After enjoying the incredible sunrise view, we’ll return to the Jeep and continue your adventure across the Sea of Sand surrounding Mount Bromo.
We’ll stop at the parking area, and from there, you can either walk or ride a horse across the desert-like landscape until you reach the stairs leading up to the Bromo Crater summit.

Once you’ve experienced the volcanic activity at the top of Mount Bromo, we’ll head back to the Jeep, which will take you back to the hotel for breakfast, a shower, and packing.

After that, we’ll continue our journey to your next hotel in the Ijen Crater area, which takes about 6 hours. Along the way, you’ll pass through beautiful countryside, small towns, rice fields, plantations, and even coastal scenery.

For lunch, we’ll stop at a local restaurant.
By late afternoon, we’ll arrive at your hotel near Ijen Crater, located about one hour from the volcano.
You’ll spend the night there, resting and preparing for your Ijen Crater trekking experience the following morning. <br /><br />


                  <b>Day4 : IJEN CRATER BLUE FIRE TOUR - BALI  </b><br />
              On the final day of your journey, the Ijen Crater Tour will begin around 12:30 AM.
Our car will take you to Paltuding, the starting point of the trek, which is about one hour from your hotel. Upon arriving at the Ijen parking area (1,850 meters above sea level), it takes approximately 1.5 hours to hike up to the crater.

Along the trail, you’ll be surrounded by stunning natural scenery and fresh mountain air. When you reach the Ijen Crater summit (about 2,386 meters above sea level), you’ll continue your journey to witness the famous natural phenomenon — the Blue Fire. This mesmerizing sight can be reached with a 30-minute descent from the crater rim.

Important Note:
The Blue Fire area is located within the sulfur mining zone, so you will likely encounter sulfur miners along the way. For your own safety, please follow your guide’s instructions carefully.

Reaching the Blue Fire point can be challenging, as the path is steep and sometimes filled with sulfur smoke that smells like rotten eggs. Please make sure you are physically prepared and aware of the possible risks.

After enjoying this extraordinary experience, we’ll hike back up to the crater rim viewpoint, which takes about one hour on foot. From here, you’ll be rewarded with a breathtaking view of Ijen’s turquoise-green sulfur lake, one of the largest acidic lakes in Asia with a pH level of 0.5.

After admiring the view until around 6:00 AM, we’ll return to the car and drive back to the hotel for breakfast and rest.
By 11:30 AM, we’ll depart for the ferry terminal to cross over to Bali — the ferry ride takes about one hour.

Upon arrival at Gilimanuk Harbor in Bali, you’ll meet our driver, who will transfer you directly to your hotel in Bali, marking the end of your unforgettable Bromo–Ijen adventure. <br /><br />
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
                 <li><a href="{{ route('bromoijen.bali') }}">Bromo Ijen Tour Start from Surabaya (Finish at Bali)</a></li>
                <li><a href="{{ route('bromoijen.surabaya') }}">Bromo Ijen Tour Start from Surabaya (Finish at Surabaya)</a></li>
                <li><a href="{{ route('pesanfrombali2.page') }}">Bromo Ijen Tour Start from Bali (Finish at Surabaya)</a></li>
                <li><a href="{{ route('pesanfrombali1.page') }}">Bromo Ijen Tour Start from Bali (Finish at Bali)</a></li>
                <li><a href="{{ route('tumpak3.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Bali (Finish at Surabaya)</a></li>
                <li><a href="{{ route('tumpak4.page') }}">Tumpaksewu–Ijen–Bromo Tour (4D3N) Start from Bali (Finish at Bali)</a></li>
                <li><a href="{{ route('tumpak1.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Surabaya (Finish at Bali)</a></li>
                <li><a href="{{ route('tumpak2.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Surabaya (Finish at Surabaya)</a></li>
                <li><a href="{{ route('finishbali.page') }}">Midnight Ijen from Bali</a></li>
                <li><a href="{{ route('finishbanyuwangi.page') }}">Midnight Ijen from Banyuwangi</a></li>
            </ol>
            </ol>
        </div>
    </section>







    <section class="bookingSection">
        <div class="container">
            <div class="bookingCard">
                <h2 class="bookingTitle">Booking</h2>
                <a href="{{ route('tumpakpesan1b.page') }}" class="bookingBtn">Klik Here</a>
            </div>
        </div>
    </section>

    <section class="anotherTour">
        <div class="container">
            <h2>Another Tour Packages</h2>

         <div class="tourCard">
                <h3>Another Tour</h3>
                <ul>
                    <li><a href="{{ route('bromoijen.bali') }}">Bromo Ijen Tour Start from Surabaya (Finish at
                            Bali)</a></li>
                    <li><a href="{{ route('bromoijen.surabaya') }}">Bromo Ijen Tour Start from Surabaya (Finish at
                            Surabaya)</a></li>
                    <li><a href="{{ route('pesanfrombali2.page') }}">Bromo Ijen Tour Start from Bali (Finish at
                            Surabaya)</a></li>
                    <li><a href="{{ route('pesanfrombali1.page') }}">Bromo Ijen Tour Start from Bali (Finish at
                            Bali)</a></li>
                    <li><a href="{{ route('tumpak3.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Bali
                            (Finish at Surabaya)</a></li>
                    <li><a href="{{ route('tumpak4.page') }}">Tumpaksewu–Ijen–Bromo Tour (4D3N) Start from Bali
                            (Finish at Bali)</a></li>
                    <li><a href="{{ route('tumpak1.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Surabaya
                            (Finish at Bali)</a></li>
                    <li><a href="{{ route('tumpak2.page') }}">Tumpaksewu–Bromo–Ijen Tour (4D3N) Start from Surabaya
                            (Finish at Surabaya)</a></li>
                    <li><a href="{{ route('finishbali.page') }}">Midnight Ijen from Bali</a></li>
                    <li><a href="{{ route('finishbanyuwangi.page') }}">Midnight Ijen from Banyuwangi</a></li>
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
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>





        <a href="{{ route('allpackage.page') }}" class="backButton">
            <abbr title="Back">
                <img class="buttonn" src="https://img.icons8.com/material-outlined/48/142361/back--v1.png" />
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
