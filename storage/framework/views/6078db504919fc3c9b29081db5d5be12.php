<div class="modal fade" id="editJadwalModal<?php echo e($matkul->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Jadwal Mata Kuliah</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                        <?php echo $__env->make('Menu.MataKuliah.editJadwal.jadwalTable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col">
                        <?php echo $__env->make('Menu.MataKuliah.editJadwal.editJadwalForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/MataKuliah/editJadwal/editJadwalModal.blade.php ENDPATH**/ ?>