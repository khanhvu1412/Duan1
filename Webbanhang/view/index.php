<?php

include("header.php");
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'tkcanhan':
            include('taikhoan/tkcanhan.php');
            break;

        

        case "sanpham":
            include("sanpham.php");
            break;

        case "chitietsp":
            include("chitietsp.php");
            break;

        case "lienhe":
            include("menu/lienhe.php");
            break;

        case "thanhtoan":
            include("cart/thanhtoan.php");
            break;

        case 'about':
            include('menu/about.php');
            break;

        case 'blog':
            include('menu/blog.php');
            break;

        case 'giohang':
            include('menu/giohang.php');
            break;


        default:
            include("home.php");
            break;

    }
} else {
    include("home.php");
}

include("footer.php");
