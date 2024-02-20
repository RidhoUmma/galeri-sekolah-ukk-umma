@extends('admin.admin')
@section('content')
    <div class="content-body">
        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/foto">Foto</a></li>
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
                                <h4 class="card-title">Update Foto</h4>
                            </div>
                            <hr />
                            <form id="editForm" method="POST" action="/foto/update/{{ $foto->id }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="id_kategori">Nama Kategori</label>
                                        <select class="form-control" name="id_kategori" required="">
                                            <option value="{{ $foto->id_kategori }}" class="text-dark;" selected="">
                                                {{ $foto->kategori->nama_kategori }}
                                            </option>
                                            @foreach ($kategori as $kat)
                                                <option value="{{ $kat->id }}" class="text-dark;">
                                                    {{ $kat->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="judul_foto">Judul</label>
                                        <input type="text" class="form-control" name="judul_foto" id="judul_foto" placeholder="Judul Foto" value="{{ $foto->judul_foto }}">
                                        @error('judul_foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="image">Foto</label>
                                        <div class="col-sm-9">
                                            <img style="margin: auto;" height="100" width="100" src="/images/{{ $foto->image }}" alt="">
                                        </div>
                                        
                                        <input type="file" name="image" accept="image/*" class="form-control-file mt-3 @error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="keterangan">{{ $foto->keterangan }}</textarea>
                                        @error('keterangan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_foto">Tanggal Acara</label>
                                        <input type="date" class="form-control" name="tgl_foto" id="tgl_foto" placeholder="Tanggal Acara" value="{{ $foto->tgl_foto }}">
                                        @error('tgl_foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="confirmEdit()" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                                    <a href="/foto"><button type="button" class="btn btn-secondary" ><i
                                        class="fa fa-undo"></i>Tutup</button></a>                                </div>
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
                text: "Edit Foto",
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
                        text: 'Foto Batal diedit',
                        icon: 'error'
                    });
                }
            });
        }
    </script>
@endsection
