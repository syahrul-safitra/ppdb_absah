@extends('adminpage.layouts.main')

@section('container')
    <div class=" grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Informasi</h4>

                <a href="{{ url('informasi/create') }}" class="btn btn-primary mb-3">Tambah</a>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover" id="my-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataInformasi as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>
                                        <div class="d-flex" style="gap: 10px">
                                            <a href="{{ url('informasi/' . $data->id . '/edit') }}" class="btn btn-warning"
                                                style="padding-top: 2px; padding-bottom: 2px; padding-left: 5px; padding-right: 5px"><i
                                                    class="ti ti-pencil-alt"></i></a>

                                            <form action="{{ url('informasi/' . $data->id) }}" method="POST">
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
