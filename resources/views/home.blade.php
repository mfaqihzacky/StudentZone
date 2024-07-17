@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        {{-- <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1> --}}
        <div class="container text-center">
            <div class="row row-cols-5 row-cols-lg-2 g-2 g-lg-3">
                <div class="col-9 p-3">
                    <!-- Illustrations -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Jadwal</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Senin</th>
                                        <th>Selasa</th>
                                        <th>Rabu</th>
                                        <th>Kamis</th>
                                        <th>Jum'at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($waktus as $waktu)
                                        <tr>
                                            <td>{{ $waktu->name }}</td> <!-- Display the name or time slot -->
                                            @foreach (['senin', 'selasa', 'rabu', 'kamis', "jumat"] as $day)
                                                <td>
                                                    @foreach ($mataKuliahs as $matkul)
                                                        @foreach ($matkul->jadwals as $jadwal)
                                                            {{-- {{ dd($matkul->jadwals) }} --}}
                                                            @if ($jadwal->hari === $day && $jadwal->waktu_id === $waktu->id)
                                                                {{ $matkul->name }} <!-- Display the MataKuliah name -->
                                                            @endif
                                                        @endforeach
                                                    @endforeach
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    {{-- @for ($i = 1; $i <= 11; $i++)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>sn</td>
                                            <td>sl</td>
                                            <td>rb</td>
                                            <td>km</td>
                                            <td>jm</td>
                                        </tr>
                                    @endfor --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3">
                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tugas</h6>
                            </div>
                            <div class="card-body">
                                <ol class="list-group list-group-numbered">
                                    @foreach ($tugas as $t)
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">{{ $t->judul }}</div>
                                                {{ $t->deadline }}
                                            </div>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="p-3">
                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Pengumuman</h6>
                            </div>
                            <div class="card-body">
                                <ol class="list-group list-group-numbered">
                                    @foreach ($pengumuman as $p)
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div class="fw-bold">{{ $p->judul }}</div>
                                                {{ $p->deskripsi }}
                                            </div>
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
