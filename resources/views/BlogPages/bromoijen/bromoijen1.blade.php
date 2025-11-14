<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <title>Ijen Bromo | Tegar</title>
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
                <div class="swiper-slide" style="background: url('/Images/IMG_5987.jpg') center/cover no-repeat fixed;">
                </div>
                <div class="swiper-slide" style="background: url('/Images/IMG_5787.jpg') center/cover no-repeat fixed;">
                </div>
                <div class="swiper-slide" style="background: url('/Images/IMG_6434.jpg') center/cover no-repeat fixed;">
                </div>
            </div>
        </div>

        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1 style="text-transform: uppercase;">
                    Bromo ijen tour Start from Surabaya (finish at Bali)
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
            <p class="para one" id="para">


            </p>

            <div class="para two" id="itinerary">
                <h2>Itinerary Bromo Ijen Tour 3 Days 2 Nights</h2>
                <hr />

                <b>Day 1: SURABAYA - ACOMMODATION IN TUMPAKSEWU
                    WATERFALL AREA </b><br />
                The Bromo Ijen tour will start from the Surabaya area. We will pick you up at your hotel, the airport,
                or the train station. From Surabaya, we will drive to your accommodation near Mount Bromo, which takes
                approximately three hours.
                Upon arrival at the hotel, you will check in and have free time.
                (You may explore the area around your accommodation or simply relax and enjoy a pleasant stay before
                beginning your Mount Bromo tour.) <br /><br />



                <b>PROGRAM OPSIONAL:</b> If you can depart in the morning and the weather is good, you’ll have the
                opportunity to visit Madakaripura Waterfall on the way from Surabaya to your hotel near Mount Bromo.
                (<a href="#" id="openPopup"> Air Terjun Madakaripura Image. </a>)<br /><br />

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
                </script>



                <b>Day2 (BROMO SUNRISE TOUR - HOTEL IN IJEN CRATER
                    AREA) </b><br />
                The Mount Bromo Sunrise Tour will start around 3:00 AM from your hotel. A jeep will take you to the most
                famous viewpoint in the Bromo area — Penanjakan Hill (also known as King Kong Hill). From this hill, you
                can witness one of the most spectacular sunrises in East Java, with a breathtaking backdrop of mountains
                and volcanoes. <br /><br />

                <b>Opsional: </b>If you visit Mount Bromo on a weekend, the tour should start earlier, or you may choose
                the option to enjoy the sunrise from the Bromo Crater to avoid the crowds.

                After you have fully enjoyed the magnificent view of Mount Bromo, we will return to the jeep and
                continue your adventure toward the Sea of Sand in the Bromo area.
                We’ll stop at the parking area, where you can cross the sea of sand either on horseback or on foot until
                you reach the staircase on the slope of Mount Bromo, which will lead you to the crater’s rim.

                After experiencing the volcanic activity at the top of Mount Bromo, you’ll return to your jeep. The jeep
                will then take you back to the hotel for breakfast, a refreshing shower, packing, and loading your bags
                into our car.

                Next, we’ll continue the journey to your next hotel near Mount Ijen, which takes about 5–6 hours. Along
                the way, you’ll enjoy scenic views of villages, small towns, rice fields, plantations, and coastal
                landscapes.

                For lunch, we can stop at a local restaurant.
                By the afternoon, we’ll arrive at your hotel in the Ijen area, located just about an hour from the
                crater. You’ll stay overnight here before beginning your Ijen Crater trekking the following morning.
                <br /><br />

                <b>Day 3 (IJEN BLUE FIRE TOUR - BALI) </b><br />
                The Ijen Crater Tour will start around 1:00 AM. Our car will take you to Paltuding, the starting point
                of the hike, which is about an hour’s drive from your hotel.
                Upon arriving at the Kawah Ijen parking area (1,850 meters above sea level), it takes approximately 1.5
                hours to hike up to the crater. Along the trail, you’ll enjoy breathtaking natural scenery and
                refreshing mountain air.

                Once you reach the top of Ijen Crater at around 2,386 meters above sea level, you’ll witness the
                world-famous blue fire phenomenon — a truly mesmerizing sight.
                It takes about one hour to reach the starting point from your hotel and around two hours to arrive at
                the blue fire point. The 1.5-hour trek from Paltuding is fairly manageable, but descending to the blue
                fire area can be challenging as the path is rocky and slippery (approximately a 30-minute descent from
                the crater rim).

                Please note: the blue fire area is located within an active sulfur mining site, so you’ll likely
                encounter local miners along the way. For your safety, please follow our guide’s instructions at all
                times.

                Reaching the blue fire point is not easy — you may also experience exposure to sulfur smoke, which
                smells strongly like rotten eggs. Make sure you are well-prepared and ready for any conditions.

                After enjoying the blue fire, we will hike back up to the viewpoint on the crater rim, which takes about
                one hour on foot. From here, you can admire the stunning panorama of Ijen’s turquoise sulfur lake, one
                of the largest acidic lakes in Asia, with a pH level of around 0.5.

                After spending time enjoying the magnificent view (around 6:00 AM), we’ll return to the car and head
                back to your hotel for breakfast and some rest.
                At 11:30 AM, we’ll drive you to the harbor, where you’ll take a ferry to Bali — the crossing takes about
                one hour. Upon arrival at Bali Port, our local driver will meet you and transfer you directly to your
                hotel in Bali.<br /><br />

                <b>Tour Services Finished</b>
            </div>

            <div class="thanks">
                <img src="https://img.icons8.com/fluency/50/4a90e2/filled-like.png" alt="Thank You" />
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
                <a href="{{ route('pesanfinsihbali.page') }}" class="bookingBtn">Klik Here</a>
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
