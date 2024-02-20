@extends('layout.layout')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="/kategori">
                        <div class="card gradient-1">
                            <div class="card-body">

                                <h3 class="card-title text-white">Kategori Kegiatan</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $kategori->count() }}</h2>
                                    <p class="text-white mb-0">Kategori</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-list-alt"></i></span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="/kategori">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Foto</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">{{ $foto->count() }}</h2>
                                    <p class="text-white mb-0">Foto</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-photo"></i></span>
                            </div>
                        </div>
                    </a> 
                </div>
            </div>



        </div>
    </div>
    <!-- ... (Bagian-bagian sebelumnya) ... -->



    <!-- Tambahkan di bagian head atau sebelum penutup tag body -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
