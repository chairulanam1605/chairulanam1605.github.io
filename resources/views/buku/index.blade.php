@extends('layouts.app')

@section('title', 'Daftar Buku')
    
@section('content')
    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-dark">Daftar Buku</h6>
                        </div>
                        <div class="card-body">
                            @if (auth()->user()->level == 'Admin')
                            <a href="{{ route('buku.tambah') }}" class="btn btn-primary mb-4">Tambah Buku</a>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Jumlah Buku</th>
                                            @if (auth()->user()->level == 'Admin')
                                            <th>Aksi</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($no = 1)
                                        @foreach ($buku as $row)
                                        <tr>
                                            <th>{{ $no++ }}</th>
                                            <td>{{ $row->kode_buku }}</td>
                                            <td>{{ $row->judul_buku }}</td>
                                            <td>{{ $row->penulis }}</td>
                                            <td>{{ $row->penerbit }}</td>
                                            <td>{{ $row->tahun_terbit }}</td>
                                            <td>{{ $row->jumlah_buku }}</td>
                                            @if (auth()->user()->level == 'Admin')
                                            <td>
                                                <a href="{{ route('buku.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                                <a href="{{ route('buku.delete', $row->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection