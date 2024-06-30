{{-- @extends('adminpage.layouts.main')

@section('container')
    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pendaftaran</h4>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover" id="my-table2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No KK</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPendaftaran as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->NIK }}</td>
                                    <td>{{ $data->No_KK }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>
                                        <div class="btn btn-success"
                                            style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px">
                                            Lunas
                                    </td>
                                    <td>
                                        <div class="d-flex" style="gap: 10px">
                                            <a href="{{ url('daftar/' . $data->id) }}" class="btn btn-primary"
                                                style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"><i
                                                    class="ti ti-eye"></i></a>

                                            <a href="{{ url('daftar/' . $data->id . '/edit') }}" class="btn btn-warning"
                                                style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"><i
                                                    class="ti ti-pencil-alt"></i></a>

                                            <form action="{{ url('daftar/' . $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn btn btn-danger btn-delete-pendaftaran "
                                                    style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px">
                                                    <i class="ti ti-trash"></i>
                                                </div>
                                            </form>
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
@endsection --}}


@extends('adminpage.layouts.main')

@section('container')
    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Pendaftaran</h4>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover " id="my-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>No KK</th>
                                <th>Alamat</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPendaftaran as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->NIK }}</td>
                                    <td>{{ $data->No_KK }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>
                                        @if ($data->pembayaran == 'belum')
                                            <form action="{{ url('bayar') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                <div class="btn btn-danger bayar"
                                                    style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px">
                                                    belum
                                                </div>
                                            </form>
                                        @else
                                            <div class="btn btn-success"
                                                style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px">
                                                Lunas
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex" style="gap: 10px">
                                            <a href="{{ url('daftar/' . $data->id) }}" class="btn btn-primary"
                                                style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"><i
                                                    class="ti ti-eye"></i></a>

                                            <a href="{{ url('daftar/' . $data->id . '/edit') }}" class="btn btn-warning"
                                                style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"><i
                                                    class="ti ti-pencil-alt"></i></a>

                                            <form action="{{ url('daftar/' . $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn btn btn-danger btn-delete-pendaftaran "
                                                    style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px">
                                                    <i class="ti ti-trash"></i>
                                                </div>
                                            </form>
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
@endsection
