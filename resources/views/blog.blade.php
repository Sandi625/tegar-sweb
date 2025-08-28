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
                            There aren’t many cities in the world that quite span the size
                            of Tokyo. Due to its sheer scale, uncovering Japan’s largest
                            city may seem like a daunting task – but it doesn’t have to be
                            with my detailed Tokyo itinerary to help you out! With its
                            vibrant and bustling city streets, tranquil green parks,
                            stunning vistas and remarkable history, spending six days in Tokyo
                            should be at the top of your itinerary for a visit to Japan
                        </p>
                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('bromoijen.bali') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        <p class="price">$350</p>
                    </div>

                </div>
            </div>

            <!-- Contoh blog lain -->
            <div class="blog">
                <img src="{{ asset('Images/11.jpg') }}" alt="Bromo Ijen Tour Surabaya" class="image" />
                <div class="content">
                    <div class="details">
                        <h2>Bromo ijen tour Start from Surabaya (finish at Surabaya)</h2>
                        <p class="text">
                            Kandy is the hill country capital and gateway to the tea region
                            of Sri Lanka. This former Kingdom is a colourful, bustling city
                            of markets, temples, spice gardens, a picturesque lake and
                            surrounded by scenic natural beauty – offering a range of
                            cultural and dynamic experiences for all types of travellers.
                        </p>
                        <button class="readMoreBtn">Read more</button>
                    </div>

                    <div class="buttons">
                        <a href="{{ route('bromoijen.surabaya') }}">
                            <button class="viewButton">Details Trip</button>
                        </a>
                        <p class="price">$370</p>
                    </div>
                </div>
            </div>
            <!-- lanjut blog lain tinggal ganti src sesuai file di folder Images -->
        </div>
    </section>


    <footer>
        <div class="footerDetails">
            <div class="footerDescription">
                <h1 class="footerTitle">Tegar</h1>
                <p class="footerPara">
                    Discover New Destinations. See breath-taking places and experience
                    them from you device online.
                    <br />
                    Our travel writing captures the one thing we always strive to create
                    – incredible travel experiences. From learning about the historical
                    and political context of a destination to finding some really great
                    hikes, each new place has something to discover.
                    <br />
                    We have a passion for storytelling, a knack for putting itineraries
                    together and a strong desire to have fun. Here are all our
                    adventures, our travel tips and our guides.
                </p>
            </div>

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
                    <div href="" class="contactOption discord">
                        <abbr title="Discord">
                            <img src="https://img.icons8.com/ios/50/ca7717/discord-logo--v1.png" />
                        </abbr>
                    </div>
                </div>
            </div>
        </div>

        <div class="footerCopyright">
            <p>
                This website is designed and developed by
                <span>Chamindu Jayanath</span> for the competition
                <span>Digitron '21</span>
            </p>
        </div>
    </footer>

    <script src="{{ asset('JS/blog.js') }}"></script>
    <script src="https://kit.fontawesome.com/775344b04d.js" crossorigin="anonymous"></script>
</body>

</html>
