<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('styleblog.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Bromo Blog | Tegar</title>
  </head>
  <body>
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

    <a href="#header">
      <div class="toTop">
        <img src="https://img.icons8.com/metro/26/eb9431/left-up2.png" />
      </div>
    </a>

<section
  class="headerContainer"
  id="header"
  style="
    background: url('{{ asset('Images/bromo3.jpg') }}');
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
        Top 5 Things to Do at Mount Bromo, Indonesia
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
      The majestic wonder of East Java: Mount Bromo is one of Indonesia’s most
      iconic volcanoes, located in the Bromo Tengger Semeru National Park.
      Famous for its <b>stunning sunrise views</b>, vast sea of sand, and
      mystical atmosphere, Bromo is a top destination for both local and
      international travelers.

      <br /><br />
      Visiting Bromo usually starts in the early morning to catch the magical
      sunrise from viewpoints like Penanjakan Hill. The journey includes
      off-road jeep rides, walking through the sea of sand, and climbing the
      stairs up to Bromo’s crater. Adventure, culture, and nature all blend
      beautifully at this destination.
    </p>

    <div class="para two">
      <h2>1. Sunrise at Penanjakan Hill</h2>
      <hr />
      The <b>sunrise at Bromo</b> is one of the most famous in the world.
      Watching the first light appear behind Mount Semeru while Bromo’s crater
      smokes in the distance is a magical experience you’ll never forget.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/bromo3.jpg') }}"
        alt="Sunrise at Mount Bromo"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Sunrise at Bromo</h4>
        <p class="imageDescription">
          A breathtaking sunrise view over the Bromo Tengger Semeru National
          Park, one of Indonesia’s most iconic sceneries.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>2. The Sea of Sand</h2>
      <hr />
      Surrounding Bromo is a vast <b>sea of volcanic sand</b>, giving the
      landscape a surreal, otherworldly feeling. Tourists usually cross this
      area on foot, by horse, or by jeep before reaching the crater.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/9.jpg') }}"
        alt="Sea of Sand Bromo"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">The Sea of Sand</h4>
        <p class="imageDescription">
          A wide desert-like area of volcanic ash at the foot of Mount Bromo,
          often crossed before climbing the crater.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>3. Climbing the Bromo Crater</h2>
      <hr />
      After crossing the sea of sand, visitors climb a staircase of more than
      200 steps to reach the edge of the <b>Bromo crater</b>. From the top,
      you’ll see smoke rising from the active volcano – a thrilling sight.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/9.jpg') }}"
        alt="Bromo Crater"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Bromo Crater</h4>
        <p class="imageDescription">
          The smoky crater of Mount Bromo, reached after climbing steep stairs
          across the sea of sand.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>4. The Whispering Sands</h2>
      <hr />
      Known locally as <b>"Pasir Berbisik"</b>, this part of Bromo’s desert
      produces a whispering sound when the wind blows, creating a mysterious and
      calming atmosphere. It’s also a popular spot for photography.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/9.jpg') }}"
        alt="Whispering Sands Bromo"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">The Whispering Sands</h4>
        <p class="imageDescription">
          A vast sandy area where the wind creates a whispering sound, adding to
          Bromo’s mystical charm.
        </p>
      </div>
    </div>

    <div class="para two">
      <h2>5. Savanna & Teletubbies Hill</h2>
      <hr />
      Beyond the volcanic landscape lies a lush green savanna known as
      <b>Teletubbies Hill</b>. Its rolling hills and grasslands offer a complete
      contrast to the barren sea of sand.
    </div>

    <div class="imageContainer">
      <img
        src="{{ asset('Images/9.jpg') }}"
        alt="Teletubbies Hill Bromo"
      />
      <div class="imgDescription">
        <h4 class="imageTitle">Teletubbies Hill</h4>
        <p class="imageDescription">
          A green savanna area near Mount Bromo, resembling the hills from the
          famous Teletubbies TV show.
        </p>
      </div>
    </div>

    <div class="para two">
      <hr />
      Now that you know the highlights of Mount Bromo, it’s easy to see why this
      destination is one of Indonesia’s most iconic natural wonders. Whether
      you’re here for the sunrise, the sea of sand, or the mystical atmosphere,
      Bromo guarantees an unforgettable journey.
    </div>

    <div class="thanks">
      <img src="https://img.icons8.com/fluency/50/4a90e2/filled-like.png" />
      <p>Thank you for reading!</p>
    </div>
  </div>

  <div class="contentContainer">
    <p class="contentHeader">Content</p>
    <ol>
      <li><b>Sunrise at Penanjakan Hill</b></li>
      <li>The Sea of Sand</li>
      <li>Climbing the Bromo Crater</li>
      <li>The Whispering Sands</li>
      <li>Savanna & Teletubbies Hill</li>
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
