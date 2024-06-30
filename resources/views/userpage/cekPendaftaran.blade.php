<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Hasil Pendaftaran</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

</head>

<body>


    <div class="container">
        <div class="py-5 text-center mx-auto">
            <img src="{{ asset('userpage/img/LOGO_ABSHAH.png') }}" alt="" width="130" height="130">
            <h2>Cek pendaftaran</h2>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 border rounded ">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session()->has('info'))
                    <div class="alert alert-info" role="alert">
                        {{ session('info') }}
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <form action="{{ url('cek') }}" method="POST">
                    @csrf
                    <label for="nama">Input NIK</label>
                    <input type="text" name="NIK" class="form-control mb-3 @error('nama') 'is-invalid' @enderror"
                        id="nama" placeholder="NIP" maxlength="16" minlength="16">
                    <button class="btn btn-primary">Cek</button>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
