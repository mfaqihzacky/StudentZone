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
        <h1 class="h3 mb-2 ml-2 text-gray-800">Materi</h1>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Materi</button>

        <!-- Tabel Materi -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Materi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Materi</th>
                                <th>Deskripsi</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Materi</th>
                                <th>Deskripsi</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($materis as $materi)
                            <tr>
                                <td>{{ optional($materi->matakuliah)->namaMatKul }}</td>
                                <td>{{ $materi->judul }}</td>
                                <td>{{ $materi->deskripsi }}</td>
                                <td>{{ $materi->user->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#showModal{{ $materi->id }}"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <button type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editModal{{ $materi->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    <form action="/materi/{{ $materi->id }}" method="post" class="d-inline"> 
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Show Modal-->
                            @include('Menu.Materi.showModal')
                            <!-- Edit Modal-->
                            @include('Menu.Materi.editModal')
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modal-->
    @include('Menu.Materi.createModal')
</div>
@endsection