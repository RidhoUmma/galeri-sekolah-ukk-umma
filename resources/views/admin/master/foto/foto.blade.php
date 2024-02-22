@extends('admin.admin')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Foto</a></li>
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
                                <h4 class="card-title">Data Foto</h4>
                                <a href="/foto/createFoto" class="btn btn-primary btn-round ml-auto"
                                   >
                                    <i class="fa fa-plus"></i>
                                    Tambah Data
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
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
                                            <th style="width: 250px;">Judul</th>
                                            <th>Foto</th>
                                            <th style="width: 250px;">Keterangan</th>
                                            <th>Tanggal Acara</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>  
                                        @php
                                            $no = 1;
                                        @endphp
                                       @foreach ($foto as $row)
                                       <tr>
                                           <td>{{ $no++ }}</td>
                                           <td>{{ $row->kategori->nama_kategori }}</td>
                                           <td>{{ $row->judul_foto }}</td>
                                           <td><img class="img_size rounded" src="/images/{{ $row->image }}" style="width: 100px;"></td>
                                           <td>{{ $row->keterangan }}</td>
                                           <td>{{ date('d/m/Y', strtotime($row->tgl_foto)) }}</td>

                                           <td>
                                            <div class="d-flex ">
                                                <a href="{{ url('/foto/updateFoto', $row->id) }}" class="btn btn-x5 btn-primary mr-2">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a onclick="ConfirmDelete({{ $row->id }})" class="btn btn-x5 btn-danger text-white">
                                                    <i class="fa fa-trash"></i>Hapus</a>

                                            </div>
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

  
   

    <!-- Add to the head section or before the closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function ConfirmDelete(id) {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Menghapus Foto",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/foto/destroy/' + id;
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Dibatalkan',
                        text: 'Foto Batal dihapus',
                        icon: 'error'
                    });
                }
            });
        }
    </script>

@endsection
