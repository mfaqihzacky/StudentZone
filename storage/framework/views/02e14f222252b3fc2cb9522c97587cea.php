<?php $__env->startSection('container'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

    <div class="container-fluid">

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success col-lg-8" role="alert">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 ml-2 text-gray-800">Pengumuman</h1>
        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Pengumuman</button>

        <!-- Tabel Pengumuman -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pengumuman</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Pengumuman</th>
                                <th>Deskripsi</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Mata Kuliah</th>
                                <th>Judul Pengumuman</th>
                                <th>Deskripsi</th>
                                <th>Penulis</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $__currentLoopData = $pengumumans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengumuman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(optional($pengumuman->matakuliah)->namaMatKul); ?></td>
                                <td><?php echo e($pengumuman->judul); ?></td>
                                <td><?php echo e($pengumuman->deskripsi); ?></td>
                                <td><?php echo e($pengumuman->user->name); ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#showModal<?php echo e($pengumuman->id); ?>"><i
                                            class="fa-solid fa-eye"></i></button>
                                    <button type="button" class="btn btn-warning"
                                    data-bs-toggle="modal" data-bs-target="#editModal<?php echo e($pengumuman->id); ?>"><i
                                            class="fa-solid fa-pen-to-square"></i></button>
                                    <form action="/pengumuman/<?php echo e($pengumuman->id); ?>" method="post" class="d-inline"> 
                                        <?php echo method_field('delete'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Show Modal-->
                            <?php echo $__env->make('Menu.Pengumuman.showModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <!-- Edit Modal-->
                            <?php echo $__env->make('Menu.Pengumuman.editModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Create Modal-->
    <?php echo $__env->make('Menu.Pengumuman.createModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/Pengumuman/index.blade.php ENDPATH**/ ?>