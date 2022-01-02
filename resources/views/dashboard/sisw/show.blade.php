@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">ID Notaris:  {{ $sisw->NIS }}</h5>
                <h6 class="card-subtitle mb-2 ">Nama Notaris: {{ $sisw->NamaSiswa }}</h6>
                <h6 class="card-subtitle mb-2 ">Alamat: {{ $sisw->Alamat }}</h6>
                <h6 class="card-subtitle mb-2 ">Telepon: {{ $sisw->Tlp }}</h6>
                <h6 class="card-subtitle mb-2 ">Jabatan: {{ $sisw->Jabatan }}</h6>
                
        
            <a class="btn btn-primary d-block my-5" href="/dashboard/sisw">Kembali</a>
        </div>
    </div>
</div>
@endsection