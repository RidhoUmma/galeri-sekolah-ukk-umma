@extends('admin.admin')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/foto">Foto</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data</a></li>
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
                                <h4 class="card-title">Tambah Foto</h4>
                            </div>
                            <hr />
                            <form method="POST" action="/foto/store" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="id_kategori">Nama Kategori</label>
                                        <select class="form-control @error('id_kategori') is-invalid @enderror" id="id_kategori" name="id_kategori" >
                                            <option value="" hidden>---Pilih kategori---</option>
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
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
                                        <input type="text" class="form-control @error('judul_foto') is-invalid @enderror" name="judul_foto" name="judul_foto" id="judul_foto"
                                            placeholder="Judul Kegiatan" >
                                            @error('judul_foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Foto</label>
                                        <input type="file" name="image" accept="image/*" class="form-control-file @error('image') is-invalid @enderror">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan"  placeholder="keterangan" >{{old('keterangan')}}</textarea>
                                        @error('keterangan')
                                        <div  class="invalid-feedback">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_foto">Tanggal Acara</label>
                                        <input type="date" class="form-control @error('tgl_foto') is-invalid @enderror" name="tgl_foto" name="tgl_foto" id="tgl_foto" placeholder="Tanggal Acara" >
                                        @error('tgl_foto')
                                        <div  class="invalid-feedback">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                                    <a href="/foto"><button type="button" class="btn btn-secondary" ><i
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
@endsection
