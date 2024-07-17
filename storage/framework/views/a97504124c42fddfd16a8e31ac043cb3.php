<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="main-body">

            <?php if(session()->has('success')): ?>
                <div class="alert alert-success col-lg-8" role="alert">
                    <?php echo e(session('success')); ?>

                </div>
            <?php elseif(session()->has('failed')): ?>
                <div class="alert alert-danger col-lg-8" role="alert">
                    <?php echo e(session('failed')); ?>

                </div>
            <?php endif; ?>

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <?php if($user->image): ?>
                                    <img src="<?php echo e(asset($user->image)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block"
                                        width="150">
                                <?php else: ?>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                <?php endif; ?>
                                <div class="mt-3">
                                    <h4><?php echo e($user->name); ?></h4>
                                    <p class="text-secondary mb-1"><?php echo e($user->isAdmin === true ? 'Mahasiswa' : 'Admin'); ?></p>
                                    <form action="/logout" method="post">
                                        <?php echo csrf_field(); ?>
                                        <button class="btn btn-danger" href="/logout">Logout</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">NIM</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo e($user->nim); ?>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo e($user->name); ?>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo e($user->email); ?>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal">Edit</a>
                                    <a class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editPasswordModal">Update Password</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters-sm">
                        
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h6 class="d-flex align-items-center mb-3">Nilai</h6>
                                    <div class="container text-center">
                                        <div class="row align-items-start">
                                            <div class="col">
                                            <?php $__currentLoopData = $matkul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <label><?php echo e($m->namaMatKul); ?></label>
                                                <input type="number" step="0.01"></input>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="col">
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('Profile.editModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('Profile.editPasswordModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/Profile/profile.blade.php ENDPATH**/ ?>