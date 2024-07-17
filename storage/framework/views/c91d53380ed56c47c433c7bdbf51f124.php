<div class="modal fade" id="editModal<?php echo e($user->id); ?>" tabindex="-1" aria-labelledby="editModal" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Anggota</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="post" action="/anggota/<?php echo e($user->id); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('put'); ?>
                <div class="m-3">
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control form-control-user" name="nim" id="nim"
                            value="<?php echo e(old('', $user->nim)); ?>" placeholder="Masukkan NIM Anggota Baru...">
                        <?php $__errorArgs = ['nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control form-control-user" name="name" id="name"
                            value="<?php echo e(old('', $user->name)); ?>" placeholder="Masukkan Nama Anggota Baru...">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control form-control-user" name="email" id="email"
                            value="<?php echo e(old('', $user->email)); ?>" placeholder="Masukkan Alamat Email...">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                            name="isAdmin[]" id="isAdmin"
                            <?php echo e($user->isAdmin === 1 ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="isAdmin">isAdmin</label>
                        </div>
                        <?php $__errorArgs = ['isAdmin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/Anggota/editModal.blade.php ENDPATH**/ ?>