<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('styleblog.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Tumpak Sewu Blog | Roadie</title>
  </head>
  <body>
  <nav>
    <a href="#" class="brand-logo">Travel</a>
    <ul class="links">
        <li class="link">
            <b><a href="#">Home</a></b>
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

    <a href="#header">
      <div class="toTop">
        <img src="https://img.icons8.com/metro/26/eb9431/left-up2.png" />
      </div>
    </a>

 <section
  class="headerContainer"
  id="header"
  style="
    background: url('{{ asset('Images/tumpak-sewu.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  "
>
  <div class="headerWrapper"></div>
  <div class="content">
    <div class="title">
      <h1>
        Top 5 Things to Do at Tumpak Sewu Waterfall, Indonesia
      </h1>
    </div>
    <div class="otherDetails">
      <p class="date">
        <span>
          <img src="https://img.icons8.com/material-rounded/24/ffffff/calendar--v1.png"/>
        </span>
        28 Aug 2025
      </p>
      <p class="readTime">
        <span>
          <img src="https://img.icons8.com/ios/50/ffffff/time--v1.png"/>
        </span>
        07 mins
      </p>
      <p class="author">
        <span>
          <img src="https://img.icons8.com/ios-glyphs/30/ffffff/book.png"/>
        </span>
        BY Travel Explorer
      </p>
    </div>
  </div>

  <a href="#para">
    <img
      src="https://img.icons8.com/external-those-icons-fill-those-icons/24/ffffff/external-down-arrows-those-icons-fill-those-icons-7.png"
      class="scrollButton"
    />
  </a>
</section>


    <div class="progress"></div>
<section class="blog">
  <div class="blogWrapper">
    <p class="para one" id="para">
      The natural wonder of East Java: <b>Tumpak Sewu Waterfall</b> is one of
      Indonesia’s most breathtaking waterfalls, often nicknamed the
      <b>"Niagara of Indonesia"</b>. With its curtain-like streams flowing
      from a height of 120 meters, surrounded by lush cliffs, this destination
      is a paradise for adventurers, photographers, and nature lovers alike.

      <br /><br />
      To reach the base of Tumpak Sewu, you’ll trek down steep paths, bamboo
      ladders, and cross small rivers — but the effort is rewarded with one of
      the most spectacular views in Southeast Asia. Whether you’re here for
      photography, hiking, or simply enjoying nature, Tumpak Sewu offers an
      unforgettable experience.
    </p>

    <div class="para two">
      <h2>1. The Majestic Curtain</h2>
      <hr />
      Tumpak Sewu is famous for its <b>curtain-like waterfall</b> with dozens
      of streams flowing side by side. The panoramic view from the top is
      already stunning, but walking down to the base will make you feel
      surrounded by nature’s masterpiece.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/tumpak-sewu.jpg') }}"
        alt="Tumpak Sewu Waterfall"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Tumpak Sewu Waterfall</h4>
        <p class="imageDescription">
          Known as the "Niagara of Indonesia", its unique curtain shape makes
          it one of the most photogenic waterfalls in the country.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>2. Trekking Adventure</h2>
      <hr />
      The journey to the bottom involves <b>steep trails and bamboo ladders</b>.
      Though challenging, it is an adventure worth taking as it leads you into
      the heart of the waterfall surrounded by mist and roaring streams.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/2.jpg') }}"
        alt="Tumpak Sewu Trekking"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Trekking Path</h4>
        <p class="imageDescription">
          A thrilling descent with ladders and rivers, perfect for adventurous travelers.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>3. Goa Tetes</h2>
      <hr />
      Near Tumpak Sewu lies <b>Goa Tetes</b>, a mystical cave with water
      dripping from its walls. It adds a spiritual and mysterious charm, making
      it a great additional stop during your journey.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/4.jpg') }}"
        alt="Goa Tetes"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Goa Tetes</h4>
        <p class="imageDescription">
          A hidden cave with unique rock formations and constant streams of
          water, often visited after exploring Tumpak Sewu.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>4. Panorama Point</h2>
      <hr />
      Before heading down, visitors can enjoy <b>Panorama Point</b> at the top,
      offering a bird’s-eye view of the entire waterfall. It’s one of the best
      spots for photography, especially during sunrise.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/6.jpg') }}"
        alt="Panorama Point Tumpak Sewu"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Panorama View</h4>
        <p class="imageDescription">
          A breathtaking view from above, where the waterfall looks like a
          natural curtain falling into a giant basin.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>5. Nature and Serenity</h2>
      <hr />
      Surrounded by <b>lush forests and volcanic cliffs</b>, Tumpak Sewu is not
      just a visual wonder but also a place of serenity. The sound of cascading
      water and fresh mountain air make it perfect for relaxation after the trek.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/8.jpg') }}"
        alt="Nature at Tumpak Sewu"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Nature and Serenity</h4>
        <p class="imageDescription">
          A peaceful escape surrounded by green cliffs, fresh air, and the
          majestic roar of the waterfall.
        </p>
      </div>
    </div>

    <div class="para two">
      <hr />
      Now that you know the highlights of <b>Tumpak Sewu Waterfall</b>, it’s
      clear why this destination is one of Indonesia’s top natural wonders.
      Whether for adventure, photography, or pure relaxation, Tumpak Sewu
      promises an unforgettable journey.
    </div>

    <div class="thanks">
      <img src="https://img.icons8.com/fluency/50/4a90e2/filled-like.png" />
      <p>Thank you for reading!</p>
    </div>
  </div>

  <div class="contentContainer">
    <p class="contentHeader">Content</p>
    <ol>
      <li><b>The Majestic Curtain</b></li>
      <li>Trekking Adventure</li>
      <li>Goa Tetes</li>
      <li>Panorama Point</li>
      <li>Nature and Serenity</li>
    </ol>
  </div>
</section>


    <a href="../blog.html" class="backButton">
      <abbr title="Back">
        <img
          class="buttonn"
          src="https://img.icons8.com/material-outlined/48/142361/back--v1.png"
        />
      </abbr>
    </a>
<script src="{{ asset('appblog.js') }}"></script>
  </body>
</html>
