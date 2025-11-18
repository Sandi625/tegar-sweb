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
        <a href="#" class="brand-logo">Travel</a>
        <ul class="links">
            <li class="link">
                <b><a href="#">Home</a></b>
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
                <h2>#</h2>
                <hr />

                <b>Day 1: # </b><br />
               ##<br /><br />



                <b>Day2 # </b><br />
              # <br /><br />

                <b>Opsional: </b>#
                <br /><br />

                <b>Day 3 #</b><br />
             #<br /><br />

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
