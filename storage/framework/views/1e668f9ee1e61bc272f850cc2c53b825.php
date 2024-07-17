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
        
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($user->nim); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td>
                <form action="/tugas/<?php echo e($tugas->id); ?>/user/<?php echo e($user->id); ?>" method="post" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-success  ">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/Tugas/addAnggota/addTableAdd.blade.php ENDPATH**/ ?>