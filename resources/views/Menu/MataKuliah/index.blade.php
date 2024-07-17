@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <div class="container-fluid">

        @if(session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <!-- Page Heading -->
        <h1 class="h3 mb-2 ml-2 text-gray-800">Mata Kuliah</h1>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Mata Kuliah</button>

        <!-- Tabel Mata Kuliah -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Mata Kuliah</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Dosen</th>
                                <th>Kelas</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Dosen</th>
                                <th>Kelas</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($matkuls as $matkul)
                            <tr>
                                <td>{{ $matkul->namaMatKul }}</td>
                                <td>{{ $matkul->namaDosen }}</td>
                                <td>{{ $matkul->kelas }}</td>
                                {{-- <td>{{ $matkul->hari == 'jumat' ? $jamList[$matkul->jam] : $jamList[$matkul->jam] }}</td> --}}
                                <td>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#showModal{{ $matkul->id }}"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <button type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $matkul->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    <button type="button" class="btn btn-info"
                                    data-bs-toggle="modal" data-bs-target="#editJadwalModal{{ $matkul->id }}">
                                    <i class="fa-regular fa-calendar"></i></button>
                                    <button type="button" class="btn btn-success"
                                    data-bs-toggle="modal" data-bs-target="#editAddModal{{ $matkul->id }}">
                                    <i class="fa-solid fa-user-plus"></i></button>
                                    <form action="/matakuliah/{{ $matkul->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    <!-- Show Modal-->
                                    @include('Menu.MataKuliah.showModal')
                                    <!-- Edit Modal-->
                                    @include('Menu.MataKuliah.editModal')
                                    <!-- Edit Jadwal Modal-->
                                    @include('Menu.MataKuliah.editJadwal.editJadwalModal')
                                    <!-- Edit Jadwal Modal-->
                                    @include('Menu.MataKuliah.addAnggota.editAddModal')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modal-->
    @include('Menu.MataKuliah.createModal')
</div>
@endsection
