<?php
//mendapatkan uri segment (divisi,karyawan,users) utk css active pada menu
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
$folder = "home";
if(isset($uri_segments[2])){
$folder = $uri_segments[2];
if(count($uri_segments) > 3){
    $folder = $uri_segments[3];
}
}
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href=".">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Mading Stella</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item " <?= $folder == 'home' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?= base_url() ?>home">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Home</span></a>
    </li>

    <li class="nav-item " <?= $folder == 'pengumuman' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?= base_url() ?>pengumuman">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Pengumuman</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item " <?= $folder == 'berita' ? 'class="active"' : '' ?>>
        <a class="nav-link" href="<?= base_url() ?>berita">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item " <?= $folder == 'home' ? 'class="artikel"' : '' ?>>
        <a class="nav-link" href="<?= base_url() ?>artikel">
            <i class="fas fa-fw fa-table"></i>
            <span>Artikel</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- top -->
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Siswa</span>
                <img class="img-profile rounded-circle"
                    src="<?= BASE_ASSETS ?>/assets/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- end -->