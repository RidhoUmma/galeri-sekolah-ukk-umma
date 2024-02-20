<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Galery Sekolah</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/assets/theme/images/logosekolah.png">
    <!-- Custom Stylesheet -->
    <link href="/assets/assets/theme/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/assets/assets/theme/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                    stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="d-flex align-items-center mt-3 ml-3">
                <a href="{{ route('index') }}">
                    {{-- <b class="logo-abbr"><img src="/assets/assets/theme/images/logobru.png" alt=""> </b>
                    <span class="logo-compact"><img src="/assets/assets/theme/images/logobru.png" alt=""></span> --}}
                    <span class="brand-title">
                        <img src="/assets/assets/theme/images/logobru8.png" alt="" style="width: 190px;">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            {{-- <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span> --}}
                        </div>
                        {{-- <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div> --}}
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">

                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                @if (auth()->user()->role === 'admin')
                                    <span style="margin-right: 10px;">Admin</span>
                                @elseif(auth()->user()->role === 'user')
                                    <span style="margin-right: 10px;">User</span>
                                @else
                                    <!-- Handle other roles if needed -->
                                @endif
                                <span class="activity active"></span>
                                <img src="/assets/assets/theme/images/user/9.jpg" height="40" width="40" alt="">
                            </div>
                            

                            
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="/profile"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        {{-- <li>
                                            <a href="email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li> --}}

                                        <hr class="my-2">
                                        {{-- <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="icon-key"></i> <span>Logout</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="GET"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Galeri Sekolah</li>
                    <li>
                        <a href="/admin" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    {{-- <li class="nav-label">UI Components</li> --}}
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                          <i class="fa fa-folder-open-o" aria-hidden="true"></i><span class="nav-text">Galeri Foto</span>
                        </a>
                        <ul aria-expanded="false">
                            {{-- <li><a href="/user">Data User</a></li> --}}
                            <li><a href="/kategori"><i class="fa fa-list-alt"></i>Kategori Kegiatan</a></li>
                            <li><a href="/foto"><i class="fa fa-file-image-o" aria-hidden="true"></i>Foto</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        {{-- <div class="content-body">
        </div>
        --}}
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
           
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/assets/assets/theme/plugins/common/common.min.js"></script>
    <script src="/assets/assets/theme/js/custom.min.js"></script>
    <script src="/assets/assets/theme/js/settings.js"></script>
    <script src="/assets/assets/theme/js/gleek.js"></script>
    <script src="/assets/assets/theme/js/styleSwitcher.js"></script>

    <script src="/assets/assets/theme/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="/assets/assets/theme/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/assets/theme/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>
