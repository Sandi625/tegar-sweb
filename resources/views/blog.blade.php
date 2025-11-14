<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />
    <title>Tour Package | Tegar</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="loaderr">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
        </div>
    </div>

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

    <!-- <div class="pageName-container">
        <p class="page">./PLACES</p>
    <hr width="200%" color="#98a1c2">
    </div> -->
    <section class="header">
        <div class="header-content">
            <h1>
                The travel writing that will teleport you to
                <span class="textHighlight"> gorgeous destinations</span>
            </h1>
            <p>
                We have a passion for storytelling, a knack for putting itineraries
                together and a strong desire to have fun. Here are all our adventures,
                our travel tips and our guides.
            </p>
        </div>
        <a href="#blog" class="scrollContainer"><button class="scrollButton">
                <img src="https://img.icons8.com/ios-filled/50/e48111/book.png" />
                <p>Hit Me</p>
            </button></a>
        <div class="custom-shape-divider-bottom-1631284471">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section class="blogs">
        <div class="blogsContainer">
            <div class="blog" id="blog">
                <img src="{{ asset('Images/7.jpg') }}" alt="Bromo Ijen Tour" class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Bromo ijen tour Start from Surabaya (finish at Bali)</h2>
                        <p class="text">
                            This tour package combines two of East Java’s most iconic destinations — Mount Bromo and the
                            Ijen Crater.
                            Starting from Surabaya, you will witness the breathtaking sunrise over Bromo’s sea of sand,
                            followed by
                            a journey to Banyuwangi for an unforgettable trek to the Ijen Crater to see the mesmerizing
                            Blue Fire
                            and the turquoise sulfur lake. The tour ends in Bali, making it a convenient and seamless
                            way to continue your holiday.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('bromoijen.bali') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$350</p> --}}
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="blog">
                <img src="{{ asset('Images/1ijen.jpg') }}" alt="Bromo Ijen Tour Surabaya" class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Bromo ijen tour Start from Surabaya (finish at Surabaya)</h2>
                        <p class="text">
                            This trip is perfect for travelers who want to experience two of East Java’s most iconic
                            destinations without going to Bali.
                            Starting from Surabaya, you will explore Mount Bromo and witness its famous sunrise, then
                            continue with a trek to the Ijen Crater
                            to see the enchanting Blue Fire and observe local sulfur miners in action. The tour
                            concludes with your return to Surabaya.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('bromoijen.surabaya') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/IMG_4120.jpg') }}" alt="Bromo Ijen Tour from Bali" class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Bromo Ijen Tour Start from Bali (Finish at Surabaya)</h2>
                        <p class="text">
                            The adventure begins in Bali with a journey to Mount Bromo, where you will witness a
                            stunning sunrise from Penanjakan
                            and marvel at the vast sea of sand below. The trip continues to Banyuwangi for an
                            unforgettable hike to the Ijen Crater,
                            where you can see the rare Blue Fire phenomenon. The tour concludes in Surabaya, offering an
                            unforgettable experience
                            exploring two of East Java’s most spectacular natural wonders.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('pesanfrombali2.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>


            <div class="blog">
                <img src="{{ asset('Images/IMG_5787.jpg') }}" alt="Bromo Ijen Tour from Bali" class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Bromo Ijen Tour Start from Bali (Finish at Bali)</h2>
                        <p class="text">
                            Enjoy an exciting adventure exploring two of East Java’s most famous natural destinations.
                            The tour begins in Bali with a trip to Mount Bromo to witness a breathtaking sunrise from
                            Penanjakan
                            and explore its iconic sea of sand. The journey continues to Banyuwangi for a thrilling trek
                            to the Ijen Crater,
                            where you can marvel at the mesmerizing Blue Fire phenomenon. After the tour, you will
                            return to Bali
                            with unforgettable memories of this incredible experience.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('pesanfrombali1.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>






            <div class="blog">
                <img src="{{ asset('Images/IMG_4646.jpg') }}" alt="Tumpaksewu-Bromo-Ijen Tour from Bali"
                    class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Bali (Finish at Surabaya)</h2>
                        <p class="text">
                            Experience a 4-day, 3-night adventure exploring the breathtaking natural beauty of East
                            Java.
                            The journey begins in Bali with a visit to the majestic Tumpak Sewu Waterfall,
                            followed by a spectacular sunrise at Mount Bromo, and concludes with a thrilling trek
                            to the Ijen Crater to witness the mesmerizing Blue Fire phenomenon.
                            The tour ends in Surabaya, leaving you with unforgettable memories of this incredible
                            journey.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('tumpak3.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>

            <div class="blog">
                <img src="{{ asset('Images/IMG_4139.jpg') }}" alt="Tumpaksewu-Ijen-Bromo Tour from Bali"
                    class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Tumpaksewu-Ijen-Bromo Tour (4D3N) Start From Bali (Finish At Bali)</h2>
                        <p class="text">
                            Embark on an epic 4-day, 3-night adventure exploring the natural wonders of East Java.
                            The tour begins in Bali with a visit to the majestic Tumpak Sewu Waterfall,
                            followed by a journey to Banyuwangi to hike the Ijen Crater and witness the mesmerizing Blue
                            Fire phenomenon.
                            On the final day, enjoy the breathtaking sunrise at Mount Bromo before returning to Bali.
                            A perfect combination of waterfalls, volcanoes, and extraordinary natural beauty awaits you
                            on this unforgettable trip.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('tumpak4.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>



            <div class="blog">
                <img src="{{ asset('Images/IMG_4145.jpg') }}" alt="Tumpaksewu-Bromo-Ijen Tour from Surabaya"
                    class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Surabaya (Finish at Bali)</h2>
                        <p class="text">
                            Discover the natural beauty of East Java on this 4-day, 3-night adventure starting from
                            Surabaya.
                            The journey begins with a visit to the magnificent Tumpak Sewu Waterfall, known for its
                            breathtaking scenery.
                            Continue to Mount Bromo to witness a spectacular sunrise from Penanjakan and explore the
                            vast Sea of Sand.
                            The trip concludes with a hike to the Ijen Crater, where you’ll witness the rare Blue Fire
                            phenomenon,
                            before crossing back to Bali.
                            This tour offers a complete and unforgettable experience of East Java’s natural wonders.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('tumpak1.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>


            <div class="blog">
                <img src="{{ asset('Images/IMG_3235.jpg') }}" alt="Tumpaksewu-Bromo-Ijen Tour from Surabaya"
                    class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Tumpaksewu-Bromo-Ijen Tour (4D3N) Start from Surabaya (Finish at Surabaya)</h2>
                        <p class="text">
                            Enjoy an unforgettable 4-day, 3-night adventure exploring the natural wonders of East Java,
                            starting and ending in Surabaya.
                            Begin your journey with a visit to the majestic Tumpak Sewu Waterfall, often called the
                            "Niagara of Indonesia."
                            Continue to Mount Bromo to witness a breathtaking sunrise and explore its vast Sea of Sand.
                            On the final day, trek to the Ijen Crater to witness the stunning Blue Fire phenomenon
                            before returning to Surabaya with incredible memories of this epic adventure.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('tumpak2.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>


            <!-- Blog 3 -->
            <div class="blog">
                <img src="{{ asset('Images/i5.jpg') }}" alt="Midnight Ijen Tour from Bali" class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Mid night ijen from bali</h2>
                        <p class="text">
                            The Midnight Ijen Tour from Bali begins with a late-night pickup followed by a journey to
                            Banyuwangi, crossing the ferry to Java.
                            In the early hours, you will trek up to the Ijen Crater to witness the rare Blue Fire
                            phenomenon and enjoy the sunrise from the crater’s rim,
                            before returning to Bali in the morning.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('finishbali.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>

            <!-- Blog 4 -->
            <div class="blog">
                <img src="{{ asset('Images/IMG_5116.jpg') }}" alt="Midnight Ijen Tour from Banyuwangi"
                    class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Midnight Ijen from Banyuwangi</h2>
                        <p class="text">
                            This tour starts from Banyuwangi around 12:30 AM. You will trek to the summit of Mount Ijen
                            to witness the stunning Blue Fire phenomenon in the darkness of the night.
                            Afterward, enjoy a breathtaking sunrise from the crater’s rim with the turquoise sulfur lake
                            as a beautiful backdrop.
                            The adventure ends as you return to Banyuwangi in the morning with an unforgettable
                            experience.
                        </p>

                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('finishbanyuwangi.page') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        {{-- <p class="price">$370</p> --}}
                    </div>
                </div>
            </div>



            <!-- lanjut blog lain tinggal ganti src sesuai file di folder Images -->
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

    <script src="{{ asset('JS/blog.js') }}"></script>
    <script src="https://kit.fontawesome.com/775344b04d.js" crossorigin="anonymous"></script>
</body>

</html>
