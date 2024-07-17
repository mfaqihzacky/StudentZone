<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tugas</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/tugas" enctype="multipart/form-data">
                @csrf
                <div class="m-3">
                    <div class="form-group">
                        <label>Judul Tugas</label>
                        <input type="text" class="form-control form-control-user"
                        name="judul" id="judul" required
                        placeholder="Masukkan Judul tugas Baru...">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control form-control-user"
                        name="deskripsi" id="deskripsi" required
                        placeholder="Masukkan Deskripsi...">
                    </div>
                    <div class="form-group">
                        <label>Deadline</label>
                        <input type="text" class="form-control form-control-user"
                        name="deadline" id="deadline" required
                        placeholder="Masukkan Deadline...">
                    </div>
                    <div class="form-group">
                        <label>Jenis Pengerjaan</label>
                        <select class="form-select" name="jenis" id="jenis">
                            <option selected>Pilih jenis pengerjaan...</option>
                            <option value="mandiri">Mandiri</option>
                            <option value="kelompok">Kelompok</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>