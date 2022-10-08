<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            {{ config('app.name') }}
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <div class="sidebar-heading">
        Main Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Admin Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Akun Pengguna</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Role</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        System Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Terjemahan</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="login.html">Kategori</a>
                <a class="collapse-item" href="register.html">Menu</a>
                <a class="collapse-item" href="forgot-password.html">Halaman</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Personalisasi</span>
        </a>
    </li>
    
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Audit Menu
    </div>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Model Log</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Authenticate Log</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>System Log</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Database Log</span>
        </a>
    </li>
</ul>