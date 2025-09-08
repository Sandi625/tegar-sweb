<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./Images/favicon.png" type="image/x-icon" />
    <title>Blog | Tegar</title>
    <link rel="stylesheet" href="{{ asset('css/blog2.css') }}">
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
        <li class="link"><a href="{{ route('allpackage.page') }}">Tour Package</a></li>
        <li class="link"><a href="{{ route('blog.page') }}" style="color: #f2870c">Blog</a></li> <!-- Tambahan -->
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
      <a href="#blog" class="scrollContainer"
        ><button class="scrollButton">
          <img src="https://img.icons8.com/ios-filled/50/e48111/book.png" />
          <p>Read</p>
        </button></a
      >
      <div class="custom-shape-divider-bottom-1631284471">
        <svg
          data-name="Layer 1"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 1200 120"
          preserveAspectRatio="none"
        >
          <path
            d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
            class="shape-fill"
          ></path>
        </svg>
      </div>
    </section>

<section class="blogs">
  <div class="blogsContainer">
    <!-- Blog 1: Ijen -->
    <div class="blog" id="blog">
      <img
        src="{{ asset('Images/1ijen.jpg') }}"
        alt="Gunung Ijen"
        class="image"
      />
      <div class="content">
        <div class="details">
          <h2>Menjelajah Keindahan Kawah Ijen dan Blue Fire</h2>
          <p>
            Kawah Ijen terkenal dengan fenomena api biru yang hanya ada di
            beberapa tempat di dunia. Dari pemandangan kawah hijau toska
            hingga perjalanan mendaki yang penuh petualangan, Ijen adalah
            destinasi wajib bagi pecinta alam dan fotografi.
          </p>
        </div>
        <div class="buttons">
          <a href="{{ route('ijen.page') }}">
            <button class="viewButton">Read</button>
          </a>
          <p class="date">12 Jan 2022</p>
        </div>
      </div>
    </div>

    <!-- Blog 2: Bromo -->
    <div class="blog">
      <img
        src="{{ asset('Images/bromo3.jpg') }}"
        alt="Gunung Bromo"
        class="image"
      />
      <div class="content">
        <div class="details">
          <h2>Pesona Gunung Bromo dan Lautan Pasir</h2>
          <p>
            Gunung Bromo menawarkan pemandangan matahari terbit yang
            menakjubkan dari Penanjakan. Lautan pasir yang luas dan kawah
            yang masih aktif membuat pengalaman wisata di Bromo terasa
            magis dan tak terlupakan.
          </p>
        </div>
        <div class="buttons">
          <a href="{{ route('bromo.page') }}">
            <button class="viewButton">Read</button>
          </a>
          <p class="date">20 Feb 2022</p>
        </div>
      </div>
    </div>

    <!-- Blog 3: Tumpak Sewu -->
    <div class="blog">
      <img
        src="{{ asset('Images/tumpak-sewu.jpg') }}"
        alt="Tumpak Sewu"
        class="image"
      />
      <div class="content">
        <div class="details">
          <h2>Air Terjun Tumpak Sewu – Niagara dari Jawa</h2>
          <p>
            Tumpak Sewu dikenal sebagai air terjun terindah di Jawa
            Timur. Bentuknya yang melebar dengan aliran air seperti tirai
            menjadikannya dijuluki Niagara dari Indonesia.
          </p>
        </div>
        <div class="buttons">
          <a href="{{ route('tumpaksewu.page') }}">
            <button class="viewButton">Read</button>
          </a>
          <p class="date">15 Mar 2022</p>
        </div>
      </div>
    </div>

    <!-- Blog 4: Bali -->
    <div class="blog">
      <img
        src="{{ asset('Images/bali2.jpg') }}"
        alt="Bali"
        class="image"
      />
      <div class="content">
        <div class="details">
          <h2>Menyusuri Keindahan Pulau Bali</h2>
          <p>
            Bali dikenal dengan pantai-pantainya yang indah, budaya yang
            unik, pura yang megah, hingga sawah berundak yang
            menakjubkan. Pulau Dewata selalu menjadi destinasi favorit
            wisatawan dunia.
          </p>
        </div>
        <div class="buttons">
          <a href="{{ route('bali.page') }}">
            <button class="viewButton">Read</button>
          </a>
          <p class="date">25 Apr 2022</p>
        </div>
      </div>
    </div>
  </div>

  <!-- SVG Shape bawah -->
  <div class="custom-shape-divider-bottom-1631607238">
    <svg
      data-name="Layer 1"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 1200 120"
      preserveAspectRatio="none"
    >
      <path
        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
        class="shape-fill"
      ></path>
    </svg>
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

    <script src="{{ asset('JS/blog2.js') }}"></script>
    <script
      src="https://kit.fontawesome.com/775344b04d.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
