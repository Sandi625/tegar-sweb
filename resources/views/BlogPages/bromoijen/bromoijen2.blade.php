<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Ijen Bromo | Tegar</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

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
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background: url('/Images/1ijen.jpg') center/cover no-repeat fixed;">
                </div>
                <div class="swiper-slide" style="background: url('/Images/IMG_4603.jpg') center/cover no-repeat fixed;">
                </div>
                <div class="swiper-slide" style="background: url('/Images/IMG_5116.jpg') center/cover no-repeat fixed;">
                </div>
            </div>
        </div>

        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1 style="text-transform: uppercase;">
                    Bromo ijen tour Start from Surabaya (finish at Surabaya)
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
                Bromo Ijen Tour adalah salah satu paket wisata paling populer di Jawa Timur.
                Trip ini dimulai dari <b>Surabaya</b>, mengunjungi sunrise indah di Gunung Bromo,
                menikmati keindahan Lautan Pasir & Bukit Teletubbies, lalu melanjutkan perjalanan ke
                Banyuwangi untuk trekking menuju <b>Kawah Ijen</b>. Puncaknya adalah melihat fenomena
                alam <i>Blue Fire</i> yang hanya ada dua di dunia. Trip ini berakhir di
                <b>Surabaya</b> sebagai titik akhir perjalanan.
            </p> --}}



            <div class="para two">
                <h2>Itinerary Bromo Ijen Tour 3 Hari 2 Malam (Finish Surabaya)</h2>
                <hr />

                <b>Day 1: SURABAYA - ACOMMODATION IN BONDOWOSO </b><br />
                The Ijen–Bromo Tour will start from the Surabaya area. We will pick you up from your hotel, the airport,
                or the train station. From Surabaya, we will drive to your accommodation near Ijen Crater (Bondowoso
                City), which takes approximately 6–7 hours with several stops along the way.

                Upon arrival at your accommodation, you will check in and have free time.
                (You may explore the area around your hotel or simply relax and enjoy a pleasant stay before beginning
                your Ijen Crater Tour the following day.) <br /><br />





                <b>Day2: IJEN CRATER BLUE FIRE TOUR - ACOMMODATION IN
                    MOUNT BROMO </b><br />
                The Ijen Crater Tour will begin at 11:30 PM. Our staff will pick you up from your hotel or villa in the
                Bondowoso area, then drive to Paltuding, the starting point of the hike, which takes about 2 hours from
                Bondowoso city center.

                The hike will start around 2:00 AM. From here, it takes approximately 1.5 hours to climb the slope of
                Mount Ijen, covering a distance of about 3.5 kilometers. Along the trekking path, you will enjoy
                breathtaking natural scenery, fresh mountain air, and the sounds of birds in the early morning.

                Upon reaching the summit of Ijen Crater at around 2,385 meters above sea level, you will have the option
                to continue down to the crater floor to witness the famous blue fire phenomenon. The descent takes about
                30 minutes and can be quite challenging, as the trail is rocky and slippery due to loose sand and
                stones. Once you arrive at the sulfur mining area, you can admire the mesmerizing blue flames — a unique
                natural phenomenon caused by the combustion of sulfuric gases emerging from the crater.

                Please note that the trail leading down to the crater lake is not equipped with safety facilities for
                climbing up and down. We strongly advise not attempting to descend into the crater. The tour operator is
                not responsible for any consequences that may arise from doing so.

                After enjoying the beauty of the blue fire, you’ll hike back up to the crater rim. Around 5:00 AM,
                you’ll be amazed by the stunning panorama of Ijen Crater, featuring a turquoise acidic lake — one of the
                most beautiful sights in East Java. This is also a perfect spot for taking photos.

                In addition to the view, you’ll witness sulfur miners carrying heavy loads of 40–70 kilograms on their
                shoulders, climbing the steep and dangerous paths from the crater floor. It’s an incredibly tough and
                risky job.

                After taking in the spectacular scenery at Ijen Crater, we’ll descend back to the parking area, where
                our car will be waiting to take you back to the hotel for breakfast and packing.

                Then, we’ll continue our journey toward the Mount Bromo area, which takes approximately 4 hours, with
                several stops along the way.

                Upon arrival at your accommodation near Mount Bromo, you will check in and have free time.
                (You can explore the area around your hotel or simply relax and enjoy a pleasant stay before starting
                your Mount Bromo Tour the next morning.) <br /><br />

                <b>Day 3: MOUNT BROMO SUNRISE TOUR - SURABAYA </b><br />
                The Mount Bromo Sunrise Tour will start around 3:00 AM from your hotel. A jeep will take you to the most
                famous viewpoint in the Bromo area — Penanjakan Hill (also known as King Kong Hill). From this hill, you
                can witness one of the most spectacular sunrises in East Java, with a stunning backdrop of mountains and
                volcanoes.

                (Optional: If you visit Mount Bromo on a weekend, the tour should start earlier, or you may choose the
                option to enjoy the sunrise from the Bromo Crater to avoid the crowds.)

                After fully enjoying the breathtaking sunrise view, we will return to the jeep and continue your
                adventure toward the Sea of Sand in the Bromo area.
                We’ll stop at the parking area, where you can cross the sea of sand either on horseback or on foot until
                you reach the staircase on the slope of Mount Bromo, which leads to the crater’s rim.

                Once you’ve admired the volcanic activity at the top of Mount Bromo, you’ll return to your jeep. The
                jeep will then take you back to your hotel for breakfast, a refreshing shower, and packing before
                loading your luggage into our car.

                Afterward, we will drive back to Surabaya, which takes about three hours.
                Upon arrival in Surabaya, we will drop you off at your hotel, airport, or train station, marking the end
                of the tour. <br /><br />

                <br><b>TOUR’S SERVICES FINISHED </b>.
            </div>




            {{-- <div class="imageContainer">
  <img
    src="{{ asset('Images/1.jpg') }}"
    alt="Bromo Ijen Tour"
  />
<div class="imgDescription">
  <h4 class="imageTitle">Bromo Ijen Tour</h4>
  <p class="imageDescription">
    Menyaksikan matahari terbit di Bromo hingga petualangan Blue Fire di Kawah Ijen
    adalah pengalaman tak terlupakan. Dari puncak Penanjakan, wisatawan dapat melihat
    Gunung Bromo, Gunung Batok, Gunung Semeru, dan Lautan Pasir yang membentang luas
    sebelum melanjutkan perjalanan ke Surabaya.
  </p>
  <p class="imgQuote one">
    <i>"Perpaduan sunrise Bromo dan Blue Fire Ijen adalah kombinasi petualangan yang
    hanya bisa ditemukan di Jawa Timur."</i>
  </p>
</div>

</div>


    <div class="para three">
      <h2>2. Dimana Menginap Selama Tour</h2>
      <hr />
      <p>
        Selama tour, biasanya wisatawan akan menginap 1 malam di area Bromo
        (Cemoro Lawang/Probolinggo) dan 1 malam di Banyuwangi sebelum pendakian Kawah Ijen.
        Hotel yang digunakan adalah hotel/homestay standar bersih dan nyaman.
      </p>
      <p>
        <b>Bromo:</b> Hotel/homestay dekat view point sehingga mudah untuk berangkat
        sunrise pagi-pagi buta.<br /><br />
        <b>Banyuwangi:</b> Hotel dengan fasilitas cukup lengkap, dekat jalur menuju Kawah Ijen.
      </p>
    </div>

    <div class="para three">
      <h2>3. Hal yang Akan Dilakukan</h2>
      <hr />
      <p>
        Dalam paket ini, Anda akan merasakan pengalaman seru:
      </p>
      <p>
        <b>Gunung Bromo:</b> Sunrise di Penanjakan, Lautan Pasir, Bukit Teletubbies,
        dan kawah Bromo.<br /><br />
        <b>Kawah Ijen:</b> Trekking menuju puncak Ijen, melihat Blue Fire,
        sunrise di bibir kawah, dan panorama danau hijau belerang yang menawan.
      </p>
    </div>

   <div class="imageContainer">
  <img
    src="{{ asset('Images/bluefire1.jpg') }}"
    alt="Blue Fire Ijen"
  />
  <div class="imgDescription">
    <h4 class="imageTitle">Blue Fire Kawah Ijen</h4>
    <p class="imageDescription">
      Fenomena Blue Fire hanya ada di dua tempat di dunia, dan salah satunya di
      Kawah Ijen, Banyuwangi. Wisatawan harus mendaki sekitar tengah malam untuk
      bisa menyaksikan keindahan api biru yang menyala di kegelapan.
    </p>
    <p class="imgQuote one">
      <i>"Blue Fire Ijen adalah keajaiban alam yang membuat semua lelah pendakian
      terasa terbayar lunas."</i>
    </p>
  </div>
</div>


    <div class="para three">
      <h2>4. Kesimpulan</h2>
      <hr />
     <p>
    Paket <b>Bromo Ijen Tour</b> ini sangat cocok bagi Anda yang ingin
    menjelajahi keindahan alam Jawa Timur dengan cara praktis dan efisien.
    Perjalanan dimulai dari Surabaya dan berakhir di Bali, sehingga Anda bisa
    melanjutkan liburan tanpa harus kembali ke titik awal.
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
                <a href="{{ route('pesanfinsihsurabaya.page') }}" class="bookingBtn">Klik Here</a>
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




    <a href="{{ route('allpackage.page') }}" class="backButton">
        <abbr title="Back">
            <img class="buttonn" src="https://img.icons8.com/material-outlined/48/142361/back--v1.png" />
        </abbr>
    </a>
    <script src="{{ asset('app.js') }}"></script>
</body>

</html>
