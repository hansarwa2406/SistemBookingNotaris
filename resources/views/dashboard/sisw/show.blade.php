@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h5 class="card-title">NIS:  {{ $sisw->NIS }}</h5>
                <h6 class="card-subtitle mb-2 ">NAMA SISWA: {{ $sisw->NamaSiswa }}</h6>
                
        
            <a class="btn btn-primary d-block my-5" href="/dashboard/sisw">Kembali</a>
        </div>
    </div>
</div>
@endsection