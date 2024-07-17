<div class="modal fade" id="editModal{{ $matkul->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Mata Kuliah</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/matakuliah/{{ $matkul->id }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="m-3">
                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input type="text" class="form-control form-control-user" required
                        name="namaMatKul" id="namaMatKul" value="{{ old('', $matkul->namaMatKul) }}"
                        placeholder="Masukkan Nama Mata Kuliah Baru...">
                    </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input type="text" class="form-control form-control-user" required
                        name="namaDosen" id="namaDosen" value="{{ old('', $matkul->namaDosen) }}"
                        placeholder="Masukkan Nama Dosen...">
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-select" name="kelas" id="kelas">
                            <option selected>Pilih kelas...</option>
                            <option value="A" {{ $matkul->kelas === "A" ? 'selected' : '' }}>A</option>
                            <option value="B" {{ $matkul->kelas === "B" ? 'selected' : '' }}>B</option>
                            <option value="C" {{ $matkul->kelas === "C" ? 'selected' : '' }}>C</option>
                            <option value="D" {{ $matkul->kelas === "D" ? 'selected' : '' }}>D</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
