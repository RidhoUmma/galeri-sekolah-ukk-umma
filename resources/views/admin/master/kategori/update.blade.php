@extends('layout.layout')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/kategori">Kategori</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Update Kategori</h4>
                            </div>
                            <hr />
                            <form id="editForm" method="POST" action="/kategori/update/{{ $kategori->id }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Nama Kategori</label>
                                        <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" placeholder="Nama Kategori" value="{{ $kategori->nama_kategori }}">
                                        @error('nama_kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image_sampul">Foto</label>
                                        <div class="col-sm-9">
                                            <img style="margin: auto;" height="100" width="100" src="/imagesSampul/{{ $kategori->image_sampul }}" alt="">
                                        </div>
                                        <input type="file" name="image_sampul" accept="image/*" class="form-control-file mt-3 @error('image_sampul') is-invalid @enderror">
                                        @error('image_sampul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="confirmEdit()" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                                    <a href="/kategori"><button type="button" class="btn btn-secondary" ><i
                                        class="fa fa-undo"></i>Tutup</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

    <!-- Tambahkan di bagian head atau sebelum penutup tag body -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmEdit() {
            Swal.fire({
                title: "Apakah Anda yakin?",
                text: "Edit Kategori",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Edit!"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika konfirmasi edit diterima, submit form
                    document.getElementById('editForm').submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: 'Dibatalkan',
                        text: 'Kategori Batal diedit',
                        icon: 'error'
                    });
                }
            });
        }
    </script>
@endsection
