@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title"> Nama Notaris: {{ $nota->NamaNotaris }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">ID Notaris: {{ $nota->NIN }}</h6>
                <p class="card-text">Alamat: {{ $nota->Alamat }}</p>
                <p class="card-text">Kontak: {{ $nota->Tlp }}</p>
                <p class="card-text">Kontak: {{ $nota->Jabatan }}</p>
    
            <a class="btn btn-primary d-block my-5" href="/dashboard/nota">Kembali</a>
        </div>
    </div>
</div>
@endsection