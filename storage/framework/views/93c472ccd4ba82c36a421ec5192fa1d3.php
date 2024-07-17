<div class="modal fade" id="showModal<?php echo e($tugas->id); ?>" tabindex="-1" role="dialog" aria-labelledby="showodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Tugas</h5>
                <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="m-3">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Mata Kuliah</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: <?php echo e(optional($tugas->matakuliah)->namaMatKul); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Judul</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: <?php echo e($tugas->judul); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Deskripsi</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: <?php echo e($tugas->deskripsi); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Deadline</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: <?php echo e($tugas->deadline); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <p class="fw-bold m-0">Jenis Pengerjaan</p>
                            </div>
                            <div class="col-lg-9">
                                <p class="m-0">: <?php echo e($tugas->jenisPengerjaan); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/Tugas/showModal.blade.php ENDPATH**/ ?>