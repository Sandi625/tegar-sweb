<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Tokyo Blog | Vamos</title>
  </head>
  <body>
  <nav>
    <a href="#" class="brand-logo">Vamos</a>
    <ul class="links">
        <li class="link"><a href="#">Home</a></li>
        <li class="link"><a href="{{ route('places.page') }}">Places</a></li>
        <li class="link">
            <b><a href="{{ route('blog.page') }}" style="color: #f2870c">Tour Package</a></b>
        </li>
        <li class="link"><a href="{{ route('gallery.page') }}">Gallery</a></li>
    </ul>
    <div class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </div>
</nav>

    @yield('content')





    <a href="{{ route('blog.page') }}" class="backButton">
      <abbr title="Back">
        <img
          class="buttonn"
          src="https://img.icons8.com/material-outlined/48/142361/back--v1.png"
        />
      </abbr>
    </a>
<script src="{{ asset('app.js') }}"></script>
  </body>
</html>
