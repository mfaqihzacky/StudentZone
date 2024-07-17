<div class="modal fade" id="editModal{{ $tugas->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Mata Kuliah</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/tugas/{{ $tugas->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="m-3">
                    <div class="form-group">
                        <label for="matkul_id">Nama Mata Kuliah</label>
                        <select class="form-select" name="mata_kuliah_id" id="mata_kuliah_id" required>
                            <option value="" selected disabled>Pilih nama mata kuliah...</option>
                            @foreach ($matkuls as $matakuliah)
                                <option value="{{ $matakuliah->id }}" {{ $tugas->matakuliah->id === $matakuliah->id ? 'selected' : '' }}>{{ $matakuliah->namaMatKul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Tugas</label>
                        <input type="text" class="form-control form-control-user"
                        name="judul" id="judul" value="{{ old('', $tugas->judul) }}"
                        placeholder="Masukkan Judul tugas Baru...">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control form-control-user"
                        name="deskripsi" id="deskripsi" value="{{ old('', $tugas->deskripsi) }}"
                        placeholder="Masukkan Deskripsi...">
                    </div>
                    <div class="form-group">
                        <label>Deadline</label>
                        <input type="text" class="form-control form-control-user"
                        name="deadline" id="deadline" value="{{ old('', $tugas->deadline) }}"
                        placeholder="Masukkan Deadline...">
                    </div>
                    <div class="form-group">
                        <label>Jenis Pengerjaan</label>
                        <select class="form-select" name="jenisPengerjaan" id="jenisPengerjaan">
                            <option selected>Pilih jenis pengerjaan...</option>
                            <option value="mandiri" {{ $tugas->jenisPengerjaan === "mandiri" ? "selected" : ""}}>Mandiri</option>
                            <option value="kelompok" {{ $tugas->jenisPengerjaan === "kelompok" ? "selected" : ""}}>Kelompok</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>