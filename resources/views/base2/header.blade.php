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
        <li class="link"><b><a href="#">Home</a></b></li>
        {{-- <li class="link"><a href="{{ route('places.page') }}">Places</a></li> --}}
        <li class="link"><a href="{{ route('allpackage.page') }}">Tour Package</a></li>
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
            {{-- Tanggal dibuat --}}
            <p class="date">
                <span>
                    <img src="https://img.icons8.com/material-rounded/24/ffffff/calendar--v1.png"/>
                </span>
                {{ $blog->created_at->format('d M Y') }}
            </p>

            {{-- Estimasi waktu baca --}}
            <p class="readTime">
                <span>
                    <img src="https://img.icons8.com/ios/50/ffffff/time--v1.png"/>
                </span>
                {{-- Bisa hitung berdasarkan jumlah kata / rata-rata 200 kata per menit --}}
                {{ ceil(str_word_count(strip_tags($blog->description)) / 200) }} mins
            </p>

            {{-- Author --}}
            <p class="author">
                <span>
                    <img src="https://img.icons8.com/ios-glyphs/30/ffffff/book.png"/>
                </span>
                BY {{ $blog->author ?? 'Admin' }}
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
