<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('stylefbali.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Ijen Bromo | Tegar</title>
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
                <div class="swiper-slide" style="background:url('/Images/IMG_5787.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_4255.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_4123.jpg') center/cover no-repeat;"></div>
            </div>
        </div>

        <!-- Konten di atas slider -->
        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1 style="text-transform: uppercase;">
                    Bromo ijen tour Start from Bali (finish at Bali)
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
            {{-- <p class="para one" id="para">
                <b>Bromo Ijen Tour from Bali (3D2N)</b> adalah salah satu paket wisata favorit
                untuk menjelajahi dua gunung berapi paling ikonik di Jawa Timur.
                Perjalanan dimulai dari Bali menuju Gunung Bromo untuk menikmati
                keindahan sunrise dan lautan pasir, kemudian dilanjutkan ke Banyuwangi
                untuk trekking menuju <b>Kawah Ijen</b> dengan fenomena alam
                <i>Blue Fire</i> yang hanya ada dua di dunia.
                Tour ini berakhir kembali di Bali sehingga sangat cocok bagi wisatawan
                yang liburannya dimulai maupun diakhiri di Pulau Dewata.
            </p> --}}

            <div class="para two" id="itinerary">
                <h2>Itinerary Bromo Ijen Tour 3 Hari 2 Malam</h2>
                <hr />

                <b>Day 1: BALI - ACOMMODATION IN MOUNT BROMO AREA </b><br />
                The Bromo–Ijen Tour from Bali will begin around 8:00 AM (Bali time).
                Our staff will pick you up from your hotel in one of the following areas: Ubud, Canggu, Kuta, Denpasar,
                Jimbaran, or Lovina.
                We will then drive to Gilimanuk Ferry Port, located on the western tip of Bali.

                Next, we’ll take a ferry ride of approximately one hour to reach Ketapang Harbor in East Java. Upon
                arrival, we’ll take you to a local restaurant for lunch, and then continue the journey toward Mount
                Bromo to see the magnificent active volcano.
                The drive to the Bromo area takes about 5–6 hours.

                Upon arrival, you’ll check in to your hotel and have free time to relax.
                (You may explore the surroundings of your hotel or simply rest and enjoy a comfortable night’s stay
                before beginning your Mount Bromo Tour the next day.) <br /><br />

                <b>Day2: BROMO SUNRISE TOUR - ACOMMODATION IN IJEN
                    CRATER AREA </b><br />
                The Mount Bromo Sunrise Tour will begin around 3:00 AM from your hotel.
                A 4WD Jeep will take you to the most famous viewpoint in the Bromo area — Penanjakan Hill (King Kong
                Hill) — where you can witness the best sunrise in East Java, with breathtaking views of mountains and
                volcanoes in the background.

                (Optional: If you visit Mount Bromo on a weekend, the tour will start earlier, or you may choose to
                enjoy the sunrise directly from the Bromo Crater to avoid the crowd.)

                After enjoying the beautiful sunrise over Mount Bromo, we’ll return to the jeep and continue the
                adventure across the Sea of Sand.
                We’ll stop at the parking area, and from there, you can ride a horse or walk across the sand plain to
                reach the stairway leading to the crater rim of Mount Bromo.

                Once you’ve experienced the volcanic activity at the top, we’ll head back to the jeep, which will then
                take you back to your hotel for breakfast, a refreshing shower, and packing before we continue our
                journey to the next destination — the Ijen Crater area.

                The drive to the Ijen area takes about 5–6 hours, passing through charming countryside, small towns,
                rice fields, plantations, and coastal scenery along the way.
                For lunch, we’ll stop at a local restaurant.

                By late afternoon, you’ll arrive at your hotel near the Ijen Crater, located about an hour from the
                trekking area.
                You’ll check in and have free time to relax and rest before starting your Ijen Crater hike the following
                morning. <br /><br />

                <b>Day 3: IJEN CRATER BLUE FIRE TOUR - BACK TO BALI </b><br />
                The Ijen Crater Tour will begin around 1:00 AM (local time).
                Our car will take you to Paltuding, the starting point of the trek, which is about one hour’s drive from
                your hotel. Upon arrival at the Ijen Crater parking area (1,850 meters above sea level), it will take
                approximately 1.5 hours to hike up to the crater.

                Along the trekking path, you’ll enjoy stunning natural scenery and fresh mountain air. Once you reach
                the summit of Mount Ijen (2,386 meters above sea level), you’ll witness the famous natural phenomenon —
                the Blue Fire. It’s truly an unforgettable experience.

                It takes around two hours in total to reach the Blue Fire point from your hotel. The trekking trail is
                quite good up to the crater rim, but the path down to the Blue Fire area is rocky and slippery,
                requiring about 30 minutes of descent.

                Please note: The Blue Fire area is located within the sulfur mining zone, so you may encounter local
                miners carrying heavy loads of sulfur. For your safety, please follow your guide’s instructions
                carefully.

                Reaching the Blue Fire point can be challenging, as sulfur gas may occasionally blow toward you,
                producing a strong odor similar to rotten eggs — so please be prepared for the conditions.

                After enjoying the mesmerizing Blue Fire, we’ll continue to the viewpoint on the crater rim, which takes
                about one hour of hiking uphill. From there, you’ll be rewarded with a breathtaking panoramic view —
                it’s absolutely worth the effort.

                The Ijen Crater Lake is one of the largest sulfur lakes in Asia, with striking turquoise-green water and
                a high level of acidity (pH around 0.5).
                After admiring the view around 6:00 AM, we’ll return to the parking area and drive back to your hotel
                for breakfast and a short rest.

                At around 11:30 AM, we’ll drive you to the harbor to take the ferry to Bali, which takes about one hour.
                Upon arrival at the Bali Port, our local driver will be waiting to transfer you comfortably to your
                hotel in Bali. <br /><br />
                <b>TOUR’S SERVICES FINISHED </b>
            </div>

            {{-- <div class="imageContainer">
      <img src="{{ asset('Images/bromo1.jpg') }}" alt="Bromo Ijen Tour" />
      <div class="imgDescription">
        <h4 class="imageTitle">Bromo Ijen Tour</h4>
        <p class="imageDescription">
          Dari sunrise di Gunung Bromo hingga fenomena Blue Fire di Kawah Ijen,
          paket ini menghadirkan pengalaman petualangan tak terlupakan.
          Dalam 3 hari 2 malam, Anda akan menjelajahi dua keajaiban alam paling terkenal di Jawa Timur.
        </p>
        <p class="imgQuote one">
          <i>"Bromo sunrise + Blue Fire Ijen = kombinasi petualangan terbaik di Jawa Timur."</i>
        </p>
      </div>
    </div>

    <div class="para three" id="penginapan">
      <h2>2. Dimana Menginap Selama Tour</h2>
      <hr />
      <p>
        Selama perjalanan, peserta akan menginap 1 malam di kawasan Bromo
        (Cemoro Lawang/Probolinggo) dan 1 malam di Banyuwangi sebelum pendakian Kawah Ijen.
      </p>
      <p>
        <b>Bromo:</b> Hotel/homestay dekat area Gunung Bromo agar mudah berangkat untuk sunrise tour.<br /><br />
        <b>Banyuwangi:</b> Hotel/homestay nyaman dengan akses dekat ke Kawah Ijen.
      </p>
    </div>

    <div class="para three" id="aktivitas">
      <h2>3. Aktivitas Utama</h2>
      <hr />
      <p>Beberapa pengalaman seru yang akan Anda rasakan:</p>
      <p>
        <b>Gunung Bromo:</b> Sunrise di Penanjakan, lautan pasir, kawah Bromo, dan pemandangan gunung berapi aktif.<br /><br />
        <b>Kawah Ijen:</b> Trekking midnight, fenomena Blue Fire, sunrise di bibir kawah, danau belerang biru kehijauan.
      </p>
    </div> --}}

            {{-- <div class="imageContainer">
      <img src="{{ asset('Images/14.jpg') }}" alt="Blue Fire Ijen" />
      <div class="imgDescription">
        <h4 class="imageTitle">Blue Fire Kawah Ijen</h4>
        <p class="imageDescription">
          Fenomena <i>Blue Fire</i> hanya ada di dua tempat di dunia,
          salah satunya di Kawah Ijen. Mendaki tengah malam untuk melihat api biru
          di antara penambang belerang akan menjadi pengalaman yang sulit dilupakan.
        </p>
        <p class="imgQuote one">
          <i>"Blue Fire Ijen adalah keajaiban alam yang membuat semua lelah pendakian terbayar lunas."</i>
        </p>
      </div>
    </div>

    <div class="para three" id="kesimpulan">
      <h2>4. Kesimpulan</h2>
      <hr />
      <p>
        Paket <b>Bromo Ijen Tour from Bali (3D2N)</b> sangat cocok untuk Anda
        yang ingin menjelajahi dua destinasi alam terbaik di Jawa Timur.
        Dimulai dari Bali, tour ini membawa Anda ke sunrise Bromo dan fenomena Blue Fire Ijen,
        lalu kembali lagi ke Bali tanpa repot. Praktis, seru, dan berkesan!
      </p>
    </div> --}}

            <div class="thanks">
                <img src="" />
                <p></p>
            </div>
        </div>

        <div class="contentContainer">
            <p class="contentHeader">Content</p>
            <ol>
                <li><a href="#itinerary">Itinerary Bromo Ijen Tour</a></li>
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
                <a href="{{ route('pesanbali1.page') }}" class="bookingBtn">Klik Here</a>
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
    <script src="{{ asset('appfbali.js') }}"></script>
</body>

</html>
