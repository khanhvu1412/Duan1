<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin </title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">

                <div class="sidebar-brand-text mx-3">
                    <h3>Admin</h3>
                </div>
            </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Chức năng
            </div>

            <li class="nav-item">
                <a class="nav-link" href="index.php?act=listtk">
                    <i class="fas fa-fw fa-user-circle"></i>
                    <span>Quản lý tài khoản</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=listdm">
                    <i class="fas fa-fw fa-clipboard"></i>
                    <span>Quản lý danh mục</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=listsp">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Quản lý sản phẩm</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=listbl">
                    <i class=" fas fa-fw fa-comments "></i>
                    <span>Quản lý bình luận</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?act=thongke">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Thống kê</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php?act=giohang">
                    <!-- <i class="fas fa-fw "></i> -->
                    <i class="fas fa-fw fa-solid fa-basket-shopping"></i>
                    <span>Đơn hàng</span></a>
            </li>


            <hr class="sidebar-divider d-none d-md-block">


            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Search" aria-describedby="basic-addon2" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-flex align-items-center">
                            <div>
                                <!-- <a href="dangky.html"> Đăng ký </a>/ -->
                                Admin 
                                <!-- <a href="dangnhap.php"> Đăng nhập </a> -->

                            </div>
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">

                                </span>

                                <div>
                                    <img class="img-profile rounded-circle" src="img/undraw_profile.svg">

                                </div>


                            </a>
                        </li>
                    </ul>
                </nav>
                