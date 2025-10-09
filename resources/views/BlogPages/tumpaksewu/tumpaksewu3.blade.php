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
                <div class="swiper-slide" style="background:url('/Images/mada2.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_5787.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_3302.jpg') center/cover no-repeat;"></div>
            </div>
        </div>

        <!-- Konten di atas slider -->
        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1 style="text-transform: uppercase;">
                    Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Bali (finish at Surabaya)
                </h1>
            </div>
            <div class="otherDetails">
                <p class="readTime">
                    <span>
                        <img src="https://img.icons8.com/ios/50/ffffff/time--v1.png" />
                    </span>
                    4 Day 3 Night
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


            <div class="para one" id="itinerary">
                <h2>Itinerary Surabaya - Tumpaksewu - Bromo - Ijen </h2>
                <hr />

                <p> <b>Day1 : BALI - ACOMMODATION IN IJEN CRATER AREA</b></p>
                <p>
                  The Ijen–Tumpaksewu–Bromo Tour will begin around 08:00 AM (Bali time). Our staff will pick you up directly from your hotel in Bali (Ubud, Canggu, Kuta, Denpasar, Jimbaran, or Lovina). From there, we will drive to Gilimanuk Ferry Port, where you will board a ferry for about one hour to cross over to Ketapang Harbor in Java.

Upon arrival in Banyuwangi, we will take you to a local restaurant for lunch before continuing the journey to your hotel near Mount Ijen.
Once you arrive, you can check in and enjoy your free time — you may explore the surrounding area or simply relax and enjoy a pleasant stay before your Ijen Crater adventure the next day.
                </p>
                <p>
                    <b>Day2 : IJEN CRATER BLUE FIRE TOUR - ACOMMODATION IN
                        TUMPAKSEWU WATERFALL AREA </b>
                        <p>    The Ijen Crater Tour will begin at 12:30 AM. Our staff will pick you up from your hotel or villa in the Banyuwangi area, then drive to Paltuding, the starting point of the hike, which takes about 1 hour from the city center.

The hike to Mount Ijen will start around 02:00 AM. It takes approximately 1.5 hours to reach the crater rim, with a trekking distance of about 3.5 km. Along the trail, you will enjoy the fresh mountain air, the sounds of nature, and the beautiful night scenery.

Upon reaching the summit of Mount Ijen (at an altitude of about 2,385 meters above sea level), those who wish to witness the famous Blue Fire phenomenon may continue descending to the crater floor. The descent takes around 30 minutes on a slightly challenging path with loose rocks and sand. Once at the sulfur area, you will witness the mesmerizing Blue Fire—a rare natural phenomenon caused by the combustion of sulfuric gases emerging from the crater.

<br>⚠️ Please note: The path leading down to the crater lake is not equipped with safety facilities for climbing down or up. We strongly advise against descending further into the crater. The tour operator will not be responsible for any risks or accidents that may occur if you choose to do so.

After admiring the magical Blue Fire, you will hike back up to the crater rim.
By around 05:00 AM, you’ll be rewarded with a breathtaking view of Ijen Crater—a turquoise-colored acidic lake surrounded by dramatic volcanic landscapes. It’s the perfect spot for photography.

You’ll also witness the incredible sight of sulfur miners carrying 40–70 kg of yellow sulfur blocks up steep, rocky paths—an extremely difficult and dangerous job that showcases the resilience of local workers.

Once you’ve finished exploring and taking in the beauty of Ijen Crater, we’ll descend to the parking area where your car will be waiting to take you back to the hotel for breakfast and to collect your belongings.

After that, we will continue the journey to the Tumpaksewu Waterfall area, a scenic drive that takes around 6–7 hours with several rest stops along the way.
Upon arrival, you’ll check in to your accommodation and enjoy some free time — relax, unwind, or explore the surroundings before your Tumpaksewu Waterfall Tour the next day.
                </p>
                </p>

                <p><b>Day3: EXPLORE TUMPAKSEWU WATERFALL -
ACOMMODATION IN BROMO AREA </b></p>
                <p>
              The Tumpak Sewu Waterfall Tour will begin at 6:00 AM. Upon arrival at Tumpak Sewu Waterfall, our local guide will accompany you to the Panorama Viewpoint, offering a spectacular 180-degree view of the magnificent waterfall curtain.

After enjoying the breathtaking scenery, we will descend to the base of the waterfall, where you can take stunning photos from different angles. The descent can be slippery due to wet conditions, but metal and concrete stairs have been built to make the trek safer.
(Proper footwear and a waterproof bag are highly recommended.)

This activity will take approximately 3 hours, depending on how much time you wish to spend exploring and engaging with the waterfall.

After exploring Tumpak Sewu, we will return to your hotel for breakfast before continuing our journey to Mount Bromo, which takes about 3 hours by car from the waterfall.

Upon arrival, you’ll check in to your accommodation and enjoy free time to relax, explore the surroundings, or simply rest and enjoy a pleasant evening before your Mount Bromo Sunrise Tour the next morning.
                </p>


                <p><b>Day4 : SUNRISE BROMO TOUR - SURABAYA </b></p>
                <p>
                  The Mount Bromo Sunrise Tour will start around 3:00 AM from your hotel. A 4WD Jeep will take you to one of the most famous viewpoints in the Bromo area — Penanjakan Hill, King Kong Hill, or Seruni Point — where you can witness one of the most beautiful sunrises in East Java, with a breathtaking backdrop of mountains and volcanoes.

<br>(Optional: If you visit Mount Bromo on a weekend, the tour may start earlier, or you can choose to enjoy the sunrise from the crater area to avoid the crowds.)

After soaking in the stunning sunrise view, we will return to the Jeep and continue the adventure to the Sea of Sand surrounding Mount Bromo. From the parking area, you can either ride a horse or walk across the sand plain to reach the stairway leading up to the crater rim.

Once you reach the top, you can witness the volcanic activity and enjoy the magnificent view from the Bromo crater. After exploring, we will return to the Jeep and head back to your hotel for breakfast, a refreshing shower, and packing before continuing the journey.

We will then drive back to Surabaya, which takes approximately 3 hours. Upon arrival, we will drop you off at your hotel, airport, or train station, marking the end of your memorable trip.
                </p>

                <p><b>TOUR’S SERVICES FINISHED</b></p>
            </div>

            {{-- <div class="para three" id="penginapan">
      <h2>2. Dimana Menginap Selama Tour</h2>
      <hr />
      <p>
        Selama perjalanan, Anda akan menginap di beberapa area:
        - Hari 1: kawasan Tumpaksewu
        - Hari 2: kawasan Gunung Bromo
        - Hari 3: kawasan Kawah Ijen
        Semua akomodasi sudah termasuk dalam paket tour.
      </p>
    </div>

    <div class="para three" id="aktivitas">
      <h2>3. Aktivitas yang Akan Dilakukan</h2>
      <hr />
      <p>Beberapa aktivitas utama dalam tour ini:</p>
      <p>
        <b>Tumpak Sewu:</b> trekking, menikmati panorama & dasar air terjun. <br/>
        <b>Gunung Bromo:</b> sunrise tour, lautan pasir, kawah Bromo. <br/>
        <b>Kawah Ijen:</b> trekking midnight, fenomena Blue Fire, sunrise di bibir kawah, melihat aktivitas penambang belerang.
      </p>
    </div>

    <div class="para three" id="kesimpulan">
      <h2>4. Kesimpulan</h2>
      <hr />
      <p>
        Paket <b>Surabaya - Tumpaksewu - Bromo - Ijen - Bali</b> sangat cocok untuk Anda
        yang ingin menjelajahi ikon wisata alam Jawa Timur sekaligus menyeberang ke Bali.
        Dalam 4 hari, Anda akan mendapatkan pengalaman lengkap: air terjun spektakuler, sunrise gunung berapi, hingga fenomena Blue Fire yang mendunia.
      </p>
    </div>

    <!-- FOTO BROMO -->
    <div class="imageContainer">
      <img src="{{ asset('Images/bromo1.jpg') }}" alt="Bromo Sunrise" />
      <p class="imgCaption"><i>Sunrise di Gunung Bromo yang menakjubkan.</i></p>
    </div>

    <div class="para three" id="aktivitas">
      <h2>3. Aktivitas yang Akan Dilakukan</h2>
      <hr />
      <p>Beberapa aktivitas utama dalam tour ini:</p>
      <p>
        <b>Tumpak Sewu:</b> trekking, menikmati panorama & dasar air terjun. <br/>
        <b>Gunung Bromo:</b> sunrise tour, lautan pasir, kawah Bromo. <br/>
        <b>Kawah Ijen:</b> trekking midnight, fenomena Blue Fire, sunrise di bibir kawah, melihat aktivitas penambang belerang.
      </p>
    </div>

    <!-- FOTO IJEN -->
    <div class="imageContainer">
      <img src="{{ asset('Images/ijen1.jpg') }}" alt="Blue Fire Kawah Ijen" />
      <p class="imgCaption"><i>Fenomena Blue Fire di Kawah Ijen, langka dan mendunia.</i></p>
    </div>

    <div class="para three" id="kesimpulan">
      <h2>4. Kesimpulan</h2>
      <hr />
      <p>
        Paket <b>Surabaya - Tumpaksewu - Bromo - Ijen - Bali</b> sangat cocok untuk Anda
        yang ingin menjelajahi ikon wisata alam Jawa Timur sekaligus menyeberang ke Bali.
        Dalam 4 hari, Anda akan mendapatkan pengalaman lengkap: air terjun spektakuler, sunrise gunung berapi, hingga fenomena Blue Fire yang mendunia.
      </p>
    </div> --}}

            <div class="thanks">
                <img src="https://img.icons8.com/fluency/50/4a90e2/filled-like.png" />
                <p>Thank you for reading!</p>
            </div>
        </div>

        <div class="contentContainer">
            <p class="contentHeader">Content</p>
            <ol>
                <li><a href="#itinerary">Itinerary Tour</a></li>
                <li><a href="#penginapan">Dimana Menginap</a></li>
                <li><a href="#aktivitas">Aktivitas</a></li>
                <li><a href="#kesimpulan">Kesimpulan</a></li>
            </ol>
        </div>
    </section>








    <section class="bookingSection">
        <div class="container">
            <div class="bookingCard">
                <h2 class="bookingTitle">Booking</h2>
                <a href="{{ route('tumpakpesan3.page') }}" class="bookingBtn">Klik Here</a>
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
