<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <img src="<?php echo e(asset('logo/studentzone.svg')); ?>" height="200px">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo e($active === 'dashboard' ? 'active' : ''); ?>">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <li class="nav-item <?php echo e($active === 'mata kuliah' ? 'active' : ''); ?>">
        <a class="nav-link" href="/matakuliah">
            <i class="fa-solid fa-book-open"></i>
            <span>Mata Kuliah</span></a>
    </li>

    <li class="nav-item <?php echo e($active === 'anggota' ? 'active' : ''); ?>">
        <a class="nav-link" href="/anggota">
            <i class="fa-solid fa-person"></i>
            <span>Anggota</span></a>
    </li>

    <li class="nav-item <?php echo e($active === 'pengumuman' ? 'active' : ''); ?>">
        <a class="nav-link" href="/pengumuman">
            <i class="fa-regular fa-newspaper"></i>
            <span>Pengumuman</span></a>
    </li>
    <?php endif; ?>

    <li class="nav-item" <?php echo e($active === 'tugas' ? 'active' : ''); ?>>
        <a class="nav-link" href="/tugas">
            <i class="fa-solid fa-list-check"></i>
            <span>Tugas</span></a>
    </li>
    

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    

    <li class="nav-item" <?php echo e($active === 'materi' ? 'active' : ''); ?>>
        <a class="nav-link" href="/materi">
            <i class="fa-solid fa-book"></i>
            <span>Materi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    

</ul>


<!-- End of Sidebar -->
<?php /**PATH D:\UNIVERSITASSEBELASMARET\Software\laragon\www\StudentZone\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>