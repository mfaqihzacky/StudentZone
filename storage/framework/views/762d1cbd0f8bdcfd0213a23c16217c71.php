<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        <?php $__currentLoopData = $matkul->anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($anggota->nim); ?></td>
            <td><?php echo e($anggota->name); ?></td>
            <td><?php echo e($anggota->email); ?></td>
            <td>
                <form action="/matakuliah/<?php echo e($matkul->id); ?>/user/<?php echo e($anggota->id); ?>/remove" method="post" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/MataKuliah/addAnggota/addTableRemove.blade.php ENDPATH**/ ?>