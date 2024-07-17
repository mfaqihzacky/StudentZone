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
        <?php $__currentLoopData = $tugas->anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anggota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($anggota->nim); ?></td>
            <td><?php echo e($anggota->name); ?></td>
            <td><?php echo e($anggota->email); ?></td>
            <td>
                <button type="button" class="btn btn-danger"
                data-bs-toggle="modal"><i class="fa-solid fa-minus"></i></button>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/Tugas/addAnggota/addTableRemove.blade.php ENDPATH**/ ?>