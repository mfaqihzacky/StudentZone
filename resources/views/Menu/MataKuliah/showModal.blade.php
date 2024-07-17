<div class="modal fade" id="showModal{{ $matkul->id }}" tabindex="-1" role="dialog" aria-labelledby="showodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Mata Kuliah</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="m-3">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Nama Mata Kuliah</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: {{$matkul->namaMatKul}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Nama Dosen</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: {{$matkul->namaDosen}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Kelas</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: {{$matkul->kelas}}</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-12">
                        <div class="row">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($matkul->jadwal as $jwl)

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
