<?php
// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect if user not logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Load CSS + JS links
include 'links.php';
?>

<!-- HEADER -->
<nav class="app-header navbar navbar-expand bg-body border-bottom">
    <div class="container-fluid">

        <!-- Left Navbar -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>

            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Home</a>
            </li>

            <li class="nav-item d-none d-md-block">
                <a href="#" class="nav-link">Contact</a>
            </li>

            <li class="nav-item d-none d-md-block">
                <a href="./logout.php" class="nav-link">Logout</a>
            </li>
        </ul>

        <!-- Right User Menu -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="./dist/assets/img/user2-160x160.jpg"
                         class="user-image rounded-circle shadow" alt="User Image">
                    <span class="d-none d-md-inline">
                        <?= $_SESSION['username']; ?>
                    </span>
                </a>

                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary">
                        <img src="./dist/assets/img/user2-160x160.jpg"
                             class="rounded-circle shadow" alt="User Image">
                        <p>
                            <?= $_SESSION['username']; ?>
                            <small>Member since Nov. 2023</small>
                        </p>
                    </li>
                </ul>
            </li>
        </ul>

    </div>
</nav>

<!-- SIDEBAR -->
<aside class="app-sidebar bg-dark text-white shadow" data-bs-theme="dark">

    <div class="sidebar-brand p-3">
        <a href="./dashboard.php" class="brand-link text-decoration-none text-white">
            <img src="./dist/assets/img/AdminLTELogo.png"
                 alt="AdminLTE Logo"
                 class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light ms-2">Admin Panel</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-3">
            <ul class="nav nav-pills flex-column" data-lte-toggle="treeview" role="menu">

                <li class="nav-item">
                    <a href="./dashboard.php" class="nav-link">
                        <i class="nav-icon bi bi-speedometer2"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./add_blog.php" class="nav-link">
                        <i class="nav-icon bi bi-journal-text"></i>
                        <p>Blogs</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./users.php" class="nav-link">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Users</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./category.php" class="nav-link">
                        <i class="nav-icon bi bi-tags"></i>
                        <p>Categories</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
