<!-- <link rel="stylesheet" type="text/css" href="css/form.css"> -->

<?php

session_start();
ob_start();
include("../model/pdo.php");
include("../model/taikhoan.php");
include("../model/binhluan.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");
include("../model/sptheomua.php");
include("../model/donhang.php");
include("global.php");

include("header.php");

// if (!isset($_SESSION['mycart']))
//     $_SESSION['mycart'] = [];



if (!isset($_SESSION['mycart'])) {
    $_SESSION['mycart'] = [];
}

if (isset($_GET['act']) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {

        case "dangky":

            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $nguoidung = $_POST['nguoidung'];
                $matkhau = $_POST['matkhau'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];

                $img = $_FILES['img']['name'];
                $target_dir = "../upload_file/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    //echo "Load ảnh thành công";
                } else {
                    //echo "Upload ảnh không thành công";
                }

                insert_taikhoan($nguoidung, $matkhau, $email, $img, $diachi, $sdt);

            }
            include "view/taikhoan/dangky.php";
            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $nguoidung = $_POST['nguoidung'];
                $matkhau = $_POST['matkhau'];
                $checkuser = checkuser($nguoidung, $matkhau);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header("Location: index.php");
                }
                if (!$checkuser) {
                    echo "Tài khoản hoặc mật khẩu không chính xác";
                }
                $thongbao = "Tài khoản không tồn tại. Vui lòng nhập lại";


            }
            include("dangnhap.php");
            break;

        case 'tkcanhan':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $taikhoan = loadone_taikhoan($id);

                // $dssp = loadall_sanpham("", $iddm);

                // $sanphamShop = loadall_shop();
                // $sanpham = loadone_sanpham($_GET['id']);

                // $listsanpham = loadall_sanpham($kyw, $iddm);

            }
            $taikhoan = loadone_taikhoan($id);
            include('view/tkcanhan.php');
            break;
        case "capnhattk":
            // if(isset($_GET['id'])&&$_GET['id']>0){

            // }
            if (isset($_POST['capnhattk'])) {
                $id = $_POST['id'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];

                $img = $_FILES['img']['name'];
                $target_dir = "../upload_file/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    //echo "Load ảnh thành công";
                } else {
                    //echo "Upload ảnh không thành công";
                }
                update_taikhoan_user($id, $email, $img, $diachi, $sdt);
                // $thongbao = "Cập nhật thành công";
                header("Location:index.php?act=tkcanhan");

            }
            $taikhoan = loadone_taikhoan($id);
            // $listtaikhoan = loadall_taikhoan();

            include "view/capnhattk.php";
            break;

        case "doimk":
            // if(isset($_GET['id'])&&$_GET['id']>0){

            // }
            if (isset($_POST['doimk'])) {
                $id = $_POST['id'];
                $matkhau = $_POST['matkhau'];

                update_matkhau($id, $matkhau);
                header("Location:index.php?act=tkcanhan");

            }
            $taikhoan = loadone_taikhoan($id);
            // $listtaikhoan = loadall_taikhoan();

            include "view/doimk.php";
            break;


        case "sanpham":
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }

            $listsanpham = loadall_sanpham($kyw, $iddm);
            $listdanhmuc = loadall_danhmuc();
            include("view/sanpham.php");
            break;

        case "chitietsp":

            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);

            }

            $sanphamtop6 = load_sanpham_top6();
            include("view/chitietsp.php");
            break;


        case "timkiemdm":
            if (isset($_GET['iddm']) && ($_GET['iddm']) > 0) {
                $iddm = $_GET['iddm'];
                $danhmuc = loadone_danhmuc($_GET['iddm']);
            } else {
                $iddm = 0;
            }
            $listsanpham = loadall_sanpham("", $iddm);
            include "view/timkiemdm.php";
            break;

        case "sptheomua":
            if (isset($_GET['id_sptheomua']) && ($_GET['id_sptheomua']) > 0) {
                $id_sptheomua = $_GET['id_sptheomua'];
                $sptheomua = loadone_sptheomua($_GET['id_sptheomua']);
            } else {
                $id_sptheomua = 0;
            }
            $listsptheomua = loadall_sptheomua();
            $listsp_theomua = loadall_sp_theomua("", $id_sptheomua);
            include "view/sphamtheomua.php";
            break;


        case "lienhe":
            include("view/menu/lienhe.php");
            break;
        case "about":
            include("view/menu/about.php");
            break;

        case "thanhtoan":
            
            if (isset($_POST['kyw']) && $_POST['kyw'] != "") {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }

            $dssp = loadall_sanpham("", $iddm);
            $listsanpham = loadall_sanpham($kyw, $iddm);
            $sanphamtop5 = loadall_sanpham_top5();
            include("view/thanhtoan.php");
            break;


        case 'addgiohang':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $giasp = $_POST['giasp'];
                $soluong = 1;
                $thanhtien = ((int) $soluong * (int) $giasp);
                $sanphamadd = [$id, $tensp, $img, $giasp, $thanhtien];
                array_push($_SESSION['mycart'], $sanphamadd);
            }
            // $sanphamtop6 = load_sanpham_top6();
            include('view/menu/giohang.php');
            break;


        case "deletecart":
            if (isset($_GET['id'])) {
                array_splice($_SESSION['mycart'], $_GET['id'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header("Location: index.php?act=addgiohang");
            break;






        default:
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            ;
            $listsptheomua = loadall_sptheomua();
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include("home.php");
            break;

    }
} else {
    if (isset($_POST['listok']) && ($_POST['listok'])) {
        $kyw = $_POST['kyw'];
        $iddm = $_POST['iddm'];
    } else {
        $kyw = "";
        $iddm = 0;
    }
    ;
    $sanphamtop5 = loadall_sanpham_top10();
    $listdanhmuc = loadall_danhmuc();
    $listsptheomua = loadall_sptheomua();
    $listsanpham = loadall_sanpham($kyw, $iddm);
    $sanphamShop = loadall_shop();
    include("home.php");
}

include("footer.php");
ob_end_flush();
?>