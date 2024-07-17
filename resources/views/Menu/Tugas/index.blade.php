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
        <h1 class="h3 mb-2 ml-2 text-gray-800">{{ $title }}</h1>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Tugas</button>

        <!-- Tabel Mata Kuliah -->
        <div class="card shadow mb-4">
            @can('admin')
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Tugas</h6>
            </div>
            @endcan
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Tugas</th>
                                <th>Deskripsi</th>
                                <th>Deadline</th>
                                <th>Jenis Pengerjaan</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Tugas</th>
                                <th>Deskripsi</th>
                                <th>Deadline</th>
                                <th>Jenis Pengerjaan</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($tugass as $tugas)
                            <tr>
                                <td>{{ optional($tugas->matakuliah)->namaMatKul }}</td>
                                <td>{{ $tugas->judul }}</td>
                                <td>{{ $tugas->deskripsi }}</td>
                                <td>{{ $tugas->deadline }}</td>
                                <td>{{ $tugas->jenisPengerjaan }}</td>
                                <td>{{ $tugas->user->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#showModal{{ $tugas->id }}"><i
                                            class="fa-solid fa-eye"></i></button>
                                    @can('admin')
                                    <button type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $tugas->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    @if($tugas->jenisPengerjaan == 'kelompok')
                                    <button type="button" class="btn btn-success"
                                    data-bs-toggle="modal" data-bs-target="#editAddModal{{ $tugas->id }}"><i
                                            class="fa-solid fa-plus"></i></button>
                                    @endif
                                    <form action="/tugas/{{ $tugas->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                    <!-- Show Modal-->
                                    @include('Menu.Tugas.showModal')
                                    <!-- Edit Modal-->
                                    @include('Menu.Tugas.editModal')
                                    @include('Menu.Tugas.addAnggota.editAddModal')
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
    @include('Menu.Tugas.createModal')
</div>
@endsection
