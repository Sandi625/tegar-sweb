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
             The Bromo, Tumpak Sewu & Ijen Tour from Bali will begin around 8:00 AM (Bali time). Our staff will pick you up from your hotel in the Bali area (Ubud, Canggu, Kuta, Denpasar, Jimbaran, or Lovina). From there, we will drive to Gilimanuk Ferry Port to cross over to Java Island.

You will take a ferry ride for about one hour to reach Ketapang Harbor in Banyuwangi, East Java. After arriving, we’ll take you to a local restaurant for lunch before continuing the journey to your hotel near Mount Bromo. The drive to the Bromo area takes approximately 6 hours.

Upon arrival at your hotel, you’ll check in and have free time to explore the surrounding area or simply relax and enjoy a comfortable night’s rest before your Mount Bromo Sunrise Tour the next morning.
                </p>
                <p>
                    <b>Day2: BROMO SUNRISE TOUR - ACOMMODATION IN
TUMPAKSEWU AREA   </b>
                        <p> On the second day, the tour will begin around 3:00 AM. We’ll take a jeep ride for about 40 minutes to reach King Kong Hill, one of the most famous sunrise viewpoints in the Bromo area. Upon arrival, you’ll need to wait a little while until sunrise, which usually occurs around 5:30 AM.
There are several local coffee stalls nearby, so you can enjoy a cup of hot coffee or tea to warm up while waiting for the sunrise.

As the sun rises in the east, you’ll witness a breathtaking view of Mount Bromo, surrounded by Mount Batok, Cemoro Lawang Village, and the majestic Mount Semeru, the tallest volcano in Java, in the background.

After enjoying the sunrise, we’ll continue the adventure by driving across the sea of sand before trekking to the rim of Mount Bromo’s crater. The hike to the crater rim takes about 45 minutes, but you can also ride a horse partway, which takes around 10–15 minutes.

At the crater rim, you’ll see Bromo’s active volcanic vent, constantly emitting sulfur smoke — an unforgettable sight, especially when volcanic activity increases.

Once you’ve finished exploring, we’ll return to your hotel for breakfast, a shower, and check-out, before continuing our journey to Lumajang, a town near Tumpak Sewu Waterfall, where you’ll spend the night before visiting the waterfall the next morning.

The drive to Lumajang takes approximately 3 hours.
Upon arrival, you’ll check in at your hotel and have free time to explore the surroundings or relax and enjoy a comfortable evening before your Tumpak Sewu Waterfall Tour the next day.
                </p>
                </p>

                <p><b>Day3: EXPLORE TUMPAKSEWU WATERFALL -
ACOMMODATION IN IJEN CRATER AREA </b></p>
                <p>
            On the third day, we’ll start the trip around 7:00–8:00 AM, although leaving earlier is highly recommended. The best time to visit Tumpak Sewu Waterfall is between 6:00 and 9:00 AM, when the sunlight creates the most stunning view of the falls.

Upon arrival, you’ll take a short walk to the Panorama Viewpoint, where you can admire the breathtaking scenery from above.
If you have a drone, this is the perfect place to fly it — the aerial view of Tumpak Sewu is absolutely spectacular.

After enjoying the view from above, our guide will accompany you down to the base of the waterfall for a closer experience. Please make sure to wear good quality water shoes or sandals, as the trail can be slippery and wet.

You’ll spend about 2–3 hours exploring and enjoying the beauty of Tumpak Sewu, giving you plenty of time to take in the experience.

After finishing the Tumpak Sewu tour, we’ll return to your hotel for breakfast, a shower, and packing, before continuing our journey to the next destination — Banyuwangi, the gateway to Mount Ijen.

The drive to Banyuwangi takes approximately 7 hours, so you can relax and rest during the journey until we arrive at your accommodation.
Upon arrival, you’ll check in at your hotel and have free time to unwind or explore the surrounding area at your own pace.
                </p>


                <p><b>Day4 : IJEN CRATER BLUE FIRE TOUR - BALI  </b></p>
                <p>
              On the last day of your trip, the Kawah Ijen Tour will begin around 00:30 AM. Our car will take you to Paltuding (the starting point), which takes approximately 1 hour from your hotel.

Upon arrival at the Kawah Ijen parking area (1,850 meters above sea level), it takes about 1.5 hours to hike to the crater. Along the way, you’ll enjoy breathtaking natural scenery and fresh mountain air. When you reach the summit of Kawah Ijen (about 2,386 meters above sea level), we will continue the journey to witness the famous blue fire phenomenon — a truly spectacular sight.
(It takes about 30 minutes from the summit to reach the blue fire viewpoint.)

<br>Please note:
The blue fire area is located within the sulfur mining zone, where local miners work. For your safety, please follow your guide’s instructions at all times.
Reaching the blue fire is quite challenging — the path can be steep, and sometimes the sulfur smoke may blow toward you, which smells strongly of rotten eggs. Please be prepared for this experience.

After witnessing the blue fire, we’ll hike back up to the viewpoint at the crater rim, which takes about 1 hour on foot. From the rim, you’ll be rewarded with an incredible panoramic view — a perfect payoff for your early-morning effort.

Kawah Ijen is home to one of the largest sulfur lakes in Asia, glowing in shades of turquoise blue-green with a highly acidic level of pH 0.5.
After enjoying the view until around 6:00 AM, we’ll return to the car and head back to the hotel for breakfast and some rest.

By 11:30 AM, we’ll depart and take you to the harbor for your ferry transfer to Bali. The ferry crossing takes about one hour. Upon arrival at Bali Port, you will be greeted by our driver who will take you to your hotel in Bali.
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
