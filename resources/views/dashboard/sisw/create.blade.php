@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Notaris</h1>
  </div>
  <div class="col-lg-8">
       <form method="POST" action="/dashboard/sisw">
        @csrf
        <div class="mb-3">
          <label for="NIS" class="form-label">ID Notaris</label>
          <input type="text" class="form-control @error('NIS') is-invalid @enderror" id="NIS" name="NIS" value="{{ old('NIS') }}" required autofocus>
          @error('NIS')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="NamaSiswa" class="form-label">Nama Notaris</label>
          <input type="text" class="form-control @error('NamaSiswa') is-invalid @enderror" id="NamaSiswa" name="NamaSiswa" value="{{ old('NamaSiswa') }}" required autofocus>
          @error('NamaSiswa')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="Alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" value="{{ old('Alamat') }}" required autofocus>
          @error('Alamat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="Tlp" class="form-label">Nomor Telepon</label>
          <input type="text" class="form-control @error('Tlp') is-invalid @enderror" id="Tlp" name="Tlp" value="{{ old('Tlp') }}" required autofocus>
          @error('Tlp')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
        <div class="mb-3">
          <label for="Jabatan" class="form-label">Jabatan</label>
          <input type="text" class="form-control @error('Jabatan') is-invalid @enderror" id="Jabatan" name="Jabatan" value="{{ old('Jabatan') }}" required autofocus>
          @error('Jabatan')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
       

       
      {{-- <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
          @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Category</label>
      <select class="form-select" name="category_id">
          @foreach ($categories as $category)
              @if (old('category_id') == $category->id)
                  <option value="{{ $category->id}}" selected>{{ $category->name }}</option>
              @else
                  <option value="{{ $category->id}}">{{ $category->name }}</option>
              @endif
          @endforeach
      </select>
  </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      @error('body')
           <p class="text-danger">{{ $message }}</p>
      @enderror
      <input id="body" type="hidden" name="body" value="{{ old('body') }}">
  <trix-editor input="body"></trix-editor>
  </div> --}}

  
    
    <button type="submit" class="btn btn-primary">Tambah Notaris</button>
  </form>
  </div>
 


@endsection