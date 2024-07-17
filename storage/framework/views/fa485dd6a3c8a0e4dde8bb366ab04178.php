<div class="modal fade" id="editModal<?php echo e($tugas->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Mata Kuliah</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/tugas/<?php echo e($tugas->id); ?>" enctype="multipart/form-data">
                <?php echo method_field('put'); ?>
                <?php echo csrf_field(); ?>
                <div class="m-3">
                    <div class="form-group">
                        <label for="matkul_id">Nama Mata Kuliah</label>
                        <select class="form-select" name="mata_kuliah_id" id="mata_kuliah_id" required>
                            <option value="" selected disabled>Pilih nama mata kuliah...</option>
                            <?php $__currentLoopData = $matkuls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matakuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($matakuliah->id); ?>" <?php echo e($tugas->matakuliah->id === $matakuliah->id ? 'selected' : ''); ?>><?php echo e($matakuliah->namaMatKul); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Tugas</label>
                        <input type="text" class="form-control form-control-user"
                        name="judul" id="judul" value="<?php echo e(old('', $tugas->judul)); ?>"
                        placeholder="Masukkan Judul tugas Baru...">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control form-control-user"
                        name="deskripsi" id="deskripsi" value="<?php echo e(old('', $tugas->deskripsi)); ?>"
                        placeholder="Masukkan Deskripsi...">
                    </div>
                    <div class="form-group">
                        <label>Deadline</label>
                        <input type="text" class="form-control form-control-user"
                        name="deadline" id="deadline" value="<?php echo e(old('', $tugas->deadline)); ?>"
                        placeholder="Masukkan Deadline...">
                    </div>
                    <div class="form-group">
                        <label>Jenis Pengerjaan</label>
                        <select class="form-select" name="jenisPengerjaan" id="jenisPengerjaan">
                            <option selected>Pilih jenis pengerjaan...</option>
                            <option value="mandiri" <?php echo e($tugas->jenisPengerjaan === "mandiri" ? "selected" : ""); ?>>Mandiri</option>
                            <option value="kelompok" <?php echo e($tugas->jenisPengerjaan === "kelompok" ? "selected" : ""); ?>>Kelompok</option>
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
</div><?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/Tugas/editModal.blade.php ENDPATH**/ ?>