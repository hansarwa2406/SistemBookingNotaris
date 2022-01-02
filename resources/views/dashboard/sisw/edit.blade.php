@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Notaris</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/sisw/{{ $sisw->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="id_Notaris" class="form-label">ID Notaris</label>
          <input type="text" name="NIS" class="form-control" placeholder="ID Notaris" value="{{ $sisw->NIS }}" >
      </div>
        <div class="mb-3">
          <label for="Nama_notaris" class="form-label">Nama Notaris</label>
          <input type="text" name="NamaSiswa" value="{{ $sisw->NamaSiswa }}" class="form-control" placeholder="Nama Notaris">
      </div>
        <div class="mb-3">
          <label for="Alamat" class="form-label">Alamat</label>
          <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content">{{ $sisw->Alamat }}</textarea>
      </div>
      <div class="mb-3">
        <label for="Tlp" class="form-label">Nomor Telepon</label>
        <input type="text" name="Tlp" value="{{ $sisw->Tlp }}" class="form-control" placeholder="Nomor Telepon">
    </div>
      <div class="mb-3">
        <label for="Jabatan" class="form-label">Jabatan</label>
        <input type="text" name="Jabatan" value="{{ $sisw->Jabatan }}" class="form-control" placeholder="Jabatan">
    </div>
        
    

  
    
    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>
 
 


@endsection