@extends('layout.dashboard')
@section('title', 'Dashboard')

@include('dashboard._js.index')

@push('vendor-style')
    <link rel="stylesheet" href="{{ url('assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendor/libs/swiper/swiper.css') }}" />
@endpush

@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">

            <!-- Website Analytics -->
            <div class="col-12 mb-4">
                <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg"
                    id="swiper-with-pagination-cards">
                    <div class="swiper-wrapper">

                        <!-- Slide 1: Overview -->
                        <div class="swiper-slide">
                            <div class="row pt-3">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2 uppercase text-wrap">Vamos Adventure</h5>
                                    <small>Explore the Beauty of Indonesia</small>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                        <h6 class="text-white mt-0 mt-md-3 mb-3">Overview</h6>
                                        <p class="text-white text-wrap">
                                            Vamos Adventure adalah platform perjalanan yang menyediakan berbagai pengalaman
                                            wisata terbaik,
                                            mulai dari petualangan gunung, pantai, hingga wisata budaya — dirancang untuk
                                            memberikan
                                            perjalanan yang aman, nyaman, dan berkesan.
                                        </p>
                                    </div>
                                    <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                        <img src="{{ url('assets/img/illustrations/card-website-analytics-1.png') }}"
                                            alt="Website Analytics" width="170"
                                            class="card-website-analytics-img mt-2" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2: Features -->
                        <div class="swiper-slide">
                            <div class="row pt-3">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2 uppercase text-wrap">Vamos Adventure</h5>
                                    <small>Why Choose Us</small>
                                </div>
                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Fitur Utama</h6>
                                    <div class="row">
                                        <div class="col-12 col-md-6 mb-4">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center text-wrap">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Adventure Trip
                                                    </p>
                                                    <p class="mb-0">Open Trip & Private Trip</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2 text-wrap">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Professional
                                                        Guide</p>
                                                    <p class="mb-0">Local Expert & Berpengalaman</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex mb-4 align-items-center text-wrap">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Flexible
                                                        Package</p>
                                                    <p class="mb-0">Customize Your Trip</p>
                                                </li>
                                                <li class="d-flex align-items-center mb-2 text-wrap">
                                                    <p class="mb-0 fw-medium me-2 website-analytics-text-bg">Online Booking
                                                    </p>
                                                    <p class="mb-0">Mudah & Cepat</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                    <img src="{{ url('assets/img/illustrations/card-website-analytics-2.png') }}"
                                        alt="Website Analytics" width="170" class="card-website-analytics-img mt-2" />
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3: Impact and Benefits -->
                        <div class="swiper-slide">
                            <div class="row pt-3">
                                <div class="col-12">
                                    <h5 class="text-white mb-0 mt-2 uppercase text-wrap">Vamos Adventure</h5>
                                    <small>Your Trusted Travel Partner</small>
                                </div>
                                <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1">
                                    <h6 class="text-white mt-0 mt-md-3 mb-3">Dampak & Manfaat</h6>
                                    <p class="text-white text-wrap">
                                        Dengan berbagai pilihan paket wisata, Vamos Adventure memberikan pengalaman liburan
                                        yang lebih
                                        aman, terstruktur, dan tak terlupakan — mulai dari sunrise trips hingga hiking ke
                                        lokasi eksotis.
                                    </p>
                                    <p class="text-white text-wrap">
                                        Kami membantu wisatawan menjelajahi Indonesia dengan lebih mudah, nyaman, dan penuh
                                        kesan.
                                    </p>
                                </div>
                                <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                                    <img src="{{ url('assets/img/illustrations/card-website-analytics-3.png') }}"
                                        alt="Website Analytics" width="170" class="card-website-analytics-img mt-2" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Total Kategori Tour -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Data</h5>
                            <small class="text-muted">Total Kategori Tour</small>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="fw-bold">{{ $categoryCount ?? 0 }}</h1>
                    </div>
                </div>
            </div>

            <!-- Total Tour -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Data</h5>
                            <small class="text-muted">Total Tour</small>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="fw-bold">{{ $tourCount ?? 0 }}</h1>
                    </div>
                </div>
            </div>

            <!-- Total Blog -->
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Data</h5>
                            <small class="text-muted">Total Blog</small>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="fw-bold">{{ $blogCount ?? 0 }}</h1>
                    </div>
                </div>
            </div>

            <!-- Total Review -->
            <div class="col-md-12 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="card-title mb-0">
                            <h5 class="mb-0">Data</h5>
                            <small class="text-muted">Total Review Masuk</small>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="fw-bold">{{ $reviewCount ?? 0 }}</h1>
                    </div>
                </div>
            </div>



            <!--/ Support Tracker -->

            {{-- REPORT --}}
            <div class="col-md-12 mb-4 order-1 order-lg-2 mb-4 mb-lg-0">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="mb-0">Data</h5>
                                <small class="text-muted">List Pegawai Terbaik Tahun Ini Per Periode</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>Periode</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data dari AJAX akan dimasukkan di sini -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- / Content -->
@endsection
