<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,height=device-height,  initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/galerry.css') }}">
    <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js"></script>
    <title>Gallery | Tegar</title>
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
        <a href="#" class="brand-logo">Travel</a>
        <ul class="links">
            <li class="link">
                <b><a href="#">Home</a></b>
            </li>
            {{-- <li class="link"><a href="{{ route('places.page') }}">Places</a></li> --}}
            <li class="link"><a href="{{ route('allpackage.page') }}">Tour Package</a></li>
            <li class="link"><a href="{{ route('blog.page') }}">Blog</a></li> <!-- Tambahan -->
            <li class="link"><a href="{{ route('gallery.page') }}"style="color: #f2870c">Gallery</a></li>
        </ul>

        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <section class="header">
        <div class="header-content">
            <h1>Enjoy the <span class="textHighlight">breath-taking sceneries</span> we captured around the world</h1>
            <p>Travel photography blogs and vlogs are great sources of inspiration, both for travelling around the world
                and the photography that comes with it. They can provide useful tips and destination ideas as well.

            </p>
        </div>
        <a href="#gallery" class="scrollContainer"><button class="scrollButton"><img
                    src="https://img.icons8.com/material-sharp/24/e48111/camera--v2.png" />
                <p>View Photos</p>
            </button></a>

        {{-- <div class="custom-shape-divider-bottom-1631284277">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div> --}}
    </section>


    <div id="gallery" class="container-fluid">
        <div class="image">
            <img src="{{ asset('Images/bromo3.jpg') }}" class="img-responsive">
            <div class="details">
                Mount Bromo
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/47.jpg') }}" class="img-responsive">
            <div class="details">
                Djawatan Forest
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/1.jpg') }}" class="img-responsive">
            <div class="details">
                Ijen Sunrise View
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/8.jpg') }}" class="img-responsive">
            <div class="details">
                Tumpak sewu
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/7.jpg') }}" class="img-responsive">
            <div class="details">
                Mount Bromo
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/11.jpg') }}" class="img-responsive">
            <div class="details">
                horse riding in Bromo

            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/51.jpg') }}" class="img-responsive">
            <div class="details">
                Red Island
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/44.jpg') }}" class="img-responsive">
            <div class="details">
            The Baluran savanna
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/5.jpg') }}" class="img-responsive">
            <div class="details">
                Tumpak Sewu Waterfall
            </div>
        </div>

        {{-- <div class="image">
            <img src="{{ asset('Images/ijen1.jpg') }}" class="img-responsive">
            <div class="details">
                Sydney Opera House
            </div>
        </div> --}}

        <div class="image">
            <img src="{{ asset('Images/bali2.jpg') }}"
                class="img-responsive">
            <div class="details">
               Bali
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/tumpak-sewu.jpg') }}"
                class="img-responsive">
            <div class="details">
               Tumpak Sewu
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/bluefire1.jpg') }}"
                class="img-responsive">
            <div class="details">
                Blue fire Ijen
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/6.jpg') }}"
                class="img-responsive">
            <div class="details">
                Tumpak sewu
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/bromo1.jpg') }}"
                class="img-responsive">
            <div class="details">
                Mount Bromo Sunrise View
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/12.jpg') }}"
                class="img-responsive">
            <div class="details">
              Ijen
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/1ijen.jpg') }}"
                class="img-responsive">
            <div class="details">
              Ijen
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/1qq.jpg') }}"
                class="img-responsive">
            <div class="details">
                Ijen
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('Images/ijen1.jpg') }}"
                class="img-responsive">
            <div class="details">
               Ijen
            </div>
        </div>

        <div class="custom-shape-divider-bottom-1631607238">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <div class="modal">
        <img src="https://img.icons8.com/ios-filled/50/e48111/close-window.png" class="close" />
    </div>
    <div class="content">

    </div>
    </div>
    </div>

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

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

    <script src="{{ asset('JS/gallery.js') }}"></script>
</body>

</html>
