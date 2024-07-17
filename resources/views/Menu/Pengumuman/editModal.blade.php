<div class="modal fade" id="editModal{{ $pengumuman->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Mata Kuliah</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/pengumuman/{{ $pengumuman->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="m-3">
                    <div class="form-group">
                        <label for="matkul_id">Nama Mata Kuliah</label>
                        <select class="form-select" name="mata_kuliah_id" id="mata_kuliah_id" required>
                            <option value="" selected disabled>Pilih nama mata kuliah...</option>
                            @foreach ($matkuls as $matakuliah)
                                <option value="{{ $matakuliah->id }}">{{ $matakuliah->namaMatKul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Pengumuman</label>
                        <input type="text" class="form-control form-control-user"
                        name="judul" id="judul" value="{{ old('', $pengumuman->judul) }}"
                        placeholder="Masukkan Judul Pengumuman Baru...">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <div class="form-floating">
                            <textarea class="form-control" 
                            placeholder="Masukkan Deskripsi..."  
                            name="deskripsi" id="deskripsi"
                            style="height: 100px"
                            >{{ old('', $pengumuman->deskripsi) }}</textarea>
                            <label for="deskripsi">Deskripsi</label>
                        </div>
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