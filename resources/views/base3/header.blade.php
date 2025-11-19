<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('stylecustom.css') }}">
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon" />
    <title>Ijen Bromo | Tegar</title>
</head>

<body>
    <nav>
        <a href="#" class="brand-logo">Travel</a>
        <ul class="links">
            <li class="link">
                <b><a href="#">Home</a></b>
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


    <a href="#header">
        <div class="toTop">
            <img src="https://img.icons8.com/metro/26/eb9431/left-up2.png" />
        </div>
    </a>

    <section class="headerContainer" id="header"
        style="
    background: url('/Images/bromo3.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  ">
        <div class="headerWrapper"></div>
        <div class="content">
            <div class="title">
                <h1>Create Review Here</h1>
            </div>
            {{-- <div class="otherDetails">
                <p class="date">
                    <span><img src="https://img.icons8.com/material-rounded/24/ffffff/calendar--v1.png" /></span>
                    01 AUG 2021
                </p>
                <p class="readTime">
                    <span><img src="https://img.icons8.com/ios/50/ffffff/time--v1.png" /></span>
                    08mins
                </p>
                <p class="author">
                    <span><img src="https://img.icons8.com/ios-glyphs/30/ffffff/book.png" /></span>BY Alyse
                </p>
            </div> --}}
        </div>
        <a href="#para">
            <img src="https://img.icons8.com/external-those-icons-fill-those-icons/24/ffffff/external-down-arrows-those-icons-fill-those-icons-7.png"
                class="scrollButton" />
        </a>
    </section>


    <div class="progress"></div>
