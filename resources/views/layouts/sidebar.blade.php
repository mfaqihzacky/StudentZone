<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <img src="{{ asset('logo/studentzone.svg') }}" height="200px">
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $active === 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    @can('admin')

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <li class="nav-item {{ $active === 'mata kuliah' ? 'active' : '' }}">
        <a class="nav-link" href="/matakuliah">
            <i class="fa-solid fa-book-open"></i>
            <span>Mata Kuliah</span></a>
    </li>

    <li class="nav-item {{ $active === 'anggota' ? 'active' : '' }}">
        <a class="nav-link" href="/anggota">
            <i class="fa-solid fa-person"></i>
            <span>Anggota</span></a>
    </li>

    <li class="nav-item {{ $active === 'pengumuman' ? 'active' : '' }}">
        <a class="nav-link" href="/pengumuman">
            <i class="fa-regular fa-newspaper"></i>
            <span>Pengumuman</span></a>
    </li>
    @endcan

    <li class="nav-item" {{ $active === 'tugas' ? 'active' : '' }}>
        <a class="nav-link" href="/tugas">
            <i class="fa-solid fa-list-check"></i>
            <span>Tugas</span></a>
    </li>
    {{-- <li class="nav-item {{ $active === 'kelompok' ? 'active' : '' }}">
        <a class="nav-link" href="/kelompok">
            <i class="fa-solid fa-people-group"></i>
            <span>Kelompok</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    {{-- <li class="nav-item" {{ $active === 'kalender' ? 'active' : '' }}>
        <a class="nav-link" href="/kalender">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Kalender</span></a>
    </li> --}}

    <li class="nav-item" {{ $active === 'materi' ? 'active' : '' }}>
        <a class="nav-link" href="/materi">
            <i class="fa-solid fa-book"></i>
            <span>Materi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    {{-- <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}

</ul>


<!-- End of Sidebar -->
