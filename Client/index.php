<?php


include("../model/taikhoan.php");

include("header.php");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case 'tkcanhan':
            include('view/tkcanhan.php');
            break;

        
        case "dangky":
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $nguoidung = $_POST['nguoidung'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                insert_taikhoan( $nguoidung,  $email, $matkhau, $diachi, $sdt);
                $thongbao = "Đăng ký thành công";
            }
            include "view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            // if(isset($_POST['dangnhap'])&& ($_POST['dangnhap'])){
            //     dangnhap($_POST['email'], $_POST['matkhau']);
            //     include('view/home.php');
            // }
            include('dangnhap.php');
            break;

        case 'dangxuat':
            dangxuat();
            include('../Webbanhang/view/taikhoan/dangnhap.php');
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
            include("view/thanhtoan.php");
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
    include("home.php");
}

include("footer.php");
