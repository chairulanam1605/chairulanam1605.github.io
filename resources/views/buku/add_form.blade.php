@extends('layouts.app')

@section('title', 'Form Buku')
    
@section('content')
<form action="{{ isset($buku) ? route('buku.tambah.update', $buku->id) : route('buku.tambah.submit') }}" method="post">
    @csrf
 <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-dark">{{ isset($buku)? 'Form Edit Buku' : 'Form Tambah Barang' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="{{ isset($buku) ? $buku->kode_buku : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="{{ isset($buku) ? $buku->judul_buku : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis Buku</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="{{ isset($buku) ? $buku->penulis : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit Buku</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ isset($buku) ? $buku->penerbit : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit Buku</label>
                        <input type="date" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ isset($buku) ? $buku->tahun_terbit : '' }}">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_buku">Jumlah Buku</label>
                        <input type="number" class="form-control" id="jumlah_buku" name="jumlah_buku" value="{{ isset($buku) ? $buku->jumlah_buku : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="/buku" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
   
@endsection