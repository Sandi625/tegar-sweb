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
                <div class="swiper-slide" style="background:url('/Images/IMG_4120.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/1qq.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_2847.jpg') center/cover no-repeat;"></div>
            </div>
        </div>

        <!-- Konten di atas slider -->
        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1 style="text-transform: uppercase;">
                    Bromo ijen tour Start from Bali (finish at Surabaya)
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
                <b>Ijen – Bromo Tour from Bali (3D2N)</b> adalah paket wisata favorit
                untuk menjelajahi dua gunung berapi paling ikonik di Jawa Timur.
                Perjalanan dimulai dari Bali menuju Banyuwangi untuk mendaki <b>Kawah Ijen</b>
                dan menyaksikan fenomena alam <i>Blue Fire</i> yang langka,
                kemudian dilanjutkan ke Gunung Bromo untuk menikmati sunrise
                serta lautan pasir yang indah.
                Tour ini berakhir di Surabaya, sehingga sangat praktis
                bagi wisatawan yang ingin melanjutkan perjalanan atau pulang melalui kota besar di Jawa Timur.
            </p> --}}

            <div class="para two" id="itinerary">
                <h2>Itinerary Ijen-Bromo Tour From Bali (3D2N) </h2>
                <hr />

                <b>Day1: BALI - ACOMMODATION IN IJEN CRATER </b><br />
                The Bromo–Ijen Tour from Bali begins around 8:00 AM (Bali time). Our staff will pick you up directly
                from your hotel in one of the following areas — Ubud, Canggu, Kuta, Denpasar, Jimbaran, or Lovina — and
                drive you to Gilimanuk Ferry Port, located on the western tip of Bali.

                From there, you’ll take a one-hour ferry ride across the Bali Strait to Ketapang Harbor in East Java.
                Upon arrival, we’ll escort you to a local restaurant for lunch before continuing the journey to your
                hotel near Ijen Crater (Banyuwangi area).

                Once you arrive at the hotel, you’ll check in and have some free time.
                (You can explore the surroundings of your hotel or simply relax and enjoy a pleasant evening before
                beginning your Ijen Crater Tour the next day.)
                {{-- <b>PROGRAM OPSIONAL: </b> Jika Anda bisa berangkat pada pagi hari & cuaca cukup bagus, Anda
                berkesempatan mengunjungi Air Terjun Madakaripura dalam
                perjalanan dari Surabaya menuju hotel Anda di kawasan Gunung
                Bromo. Silakan cek gambar Air Terjun Madakaripura
                (<a href="#" id="openPopup">Gambar Air Terjun Madakaripura. </a>)<br /><br /> --}}

                <!-- Modal / Popup Slider -->
                <div id="popup" class="popup">
                    <div class="popup-content">
                        <span id="closePopup" class="close">&times;</span>

                        <!-- Slider Container -->
                        <div class="slider">
                            <div class="slides">
                                <img src="{{ asset('Images/6.jpg') }}" alt="Jodipan rainbow village">
                                <img src="{{ asset('Images/mada1.jpg') }}" alt="Jodipan rainbow village">
                                <img src="{{ asset('Images/mada2.jpg') }}" alt="Jodipan rainbow village">
                            </div>

                            <!-- Navigation Arrows -->
                            <a class="prev">&#10094;</a>
                            <a class="next">&#10095;</a>
                        </div>

                        <p>Air Terjun Madakaripura</p>
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

                <b>Day2: IJEN CRATER BLUE FIRE TOUR - ACOMMODATION IN
                    MOUNT BROMO </b><br />
                The Ijen Crater Tour begins at 1:00 AM.
                Our staff will pick you up from your hotel or villa in the Banyuwangi area, and we’ll drive to
                Paltuding, the starting point of the hike — about 1 hour from the city center of Banyuwangi.

                The trek starts at 2:00 AM. From here, you’ll need around 1.5 hours to hike up the slopes of Mount Ijen,
                covering a distance of approximately 3.5 kilometers. Along the way, you’ll enjoy the fresh mountain air,
                chirping birds, and breathtaking natural scenery.

                Upon reaching the summit of Mount Ijen at an altitude of about 2,385 meters above sea level, you can
                choose to descend to the crater floor to witness the famous Blue Fire phenomenon.
                The descent takes around 30 minutes and involves a challenging path filled with rocks and loose gravel,
                making it somewhat slippery. Once you arrive at the sulfur area, you’ll witness the mesmerizing Blue
                Fire — a rare natural phenomenon caused by the combustion of sulfuric gases emerging from the crater.
<br>
                ⚠️ Please note:
                The trail descending into the crater and towards the lake is not equipped with safety facilities for
                climbing up or down. For your safety, we strongly advise against descending into the crater. The tour
                operator will not be responsible for any consequences if you choose to do so.

                After witnessing the Blue Fire, you’ll hike back up to the crater rim.
                Around 5:00 AM, you’ll be greeted by a stunning sunrise view and the sight of the turquoise-blue acid
                lake of Ijen Crater. The scenery is truly mesmerizing, and this is the perfect spot for photos.

                You’ll also encounter the local sulfur miners, who descend into the crater to collect sulfur and climb
                back up carrying loads of 40–70 kilograms on their shoulders — a tough and dangerous job that showcases
                the incredible endurance of the local workers.

                After enjoying the magnificent views of Ijen Crater, we’ll descend back to the parking area, where your
                vehicle will be waiting to take you back to your hotel for breakfast and to collect your belongings.

                Next, we’ll continue the journey to the Mount Bromo area, which takes about 6 hours with several short
                stops along the way.
                Upon arrival, you’ll check in at your hotel and enjoy some free time — you can explore the surroundings
                or simply relax and rest before your Bromo Tour the next day. <br /><br />



                <b>Day3: MOUNT BROMO SUNRISE TOUR - SURABAYA </b><br />
                The Mount Bromo Sunrise Tour begins around 3:00 AM from your hotel.
                A 4WD Jeep will take you to one of the most famous viewpoints in the Bromo area — King Kong Hill
                (Penanjakan).
                From this hill, you’ll witness one of the most stunning sunrises in East Java, with a breathtaking
                backdrop of mountains and volcanoes.

                (Optional: If you visit Mount Bromo on a weekend, the tour will start earlier, or you may choose to
                enjoy the sunrise directly from the Bromo crater area to avoid the crowds.)

                After fully enjoying the beautiful sunrise view, we’ll return to the Jeep and continue your adventure
                across the Sea of Sand (Lautan Pasir) in the Bromo National Park.
                We’ll stop at the parking area, where you can either walk or ride a horse across the desert-like
                landscape to reach the stairway on the slope of Mount Bromo that leads up to the crater rim.

                Once you reach the top of Mount Bromo, you’ll have the chance to witness the active volcanic crater up
                close and feel the unique atmosphere of this iconic mountain.

                After your visit, we’ll return to the Jeep, which will take you back to your hotel for breakfast, a
                shower, and packing before departure.

                Then, we’ll continue our journey back to Surabaya, which takes around 3 hours.
                Upon arrival in Surabaya, we’ll drop you off at your hotel, airport, or train station, marking the end
                of your tour.<br /><br />
                <b>TOUR’S SERVICES FINISHED ✅</b>
            </div>

            {{-- <div class="imageContainer">
                <img src="{{ asset('Images/bromo1.jpg') }}" alt="Ijen Bromo Tour" />
                <div class="imgDescription">
                    <h4 class="imageTitle">Ijen – Bromo Tour</h4>
                    <p class="imageDescription">
                        Dari fenomena Blue Fire di Kawah Ijen hingga sunrise di Gunung Bromo,
                        paket ini menghadirkan pengalaman petualangan tak terlupakan.
                        Dalam 3 hari 2 malam, Anda akan menjelajahi dua keajaiban alam paling terkenal di Jawa Timur.
                    </p>
                    <p class="imgQuote one">
                        <i>"Blue Fire Ijen + Sunrise Bromo = kombinasi petualangan terbaik di Jawa Timur."</i>
                    </p>
                </div>
            </div>

            <div class="para three" id="penginapan">
                <h2>2. Dimana Menginap Selama Tour</h2>
                <hr />
                <p>
                    Selama perjalanan, peserta akan menginap 1 malam di Banyuwangi sebelum pendakian Kawah Ijen,
                    dan 1 malam di kawasan Bromo.
                </p>
                <p>
                    <b>Banyuwangi:</b> Hotel/homestay nyaman dengan akses dekat ke Kawah Ijen.<br /><br />
                    <b>Bromo:</b> Hotel/homestay dekat area Gunung Bromo agar mudah berangkat untuk sunrise tour.
                </p>
            </div>

            <div class="para three" id="aktivitas">
                <h2>3. Aktivitas Utama</h2>
                <hr />
                <p>Beberapa pengalaman seru yang akan Anda rasakan:</p>
                <p>
                    <b>Kawah Ijen:</b> Trekking midnight, fenomena Blue Fire, sunrise di bibir kawah, danau belerang
                    biru kehijauan.<br /><br />
                    <b>Gunung Bromo:</b> Sunrise di Penanjakan, lautan pasir, kawah Bromo, dan panorama gunung berapi
                    aktif.
                </p>
            </div>

            <div class="imageContainer">
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
                    Paket <b>Ijen – Bromo Tour from Bali (3D2N)</b> sangat cocok untuk Anda
                    yang ingin menjelajahi dua destinasi alam terbaik di Jawa Timur.
                    Dimulai dari Bali, tour ini membawa Anda ke fenomena Blue Fire di Ijen,
                    kemudian sunrise di Bromo, dan berakhir di Surabaya.
                    Praktis, seru, dan berkesan!
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
                <a href="{{ route('pesanbali2.page') }}" class="bookingBtn">Klik Here</a>
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
