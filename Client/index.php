<?php


include("../model/taikhoan.php");
include("../model/binhluan.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("global.php");

include("header.php");

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        // case 'tkcanhan':
        //     include('view/tkcanhan.php');
        //     break;


        case "dangky":
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $nguoidung = $_POST['nguoidung'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $id_role = $_POST['$id_role'];

                
                insert_taikhoan($nguoidung, $email, $matkhau, $diachi, $sdt, $id_role);
                $thongbao = "Đăng ký thành công";
            }
            include "../taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                dangnhap($_POST['email'], $_POST['matkhau']);
                include('view/home.php');
            }
            break;


        case 'quenmk':
            // if (isset($_POST['guiemail']) && $_POST['guiemail']) {
            //     $email = $_POST['email'];

            //     $checkemail = checkemail($email);
            //     if (is_array($checkemail)) {
            //       $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
            //     } else {
            //       $thongbao = "Email này không tồn tại";
            //     }
            //   }

            include('view/taikhoan/quenmk.pjp');
            break;

        case 'dangxuat':
            dangxuat();
            include('../Clientview/taikhoan/dangnhap.php');
            break;

        case "sanpham":
            include("view/sanpham.php");
            break;

        case "chitietsp":
            if(isset($_GET['id'])&&$_GET['id']>0){
                $sanpham = loadone_sanpham($_GET['id']);
            }
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
