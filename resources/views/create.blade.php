@extends('layout')
<!-- START FORM -->
@section('konten')  
<form action="{{route('data.store')}}" method="post">
@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
    <label for="kode_proses_bisnis" class="col-sm-2 col-form-label">Kode Proses Bisnis</label>
    <div class="col-sm-10">
        <input type="number" class="form-control @error('kode_proses_bisnis') is-invalid @enderror" 
        name="kode_proses_bisnis" value="{{ old('kode_proses_bisnis') }}">
    </div>
    </div>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <div class="mb-3 row">
    <label for="kode_layanan_proses_bisnis" class="col-sm-2 col-form-label">Kode Layanan Proses Bisnis</label>
    <div class="col-sm-10">
        <input type="number" class="form-control @error('kode_layanan_bisnis') is-invalid @enderror" 
        name="kode_layanan_bisnis" value="{{ old('kode_layanan_bisnis') }}">
    </div>
    </div>
    <div class="mb-3 row">
    <label for="nama_proses_bisnis" class="col-sm-2 col-form-label">Nama Proses Bisnis</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('nama_proses_bisnis') is-invalid @enderror" 
        name="nama_proses_bisnis" value="{{ old('nama_proses_bisnis') }}">
    </div>
    </div>
    <div class="mb-3 row">
    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" 
        name="deskripsi" value="{{ old('deskripsi') }}">
    </div>
    </div>
    <div class="mb-3 row">
    <label for="tahapan_proses_bisnis" class="col-sm-2 col-form-label">Tahapan Proses Bisnis</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('tahapan_proses_bisnis') is-invalid @enderror" 
        name="tahapan_proses_bisnis" value="{{ old('tahapan_proses_bisnis') }}">
    </div>
    </div>
    <div class="mb-3 row">
    <label for="kategori_proses_bisnis" class="col-sm-2 col-form-label">Kategori Proses Bisnis</label>
    <div class="col-sm-10">
        <input type="text" class="form-control @error('kategori_proses_bisnis') is-invalid @enderror" 
        name="kategori_proses_bisnis" value="{{ old('kategori_proses_bisnis') }}">
    </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10 offset-sm-2">
            <a href="{{url('/data')}}" class="btn btn-danger mx-3">Back</a>
            <button type="submit" class="btn btn-primary" name="submit">SAVE</button> <!-- Menambahkan atribut name="submit" pada tombol -->
        </div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection