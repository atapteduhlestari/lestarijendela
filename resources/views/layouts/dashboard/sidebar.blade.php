<ul class="navbar-nav bg-page sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Lestari <sup>Jendela</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ request()->is('product*') ? 'active' : '' }}">
        <a class="nav-link" href="/product">
            <i class="fas fa-chevron-right"></i>
            <span>Product</span></a>
    </li>
    <li class="nav-item {{ request()->is('project*') ? 'active' : '' }}">
        <a class="nav-link" href="/project">
            <i class="fas fa-chevron-right"></i>
            <span>Project</span></a>
    </li>
    <li class="nav-item {{ request()->is('post*') ? 'active' : '' }}">
        <a class="nav-link" href="/post">
            <i class="fas fa-chevron-right"></i>
            <span>Blog</span></a>
    </li>
    <li class="nav-item {{ request()->is('profile*') ? 'active' : '' }}">
        <a class="nav-link" href="/profile">
            <i class="fas fa-chevron-right"></i>
            <span>Profile</span></a>
    </li>
    <li class="nav-item {{ request()->is('faq*') ? 'active' : '' }}">
        <a class="nav-link" href="/faq">
            <i class="fas fa-chevron-right"></i>
            <span>FAQs</span></a>
    </li>
    <li class="nav-item {{ request()->is('highlight*') ? 'active' : '' }}">
        <a class="nav-link" href="/highlight">
            <i class="fas fa-chevron-right"></i>
            <span>Highlight</span></a>
    </li>

    <li class="nav-item {{ request()->is('branch*') ? 'active' : '' }}">
        <a class="nav-link" href="/branch">
            <i class="fas fa-chevron-right"></i>
            <span>Branch</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="/assets/img/logo.png" alt="logo lestari jendela">
    </div>

</ul>
<!-- End of Sidebar -->
