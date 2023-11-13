<?php

include("view/header.php");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'tkcanhan':
            include('taikhoan/tkcanhan.php');
            break;

        case "sanpham":
            include("view/sanpham.php");
            break;

        case "chitietsp":
            include("view/chitietsp.php");
            break;

        case "lienhe":
            include("view/menu/lienhe.php");
            break;

        case "thanhtoan":
            include("view/cart/thanhtoan.php");
            break;

        case 'about':
            include('view/menu/about.php');
            break;

        case 'blog':
            include('view/menu/blog.php');
            break;

        case 'giohang':
            include('view/menu/giohang.php');
            break;


        default:
            include("home.php");
            break;

    }
} else {
    include("view/home.php");
}

include("view/footer.php");
