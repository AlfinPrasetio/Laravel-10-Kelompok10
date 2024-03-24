@extends('layout')

    <!-- START DATA -->
    @section('konten')     
    <div class="my-3 p-3 bg-body rounded shadow-sm">
      <!-- FORM PENCARIAN -->
      <div class="pb-3">
        <form class="d-flex" action="" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
      </div>
      
<!-- TOMBOL TAMBAH DATA -->
<div class="pb-3">
    <a href="{{ route('data.create')}}" class="btn btn-primary">+ Tambah Data</a>
  </div>

  <table class="table table-striped">
    <thead>
      <tr>
          <th>No</th>
          <th>kode_proses_bisnis</th>
          <th>kode_layanan_bisnis</th>
          <th>nama_proses_bisnis</th>
          <th>deskripsi</th>
          <th>tahapan_proses_bisnis</th>
          <th>kategori_proses_bisnis</th>
          <th>Aksi</th>
      </tr>
      </thead>
            <tbody>
              @php
              $no = 1;
              @endphp

                  @foreach ($data as $item)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $item->kode_proses_bisnis }}</td>
                      <td>{{ $item->kode_layanan_bisnis}}</td>
                      <td>{{ $item->nama_proses_bisnis}}</td>
                      <td>{{ $item->deskripsi}}</td>
                      <td>{{ $item->tahapan_proses_bisnis}}</td>
                      <td>{{ $item->kategori_proses_bisnis}}</td>
                      <td>  
                      <a href="{{ route('data.show', $item->kode_proses_bisnis)}}" class="btn btn-info">show</a><br>
                      <a href="{{ route('data.edit', $item->kode_proses_bisnis)}}" class="btn btn-primary">update</a><br>
                      
                      <div class="col">
                              <form action="{{ route('data.destroy', $item->kode_proses_bisnis)}}"
                                  method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger mb-2"
                                      onclick="return confirm('Apakah kamu yakin ingin menghapus data bank ini?')"><i
                                          class="bi bi-trash-fill"></i>DELETE</button>
                              </form>
                          </div>
                      </td>
                    </tr>
                @endforeach
            </tbody>
      </table>
  </div>
<!-- AKHIR DATA -->
@endsection