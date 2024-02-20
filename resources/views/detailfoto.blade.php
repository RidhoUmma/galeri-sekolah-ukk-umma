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

    {{-- <div class="about-main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content">
                        <div class="blur-bg"></div>
                        <h4>JELAJAHI FOTO</h4>
                        <div class="line-dec"></div>
                        <h2>Galeri Sekolah</h2>
                        <p>Selamat datang di Galeri Kegiatan Sekolah kami! Di sini, kami membagikan momen-momen dan
                            kegiatan luar biasa yang telah terjadi di lingkungan sekolah kami.</p>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ***** Main Banner Area End ***** -->

    <div class="visit-country">
        <div class="cities-town mb-4">
            <div class="container">
                <div class="row">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="item card p-3 rounded-5">
                                    <div class="row">
                                        <div class="col-lg-5 col-sm-5">
                                            <div class="image">
                                                <img src="{{ asset('images/' . $foto->image) }}" alt="{{ $foto->caption }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-sm-7">
                                            <div class="right-content">
                                                <div class="d-flex justify-content-between mt-3 mt-sm-3">
                                                    <h4>{{ $foto->judul_foto }}</h4>
                                                </div>
                                                <ul class="info">
                                                    <li class="text-start">
                                                        <i class="fa fa-calendar"></i> {{ date('d/m/Y', strtotime($foto->tgl_foto)) }}
                                                    </li>
                                                </ul>
                                                {{-- Description --}}
                                                <div class="overflow mt-3" style="font-size: 15px; line-height: 30px; color: #afafaf">
                                                    {{ $foto->keterangan }}
                                                </div>
                                                {{-- Date --}}
                                               
                                                {{-- Add more details here if needed --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
          <br>Design: <a href="https://templatemo.com" target="_blank" title="free CSS templates">TemplateMo</a></p> --}}
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
