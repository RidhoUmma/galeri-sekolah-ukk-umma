@extends('layout.layout')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Kategori</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center mt-3">
                                <h4 class="card-title">Data Kategori</h4>
                                <a href="/kategori/create/createKategoriSampul" class="btn btn-primary btn-round ml-auto">
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session()->has('error'))
                                <div class="alert alert-danger mt-3">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                    {{ session()->get('error') }}
                                </div>
                            @endif

                            @if (session()->has('message'))
                                <div class="alert alert-success mt-3">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Sampul</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($kategori as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $row->nama_kategori }}</td>
                                                <td><img class="img_size rounded"
                                                        src="/imagesSampul/{{ $row->image_sampul }}" style="width: 100px;">
                                                </td>
                                                <td>
                                                    <a href="{{ url('/kategori/updateKategoriSampul', $row->id) }}"
                                                        class="btn btn-x5 btn-primary mr-3">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>

                                                    <a onclick="ConfirmDelete({{ $row->id }})" class="btn btn-x5 btn-danger text-white">
                                                        <i class="fa fa-trash"></i>Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function ConfirmDelete(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Menghapus Kategori",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/kategori/destroy/' + id;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Dibatalkan',
                        text: 'Kategori Batal dihapus',
                        icon: 'error'
                    });
                }
            });
        }
    </script>

    <!-- Add to the head section or before the closing body tag -->
@endsection


