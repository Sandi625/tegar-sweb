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
      <a href="#" class="brand-logo">Travel</a>
      <ul class="links">
            <li class="link">
                <b><a href="{{ route('home') }}">Home</a></b>
            </li>
            <li class="link"><a href="{{ route('allpackage.page') }}">Tour</a></li>
            <li class="link"><a href="{{ route('user.blog.index') }}" style="color:#f2870c;">Blog</a></li>
            <li class="link"><a href="{{ route('user.gallery.images') }}">Gallery</a></li>
            <li class="link"><a href="{{ route('login') }}">Login</a></li>
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
          background: url('{{ $blog->image ? asset('uploads/blogs/' . $blog->image) : asset('Images/default.jpg') }}');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          background-attachment: fixed;
      "
    >
      <div class="headerWrapper"></div>

      <div class="content">
        <div class="title">
            <h1>{{ $blog->title }}</h1>
        </div>

        <div class="otherDetails">

            {{-- 🔥 Tanggal dibuat (TANPA menit/jam) --}}
            <p class="date">
                <span>{{ $blog->created_at->format('d M Y') }}</span>
            </p>

            {{-- Penulis --}}
            <p class="author">
                <span>By {{ $blog->author ?? 'Admin' }}</span>
            </p>
        </div>

      </div>
    </section>

  </body>
</html>
