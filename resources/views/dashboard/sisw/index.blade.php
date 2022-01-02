@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Notaris </h1>
    </div>

    @if (session('Berhasil'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            {{ session('Berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/sisw/create" class="btn btn-primary mb-3"><span data-feather="plus-circle"></span> Tambah Data Notaris</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr class=" text-center">
                    <th scope="col">No.</th>
                    <th scope="col">ID Notaris</th>
                    <th scope="col">Nama Notaris</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Jabatan</th>
                
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sisw as $siswa)
                    <tr>
                        <td class=" text-center">{{ $loop->iteration }}</td>
                        <td>{{ $siswa->NIS }}</td>
                        <td>{{ $siswa->NamaSiswa }}</td>
                        <td>{{ $siswa->Alamat }}</td>
                        <td>{{ $siswa->Tlp }}</td>
                        <td>{{ $siswa->Jabatan }}</td>
                     
                        <td class=" text-center">
                            <a href="/dashboard/sisw/{{ $siswa->id }}" class="badge bg-info text-decoration-none" title="View"><span data-feather="eye"></a>
                            <a href="/dashboard/sisw/{{ $siswa->id }}/edit" class="badge bg-warning text-decoration-none" title="Edit"><span data-feather="edit"></a>
                            <form action="/dashboard/sisw/{{ $siswa->id }}" method="POST" class=" d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" title="Delete" onclick="return confirm('Are you sure you want to delete this Notary: {{ $siswa->id }}? ')"><span data-feather="trash-2"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection