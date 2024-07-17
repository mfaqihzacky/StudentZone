<form method="post" action="/jadwal" enctype="multipart/form-data">
    @csrf
    <input type="text" value="{{ $matkul->id }}" name="matkulId" id="matkulId" hidden>
    <div class="m-3">
        <div class="form-group">
            <label>Nama Ruang</label>
            <input type="text" class="form-control form-control-user" name="namaRuang" id="namaRuang" required
                placeholder="Masukkan Nama Ruangan...">
        </div>
        <div class="form-group">
            <label>Hari Perkuliahan</label>
            <select class="form-select" name="hari" id="hari">
                <option selected>Pilih hari...</option>
                <option value="senin">Senin</option>
                <option value="selasa">Selasa</option>
                <option value="rabu">Rabu</option>
                <option value="kamis">Kamis</option>
                <option value="jumat">Jum'at</option>
            </select>
        </div>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="jam1" name="jam1" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam1">1 : 07.30 -
                            08.20</label>

                        <input type="checkbox" class="btn-check" id="jam2" name="jam2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam2" name="jam1">2 :
                            08.25 -
                            09.15</label>

                        <input type="checkbox" class="btn-check" id="jam3" name="jam3" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam3">3 : 09.20 -
                            10.10</label>

                        <input type="checkbox" class="btn-check" id="jam4" name="jam4" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam4">4 : 10.15 -
                            11.05</label>

                        <input type="checkbox" class="btn-check" id="jam5" name="jam5" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam5">5 : 11.10 -
                            12.00</label>

                        <input type="checkbox" class="btn-check" id="jam6" name="jam6" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam6">6 : 13.00 -
                            13.50</label>
                    </div>
                </div>
                <div class="col">
                    <div class="btn-group-vertical" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="jam7" name="jam7" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam7">7 : 13.55 -
                            14.45</label>

                        <input type="checkbox" class="btn-check" id="jam8" name="jam8" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam8">8 : 15.30 -
                            16.20</label>

                        <input type="checkbox" class="btn-check" id="jam9" name="jam9" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam9">9 : 16.25 -
                            17.15</label>

                        <input type="checkbox" class="btn-check" id="jam10" name="jam10" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam10">10 : 18.00 -
                            18.50</label>

                        <input type="checkbox" class="btn-check" id="jam11" name="jam11" autocomplete="off">
                        <label class="btn btn-outline-primary" for="jam11">11 : 18.55 -
                            19.20</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah Jadwal</button>
    </div>
</form>
