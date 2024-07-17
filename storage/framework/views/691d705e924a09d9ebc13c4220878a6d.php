<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->nim); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td>
                <button type="button" class="btn btn-primary"
                data-bs-toggle="modal" data-bs-target="#showModal<?php echo e($user->id); ?>"><i
                        class="fa-solid fa-eye"></i></button>
                <button type="button" class="btn btn-warning"
                data-bs-toggle="modal" data-bs-target="#editModal<?php echo e($user->id); ?>"><i
                        class="fa-solid fa-pen-to-square"></i></button>
                <form action="/anggota/<?php echo e($user->id); ?>" method="post" class="d-inline">
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-danger"
                        onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        <!-- Edit Modal-->
        <?php echo $__env->make('Menu.Anggota.showModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Edit Modal-->
        <?php echo $__env->make('Menu.Anggota.editModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Menu/MataKuliah/addAnggota/addTable.blade.php ENDPATH**/ ?>