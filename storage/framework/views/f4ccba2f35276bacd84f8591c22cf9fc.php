<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Ruang</th>
            <th>Hari</th>
            <th>Jam</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Ruang</th>
            <th>Hari</th>
            <th>Jam</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        <?php $__currentLoopData = $matkul->jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $jadwal->waktus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($jadwal->namaRuang); ?></td>
                    <td><?php echo e($jadwal->hari); ?></td>
                    <td><?php echo e($jamList[$w->jam]); ?></td>
                    <td>
                        <form action="/matakuliah/<?php echo e($matkul->id); ?>/jadwal/<?php echo e($jadwal->id); ?>" method="post" class="d-inline">
                            <?php echo method_field('delete'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger"
                                onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/MataKuliah/editJadwal/jadwalTable.blade.php ENDPATH**/ ?>