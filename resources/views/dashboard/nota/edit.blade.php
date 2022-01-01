@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Notaris</h1>
  </div>
  <div class="col-lg-8">
    <form method="POST" action="/dashboard/nota/{{ $nota->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="NIN" class="form-label">ID Notaris</label>
          <input type="text" name="NIN" class="form-control" placeholder="Id Notaris" value="{{ $nota->NIN }}">
      </div>
        <div class="mb-3">
          <label for="NamaNotaris" class="form-label">Nama Notaris</label>
          <input type="text" name="NamaNotaris" value="{{ $nota->NamaNotaris }}" class="form-control" placeholder="Nama Notaris">
      </div>
        <div class="mb-3">
          <label for="Alamat" class="form-label">Alamat</label>
          <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content">{{ $nota->Alamat }}</textarea>
      </div>
      <div class="mb-3">
        <label for="Jabatan" class="form-label">Jabatan</label>
        <input type="text" name="Jabatan" value="{{ $nota->Jabatan }}" class="form-control" placeholder="Jabatab Notaris">
    </div>
        
    

  
    
    <button type="submit" class="btn btn-primary">Perbaharui Data</button>
  </form>
  </div>
 
 


@endsection