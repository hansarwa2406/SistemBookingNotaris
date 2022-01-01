@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Jadwal</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/sisw/{{ $sisw->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="id_jadwal" class="form-label">NIS</label>
          <input type="text" name="NIS" class="form-control" placeholder="NIS SISWA" value="{{ $sisw->NIS }}">
      </div>
        <div class="mb-3">
          <label for="id_notaris" class="form-label">Nama Siswa</label>
          <input type="text" name="NamaSiswa" value="{{ $sisw->NamaSiswa }}" class="form-control" placeholder="NAMA SISWA">
      </div>
        <div class="mb-3">
          <label for="id_klien" class="form-label">Alamat</label>
          <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content">{{ $sisw->Alamat }}</textarea>
      </div>
        
    

  
    
    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>
 
 


@endsection