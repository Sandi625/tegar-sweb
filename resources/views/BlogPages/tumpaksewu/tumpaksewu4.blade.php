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
                <div class="swiper-slide" style="background:url('/Images/IMG_4139.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_2810.jpg') center/cover no-repeat;"></div>
                <div class="swiper-slide" style="background:url('/Images/IMG_3323.jpg') center/cover no-repeat;"></div>
            </div>
        </div>

        <!-- Konten di atas slider -->
        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1 style="text-transform: uppercase;">
                    Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Bali (finish at Bali)
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

                <p> <b>Day1: BALI - ACOMMODATION IN MOUNT BROMO AREA  </b></p>
                <p>
               Tour Bromo tumpaksewu & ijen dari Bali akan dimulai sekitar pukul
08.00 (zona waktu Bali), staff kami akan menjemput anda dari hotel
anda di area Bali (Ubud,Canggu, Kuta, Denpasar, Jimbaran dan
Lovina), dan kemudian kami akan berkendara ke pelabuhan feri
Gilimanuk. Selanjutnya kalian akan naik kapal feri sekitar satu jam
untuk mencapai Pelabuhan Penyeberangan Ketapang (di jawa).
Kemudian kami akan mengantar Anda ke restoran lokal untuk makan
siang dan kemudian melanjutkan perjalanan ke Hotel di sekitar
Gunung Bromo, untuk pergi kesana Dibutuhkan waktu sekitar 6 jam
perjalanan menuju kawasan Gunung Bromo.
Setibanya anda di Hotel, chek-in hotel dan acara bebas.
(kalian bisa mengeksplorasi disekitar hotel anda atau langsung ber
istirahat dan nikmati pengalaman menginap yang menyenangkan
sebelum anda melakukan tour gunung bromo.)
                </p>
                <p>
                    <b>Day2: BROMO SUNRISE TOUR - ACOMMODATION IN
TUMPAKSEWU AREA   </b>
                        <p> Perjalanan hari kedua, kita akan mulai sekitar pukul 03.00 dan
berkendara dengan mobil jeep menuju bukit King Kong sekitar 40
menit perjalanan. Setibanya di sini, Anda harus menunggu beberapa
jam hingga matahari terbit dan matahari terbit sekitar pukul 05.30 di
sini. Disekitarnya banyak terdapat kedai kopi, jadi Anda bisa
menikmati kopi atau teh untuk menghangatkan tubuh terlebih dahulu
sebelum pergi ke spot sunrise
Saat matahari terbit dari timur, Anda akan melihat pemandangan indah
Gunung Bromo dan sekitarnya seperti Gunung Batok, Desa Cemoro
Lawang, dan gunung berapi tertinggi Gunung Semeru sebagai latar
belakang. Usai menikmati matahari terbit di sini, kami akan
mengantar Anda ke lautan pasir sebelum trekking ke tepi kawah
Gunung Bromo. Trekking menuju bibir kawah memakan waktu
sekitar 45 menit namun Anda juga bisa naik kuda sekitar 10-15 menit
saja. Setibanya di bibir kawah Gunung Bromo, Anda akan melihat
lubang api yang setiap saat mengeluarkan asap belerang dan semakin
tebal pada saat-saat khusus aktivitas gunung berapi. Setelah
menikmati pemandangan disini kita akan kembali ke hotel untuk
sarapan pagi, mandi dan melanjutkan perjalanan selanjutnya ke kota/
 desa Lumajang dekat kawasan Air Terjun Tumpak Sewu dimana anda
akan bermalam sebelum mengunjungi Air Terjun Tumpak Sewu
keesokan paginya.
untuk pergi kesana Dibutuhkan waktu sekitar 3 jam perjalanan menuju
kawasan air terjun tumpaksewu.
Setibanya anda di Hotel, chek-in hotel dan acara bebas.
(kalian bisa mengeksplorasi disekitar hotel anda atau langsung ber
istirahat dan nikmati pengalaman menginap yang menyenangkan
sebelum anda melakukan tour air terjun tumpaksewu)
                </p>
                </p>

                <p><b>Day3: EXPLORE TUMPAKSEWU WATERFALL -
ACOMMODATION IN IJEN CRATER AREA </b></p>
                <p>
             Perjalanan hari ketiga, perjalanan bisa kita mulai pada jam 7/8 pagi,
namun lebih awal akan lebih baik. Karena waktu terbaik untuk
mengunjungi air terjun ini adalah pukul 6-9 pagi saja, Setibanya di
sana, Anda akan berjalan sedikit menuju titik Panorama yang
memperlihatkan pemandangan menakjubkan dari atas. Jika Anda
memiliki drone, ini adalah tempat yang wajib untuk menerbangkan
drone. Karena pemandangan dari udara sangat menakjubkan. Usai
menikmati pemandangan, kami akan menemani Anda turun dan
menikmati air terjun dari bawah, namun pastikan Anda memiliki
sandal atau sepatu basah yang bagus. Keadaan trek licin dan basah.
menikmati pemandangan di sini akan memakan waktu 2-3 jam, jadi
Anda akan puas di sini. Sesudahnya tour tumpaksewu kita akan
kembali ke hotel untuk sarapan, mandi, dan berkemas, lalu  akan
melanjutkan perjalanan Anda ke destinasi selanjutnya yaitu Kota
Banyuwangi (kawasan Kawah Ijen). Perjalanan akan memakan waktu
sekitar 7 jam, pastikan istirahat yang cukup di dalam mobil sampai
tiba di akomodasi anda di banyuwangi.
Setibanya anda di Hotel, chek-in hotel dan acara bebas.
                </p>


                <p><b>Day4 : IJEN CRATER BLUE FIRE TOUR - BALI  </b></p>
                <p>
               Pada hari terakhir perjalanan, Tour Kawah Ijen akan dimulai sekitar
pukul 00.30 WIB, mobil kita akan membawa kita menuju paltuding
(start point),  perjalanan ini memakan waktu kurang lebih 1 jam dari
hotel. Sesampainya di area parkir Kawah Ijen (1850m), dibutuhkan
waktu sekitar 1,5 jam untuk mendaki Kawah Ijen. Sepanjang jalur
pendakian , Anda akan menikmati pemandangan alam yang
menakjubkan dengan udara segar . Setibanya anda di puncak Kawah
Ijen dengan ketinggian sekitar 2386 masl.
Lalu kita akan melanjutkan perjalanan untuk melihat fenomena alam
api biru yang terkenal. Jadi, ini akan sangat menakjubkan.
(membutuhkan waktu 30 menit dari puncak untuk ke titik api biru).
Sekadar informasi: Titik api biru terletak di area pertambangan,
sehingga ada penambang belerang yang akan melewatinya, jadi harap
ikuti panduan kami demi keselamatan Anda.
Untuk mencapai titik api biru tidaklah mudah, anda juga bisa
mendapatkan asap belerang yang menuju ke arah kita, sangat buruk
seperti bau telur busuk. Jadi, pastikan Anda siap menghadapi risiko
apa pun.
Setelah menikmati blue fire, kami akan mengajak anda untuk naik ke
View Point yang terletak di puncak bibir kawah, sehingga anda harus
berjalan kaki sekitar satu jam. Pemandangan di puncak bibir kawah
begitu indah, sehingga akan terbayar dengan perjalanan Anda.
Kawah Ijen memiliki salah satu danau belerang terbesar di Asia,
warnanya juga biru kehijauan dengan keasaman tinggi (0,5 Ph.)
Setelah menikmati pemandangan disini sekitar jam 6 pagi, kita akan
kembali ke mobil dan kembali ke hotel untuk sarapan dan istirahat.
Pada pukul 11:30, kami akan siap mengantar Anda menuju pelabuhan
penyeberangan untuk naik kapal ferry. Ferry akan memakan waktu
sekitar satu jam. Setibanya Anda di pelabuhan Bali, Anda akan
bertemu dengan sopir kami yang siap mengantar Anda ke hotel di
Bali.
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
                <a href="{{ route('tumpakpesan4.page') }}" class="bookingBtn">Klik Here</a>
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
