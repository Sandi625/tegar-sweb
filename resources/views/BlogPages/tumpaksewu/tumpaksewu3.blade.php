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
                <h2>Itinerary Surabaya - Tumpaksewu - Bromo - Ijen - Bali</h2>
                <hr />

                <p> <b>Day1 : BALI - ACOMMODATION IN IJEN CRATER AREA</b></p>
                <p>
                    Tour ijen Tumpaksewu Bromo dari Bali akan dimulai sekitar pukul
                    08.00 (zona waktu Bali), staff kami akan menjemput anda dari hotel
                    anda di area Bali (Ubud,Canggu, Kuta, Denpasar, Jimbaran dan
                    Lovina), dan kemudian kami akan berkendara ke pelabuhan feri
                    Gilimanuk. Selanjutnya kita akan naik kapal feri sekitar satu jam
                    untuk mencapai Pelabuhan Penyeberangan Ketapang. Kemudian kami
                    akan mengantar Anda ke restoran lokal untuk makan siang dan
                    kemudian melanjutkan perjalanan menuju Hotel tempat kalian
                    menginap di kawasan kawah ijen (kota Banyuwangi).
                    Setibanya anda di Hotel, chek-in hotel dan acara bebas.
                    (kalian bisa mengeksplorasi disekitar hotel anda atau langsung ber
                    istirahat dan nikmati pengalaman menginap yang menyenangkan
                    sebelum anda melakukan tour kawah ijen)
                </p>
                <p>
                    <b>Day2 : IJEN CRATER BLUE FIRE TOUR - ACOMMODATION IN
                        TUMPAKSEWU WATERFALL AREA </b>
                        <p>    Tour kawah ijen akan dimulai pukul 00.30 AM. staff kami akan
                    menjemput anda dari hotel atau villa anda di area banyuwangi,
                    perjalanan akan dilanjut menuju paltuding (start point) yang
                    menempuh kurang lebih 1 jam dari pusat kota banyuwangi.
                    Lalu pendakian akan di mulai pada pukul 02.00 AM, Dari sini Anda
                    memerlukan waktu 1,5 jam untuk mendaki lereng Kawah Ijen (dengan
                    panjang trek sekitar 3,5 km). Di Sepanjang jalur berjalan kaki, Anda
                    akan menikmati pemandangan alam yang menakjubkan dengan udara
                    segar dan kicauan burung.
                    Sesampainya anda di puncak Kawah Ijen dengan ketinggian sekitar
                    2385 mAsl.
                    Jika anda ingin melihat fenomena api biru Perjalanan dilanjut menuju
                    dasar kawah, perjalanan memerlukan waktu -+ 30 menit dengan
                    medan yang sedikit berbahaya karena sepanjang track akan banyak
                    batu bercampur pasir sehingga sedikit licin, sesampai nya di kawasan
                    belerang anda akan menikmati indahnya api biru, (api biru adalah
                    fenomena alam unik yang terjadi akibat pembakaran gas sulfur yang
                    keluar dari kawah Gunung Ijen, dan terjadi alami)
                    Harap dicatat bahwa jalur turun ke dasar kawah untuk jalur turun ke
                    kawah menuju danau tidak dilengkapi dengan peralatan yang aman
                    untuk turun dan naik. Kami sangat menyarankan untuk tidak mencoba
                    turun ke kawah. Jika tidak, penyelenggara tur tidak bertanggung
                    jawab atas segala konsekuensi yang mungkin terjadi.
                    Setelah menikmati indahnya api biru lalu dilanjutkan mendaki untuk
                    kembali ke puncak.
                    Di pagi hari sekitar jam 05.00 AM Anda akan terkesima dengan
                    panorama Kawah Ijen yang mempesona, terdapat danau air asam yang
                    warna airnya biru kehijauan. Pemandangan akan begitu indah bila
                    Anda mengambil foto di atas kawah. Selain pemandangan, Anda akan
                    melihat para penambang belerang yang turun ke dalam kawah untuk
                    mengambil batu belerang kuning dan naik kembali dengan melewati
                    jalan setapak yang berbahaya di pinggir Kawah Ijen dengan beban di
                    pundak mereka sebanyak 40-70 kilogram. Ini adalah pekerjaan yang
                    berbahaya dan sulit.
                    Setelah menikmati pemandangan yang mempesona di Kawah Kawah
                    Ijen selanjutnya kita akan turun menuju area parkir dimana mobil kita
                    akan menunggu untuk mengantar anda kembali ke hotel untuk sarapan
                    dan ambil tas kamu Sebelum berangkat menuju kawasan air terjun
                    tumpaksewu, perjalanan akan memakan waktu sekitar 6-7 jam
                    perjalanan dengan beberapa pemberhentian.
                    Setibanya anda di penginapan, chek-in hotel dan acara bebas.
                    (kalian bisa mengeksplorasi disekitar hotel anda atau langsung ber
                    istirahat dan nikmati pengalaman menginap yang menyenangkan
                    sebelum anda melakukan tour air terjun tumpaksewu.)
                </p>
                </p>

                <p><b>Day3: EXPLORE TUMPAKSEWU WATERFALL -
ACOMMODATION IN BROMO AREA </b></p>
                <p>
                Tour tumpak sewu waterfall akan dimulai pada pukul 6 pagi.
Setibanya di Air Terjun Tumpak Sewu, pemandu kami akan menemani
Anda ke sudut pandang Panorama, menawarkan pemandangan
panorama air terjun yang membentang 180 derajat.
Setelah cukup menikmati pemandangan, kita akan turun ke dasar air
terjun, mengambil foto dari berbagai sudut. Turunnya bisa licin karena
kondisi basah, tetapi tangga besi dan tangga semen yang baru
dibangun tersedia.
(Alas kaki yang memadai dan tas tahan air direkomendasikan.)
Kegiatan ini akan berlangsung sekitar 3 jam, tergantung pada tingkat
keterlibatan Anda dengan air terjun.
Setelah menjelajahi air terjun, kita akan kembali ke hotel untuk
sarapan terlebih dahulu sebelum melanjutkan ke tujuan kita berikutnya
ke Gunung Bromo, yang akan membutuhkan 3 jam berkendara dari
Air Terjun Tumpak Sewu.
Setibanya anda di hotel, chek-in hotel dan acara bebas.
(kalian bisa mengeksplorasi disekitar hotel anda atau langsung ber
istirahat dan nikmati pengalaman menginap yang menyenangkan
sebelum anda melakukan tour gunung bromo.)
                </p>


                <p><b>Day4 : SUNRISE BROMO TOUR - SURABAYA </b></p>
                <p>
                   Tour Sunrise Gunung Bromo akan dimulai sekitar pukul 03.00 dari
hotel anda, jeep akan membawa anda ke viewpoint paling terkenal di
kawasan Gunung Bromo. Itulah Penanjakan/Bukit King Kong/Seruni
point, dari bukit tersebut kamu bisa melihat matahari terbit terbaik di
Jawa Timur dengan latar belakang pegunungan dan gunung berapi.
(Opsional: bila anda datang ke Gunung Bromo di akhir pekan, tour
harus dimulai lebih awal atau mengambil opsi menikmati sunrise dari
kawah bromo untuk menghindari keramaian)
Setelah kalian cukup menikmati indahnya pemandangan gunung
bromo lalu kita kembali ke jeep dan akan melanjutkan petualangan
Anda hingga mencapai lautan pasir di kawasan Gunung Bromo.
Kita akan berhenti di area parkir kemudian anda akan melintasi lautan
pasir dengan menunggang kuda atau berjalan kaki hingga mencapai
tangga di lereng Gunung Bromo yang akan mengantarkan anda
mencapai puncak Gunung Bromo.
Setelah menikmati aktivitas vulkanik di puncak Gunung Bromo anda
harus kembali ke jeep anda kemudian jeep akan mengantarkan anda
kembali ke hotel untuk sarapan pagi, mandi, packing dan
memasukkan tas ke dalam mobil.
setelah itu kita akan melanjutkan perjalanan menuju kawasan surabaya
sekitar kurang lebih 3 jam.
Setibanya di surabaya kita akan mengantarkanmu ke hotel, airport
atau stasiun kereta (tempat mengakhiri tour)
Lalu trip kita selesai.
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
