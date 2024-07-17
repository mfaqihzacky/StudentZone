<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        

        <!-- Nav Item - Alerts -->
        

        <!-- Nav Item - Messages -->
        

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <?php if(auth()->guard()->check()): ?>
            <li class="nav-item dropdown no-arrow">
                
                <a class="nav-link" href="/profile" id="userDropdown" role="button">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(auth()->user()->name); ?></span>
                    <?php if(auth()->user()->image): ?>
                        <img src="<?php echo e(asset(auth()->user()->image)); ?>" class="img-preview img-fluid mb-3 col-sm-5 d-block" width="30">
                    <?php else: ?>
                        <img class="img-profile rounded-circle" src="<?php echo e(asset('/img/undraw_profile.svg')); ?>">
                    <?php endif; ?>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="/profile">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        <?php else: ?>
            <li class="nav-item">
                <a href="/login" class="nav-link <?php echo e($active === 'login' ? 'active' : ''); ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Login
                </a>
            </li>
        <?php endif; ?>

    </ul>

</nav>
<!-- End of Topbar --><?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>