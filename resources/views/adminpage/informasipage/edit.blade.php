@extends('adminpage.layouts.main')

@section('container')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('informasi/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-sample">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') 'is-invalid' @enderror"
                                id="judul" placeholder="Nama Lengkap" value="{{ @old('judul', $data->judul) }}">
                            @error('judul')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal"
                                class="form-control @error('tanggal') 'is-invalid' @enderror" id="tanggal"
                                placeholder="Nama Lengkap" value="{{ @old('tanggal', $data->tanggal) }}">
                            @error('tanggal')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            @error('isi')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <input type="hidden" name="isi" id="isi" value="{{ @old('isi', $data->isi) }}">
                            <trix-editor input="isi"></trix-editor>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Gambar</label>

                            <input type="file" name="file" id="foto" onchange="previewImage()">

                            <img src="{{ asset('storage/' . $data->file) }}" alt=""
                                class="img-preview img-fluid mb-3 col-sm-5">
                            @error('file')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Aksi</label>
                            <div>
                                <a href="{{ url('informasi') }}" class="btn btn-warning">Batal</a>
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // trix js : 
        document.addEventListener('trix-file-accept', function() {
            e.preventDefault();
        });

        function previewImage() {

            // get object with id gambar : 
            const image = document.querySelector('#foto');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }
    </script>
@endsection
