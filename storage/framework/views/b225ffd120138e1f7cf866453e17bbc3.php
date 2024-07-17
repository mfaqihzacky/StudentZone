<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <div class="container-fluid">

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success col-lg-8" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 ml-2 text-gray-800"><?php echo e($title); ?></h1>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Tugas</button>

        <!-- Tabel Mata Kuliah -->
        <div class="card shadow mb-4">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Tugas</h6>
            </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Tugas</th>
                                <th>Deskripsi</th>
                                <th>Deadline</th>
                                <th>Jenis Pengerjaan</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Tugas</th>
                                <th>Deskripsi</th>
                                <th>Deadline</th>
                                <th>Jenis Pengerjaan</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $__currentLoopData = $tugass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tugas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(optional($tugas->matakuliah)->namaMatKul); ?></td>
                                <td><?php echo e($tugas->judul); ?></td>
                                <td><?php echo e($tugas->deskripsi); ?></td>
                                <td><?php echo e($tugas->deadline); ?></td>
                                <td><?php echo e($tugas->jenisPengerjaan); ?></td>
                                <td><?php echo e($tugas->user->name); ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#showModal<?php echo e($tugas->id); ?>"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                                    <button type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editModal<?php echo e($tugas->id); ?>"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    <?php if($tugas->jenisPengerjaan == 'kelompok'): ?>
                                    <button type="button" class="btn btn-success"
                                    data-bs-toggle="modal" data-bs-target="#editAddModal<?php echo e($tugas->id); ?>"><i
                                            class="fa-solid fa-plus"></i></button>
                                    <?php endif; ?>
                                    <form action="/tugas/<?php echo e($tugas->id); ?>" method="post" class="d-inline">
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    <?php endif; ?>
                                    <!-- Show Modal-->
                                    <?php echo $__env->make('Menu.Tugas.showModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <!-- Edit Modal-->
                                    <?php echo $__env->make('Menu.Tugas.editModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php echo $__env->make('Menu.Tugas.addAnggota.editAddModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modal-->
    <?php echo $__env->make('Menu.Tugas.createModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/Tugas/index.blade.php ENDPATH**/ ?>