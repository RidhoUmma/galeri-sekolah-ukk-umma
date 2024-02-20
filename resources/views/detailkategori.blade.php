<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Galeri Sekolah</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/assets/theme/images/logosekolah.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="/assets1/theme/css/style.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/assets1/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets1/assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="/assets1/assets/css/owl.css">
    <link rel="stylesheet" href="/assets1/assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 580 Woox Travel


-->
    <style>
        ::-webkit-scrollbar {
            width: 0px;
        }

        .overflow {
            color: white;
            padding: 15px;
            height: 190px;
            overflow: scroll;
        }
    </style>
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('index') }}" class="logo">
                            <img src="/assets/assets/theme/images/logobru8.png" alt="" style="width: 180px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{ route('index') }}" class="active">Beranda</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            {{-- <li><a href="{{route('register')}}">Register</a></li> --}}
                            {{-- <li><a href="reservation.html">Reservation</a></li>
                        <li><a href="reservation.html">Book Yours</a></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    {{-- <section id="section-1">
        <div class="content-slider">
            @foreach ($foto as $fotoindex)
                <input type="radio" id="banner{{ $loop->iteration }}" class="sec-1-input" name="banner"
                    {{ $loop->first ? 'checked' : '' }}>
            @endforeach

            <div class="slider">
                @foreach ($foto as $fotoindex)
                    <div id="top-banner-{{ $loop->iteration }}" class="banner">
                        <img src="{{ asset('images/' . $fotoindex->image) }}" alt="{{ $fotoindex->caption }}"
                            style="background-size: cover">
                        <div class="banner-inner-wrapper header-text">
                            <div class="main-caption">
                                <h2>Galeri Sekolah</h2>
                                <h1>{{ $fotoindex->country }}</h1>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <div class="about-main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg"></div>
                        <h4>Kategori Kegiatan</h4>
                        <div class="line-dec"></div>
                        <h2>{{ $kategori->nama_kategori }}</h2>
                        <h4 class="text-center m-0 mt-3">Galeri Sekolah</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-4">
        <div class="row">
            @foreach ($foto as $fotoindex)
                <div class="col-lg-4 mb-4">
                    <div class="item card p-3 rounded-5">
                        <div class="image">
                            <img src="{{ asset('images/' . $fotoindex->image) }}" alt="{{ $fotoindex->judul_foto }}">
                        </div>
                        <div class="right-content">
                            <h4>{{ $fotoindex->judul_foto }}</h4>
                            <p>{{ $fotoindex->keterangan }}</p>
                            <p><i class="fa fa-calendar"></i> {{ date('d/m/Y', strtotime($fotoindex->tgl_foto)) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
    <!-- ***** Main Banner Area End ***** -->

    <div class="visit-country">
        <div class="container ">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <!-- Left Column -->
                    <div class="items">
                        <div class="row">
                            @foreach ($foto as $fotoindex)
                                <div class="col-lg-6" style="max-width: 560px;">
                                    <div class="item card p-3 rounded-5">
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5">
                                                <div class="image">
                                                    <img src="{{ asset('images/' . $fotoindex->image) }}"
                                                        alt="{{ $fotoindex->caption }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-sm-7">
                                                <div class="right-content">
                                                    <div class="d-flex justify-content-between mt-3 mt-sm-3">
                                                        <h4>{{ $fotoindex->judul_foto }}</h4>
                                                       <a href="{{ route('detailfoto', ['id' => $fotoindex->id]) }}"
                                                                class="text-white"> <button
                                                                    class="btn btn-white rounded-5 text-white"
                                                                    style="background: #22b3c1; min-width: 120px; padding: 5px 10px;">
                                                                    <i class="fas fa-eye mr-1"></i>
                                                                    <!-- Tambahkan class 'mr-1' untuk memberi jarak kanan -->
                                                                    Detail
                                                                </button> 
                                                            </a>



                                                    </div>
                                                    {{-- <span>{{ $fotoindex->location }}</span> --}}
                                                    {{-- <div class="main-button">
                                                        <a href="{{ $fotoindex->link }}">Explore More</a>
                                                    </div> --}}

                                                    <div class="overflow mt-3"
                                                        style="font-size: 15px; line-height: 30px; color: #afafaf">
                                                        {{ $fotoindex->keterangan }}
                                                    </div>
                                                    {{-- <p class="mt-3">{{ $fotoindex->keterangan }}</p> --}}
                                                    <ul class="info">

                                                        <li><i class="fa fa-calendar"></i>
                                                            {{ date('d/m/Y', strtotime($fotoindex->tgl_foto)) }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img src="/assets/assets/theme/images/logobru8.png" alt="" style="width: 80%;">
                    <hr />
                    {{-- <h2>Are You Looking To Travel ?</h2>
                    <h4>Make A Reservation By Clicking The Button</h4> --}}
                </div>

            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <p>Copyright © 2024 <a href="#">Ridhotul Umma</a>
                        <br>Design: <a href="https://templatemo.com" target="_blank"
                            title="free CSS templates">TemplateMo</a>
                    </p> --}}
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="/assets1/vendor/jquery/jquery.min.js"></script>
    <script src="/assets1/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="/assets1/assets/js/isotope.min.js"></script>
    <script src="/assets1/assets/js/owl-carousel.js"></script>
    <script src="/assets1/assets/js/wow.js"></script>
    <script src="/assets1/assets/js/tabs.js"></script>
    <script src="/assets1/assets/js/popup.js"></script>
    <script src="/assets1/assets/js/custom.js"></script>

    <script>
        function bannerSwitcher() {
            next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
            if (next.length) next.prop('checked', true);
            else $('.sec-1-input').first().prop('checked', true);
        }

        var bannerTimer = setInterval(bannerSwitcher, 5000);

        $('nav .controls label').click(function() {
            clearInterval(bannerTimer);
            bannerTimer = setInterval(bannerSwitcher, 5000)
        });
    </script>

</body>

</html>
