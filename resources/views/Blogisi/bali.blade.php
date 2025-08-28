<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('styleblog.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Bali Blog | Tegar</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav>
      <a href="{{ route('home.page') }}" class="brand-logo">Travel</a>
      <ul class="links">
        <li class="link"><b><a href="{{ route('home.page') }}">Home</a></b></li>
        {{-- <li class="link"><a href="{{ route('places.page') }}">Places</a></li> --}}
        <li class="link"><a href="{{ route('blog.page') }}">Tour Package</a></li>
        <li class="link"><a href="{{ route('blog.page') }}" style="color: #f2870c">Blog</a></li>
        <li class="link"><a href="{{ route('gallery.page') }}">Gallery</a></li>
      </ul>

      <div class="hamburger">
        <div></div><div></div><div></div>
      </div>
    </nav>

    <!-- Scroll to Top -->
    <a href="#header">
      <div class="toTop">
        <img src="https://img.icons8.com/metro/26/eb9431/left-up2.png" />
      </div>
    </a>

    <!-- Header Section -->
    <section
      class="headerContainer"
      id="header"
      style="
        background: url(https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
      "
    >
      <div class="headerWrapper"></div>
      <div class="content">
        <div class="title">
          <h1>Top 5 Things to Do in Bali, Indonesia</h1>
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

    <!-- Blog Content -->
    <section class="blog">
      <div class="blogWrapper">
        <p class="para one" id="para">
          Bali, also known as the <b>Island of Gods</b>, is the most popular tourist destination in Indonesia.
          With its pristine beaches, rich culture, lush rice terraces, sacred temples, and vibrant nightlife, Bali has something for everyone.
          Whether you’re seeking adventure, spirituality, or relaxation, Bali never fails to amaze.
        </p>

        <div class="para two">
          <h2>1. Explore Uluwatu Temple & Kecak Dance</h2>
          <hr />
          Perched on a cliff overlooking the ocean, <b>Uluwatu Temple</b> is one of Bali’s most iconic spots.
          As the sun sets, enjoy the famous <b>Kecak Fire Dance</b>, a traditional performance that tells epic Hindu stories.
        </div>

        <div class="imageContainer">
          <img
            src="https://images.unsplash.com/photo-1558244388-90f9c2f8ec8d?auto=format&fit=crop&w=1200&q=80"
            alt="Uluwatu Temple"
          />
          <div class="imgDescription">
            <h4 class="imageTitle">Uluwatu Temple</h4>
            <p class="imageDescription">A sacred sea temple on a cliff, offering stunning sunset views and traditional Balinese performances.</p>
          </div>
        </div>

        <div class="para two">
          <h2>2. Relax at Bali’s Beaches</h2>
          <hr />
          Bali is home to world-famous beaches like <b>Kuta, Seminyak, Nusa Dua, and Jimbaran</b>.
          From surfing to sunbathing, or enjoying fresh seafood dinners by the beach, Bali’s coastline is paradise for beach lovers.
        </div>

        <div class="imageContainer">
          <img
            src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80"
            alt="Bali Beach"
          />
          <div class="imgDescription">
            <h4 class="imageTitle">Bali Beaches</h4>
            <p class="imageDescription">Golden sands, crystal-clear waters, and world-class surf make Bali a top beach destination.</p>
          </div>
        </div>

        <div class="para two">
          <h2>3. Discover Ubud & Rice Terraces</h2>
          <hr />
          Known as the cultural heart of Bali, <b>Ubud</b> offers lush rice terraces like <b>Tegalalang</b>,
          yoga retreats, art galleries, and traditional markets. Perfect for those seeking peace and creativity.
        </div>

        <div class="imageContainer">
          <img
            src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?auto=format&fit=crop&w=1200&q=80"
            alt="Ubud Rice Terrace"
          />
          <div class="imgDescription">
            <h4 class="imageTitle">Ubud Rice Terraces</h4>
            <p class="imageDescription">Lush green landscapes and iconic rice paddies make Ubud a must-visit cultural hub.</p>
          </div>
        </div>

        <div class="para two">
          <h2>4. Adventure at Mount Batur</h2>
          <hr />
          For adventure seekers, trekking <b>Mount Batur</b> at sunrise is an unforgettable experience.
          Watch the sun rise over the volcanic landscape and enjoy panoramic views of Lake Batur.
        </div>

        <div class="imageContainer">
          <img
            src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=80"
            alt="Mount Batur Sunrise"
          />
          <div class="imgDescription">
            <h4 class="imageTitle">Mount Batur</h4>
            <p class="imageDescription">A sunrise trek to Mount Batur rewards you with breathtaking volcanic and lake views.</p>
          </div>
        </div>

        <div class="para two">
          <h2>5. Experience Bali’s Culture</h2>
          <hr />
          From <b>Balinese temples</b> like Tanah Lot, to local ceremonies, dances, and festivals,
          Bali offers a deep dive into its rich culture and traditions that captivate visitors from around the world.
        </div>

        <div class="imageContainer">
          <img
            src="https://images.unsplash.com/photo-1548013146-72479768bada?auto=format&fit=crop&w=1200&q=80"
            alt="Balinese Culture"
          />
          <div class="imgDescription">
            <h4 class="imageTitle">Balinese Culture</h4>
            <p class="imageDescription">Experience Bali’s spirituality and traditions through temples, dances, and rituals.</p>
          </div>
        </div>

        <div class="para two">
          <hr />
          Bali is more than just a destination – it’s an <b>experience of a lifetime</b>.
          From its temples and beaches to its traditions and natural beauty, Bali truly earns its name as the “Island of Gods.”
        </div>

        <div class="thanks">
          <img src="https://img.icons8.com/fluency/50/4a90e2/filled-like.png" />
          <p>Thank you for reading!</p>
        </div>
      </div>

      <!-- Sidebar Content -->
      <div class="contentContainer">
        <p class="contentHeader">Content</p>
        <ol>
          <li><b>Uluwatu Temple & Kecak Dance</b></li>
          <li>Bali’s Beaches</li>
          <li>Ubud & Rice Terraces</li>
          <li>Mount Batur</li>
          <li>Balinese Culture</li>
        </ol>
      </div>
    </section>

    <!-- Back Button -->
    <a href="{{ route('blog.page') }}" class="backButton">
      <abbr title="Back">
        <img class="buttonn" src="https://img.icons8.com/material-outlined/48/142361/back--v1.png" />
      </abbr>
    </a>

    <script src="{{ asset('appblog.js') }}"></script>
  </body>
</html>

