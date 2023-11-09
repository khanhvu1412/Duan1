<?php


include("header.php");

// contronler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        // Tài khoản
        case "listtk":
            include("taikhoan/list.php");
            break;

        case "updatetk":
            include("taikhoan/update.php");
            break;

        case "suatk":
            include("taikhoan/update.php");
            break;

        case "xoatk":
            include("taikhoan/list.php");
            break;

        // Danh mục
        case "listdm":
            include("danhmuc/list.php");
            break;

        case "adddm":
            include("danhmuc/add.php");
            break;

        case "updatedm":
            include("danhmuc/update.php");
            break;

        case "suadm":
            include("danhmuc/update.php");
            break;

        case "xoadm":
            include("danhmuc/list.php");
            break;


        // Sản phẩm
        case "listsp":
            include("sanpham/list.php");
            break;

        case "addsp":
            include("sanpham/add.php");
            break;

        case "xoasp":
            include("sanpham/list.php");
            break;

        case "suasp":
            include("sanpham/update.php");
            break;

        case "updatesp":
            include("sanpham/update.php");
            break;

        // Bình luận
        case "listbl":
            include("binhluan/list.php");
            break;

        case "xoabl":
            include("binhluan/list.php");
            break;

        // Thống kê
        case "thongke":
            include("thongke/list.php");
            break;

        case "bieudo":
            include("thongke/bieudo.php");
            break;

        // Giỏ hàng
        case "giohang":
            include("giohang/giohang.php");
            break;

        case "suagh":
            include("giohang/update.php");
            break;

        case "xoagh":
            include("giohang/giohang.php");
            break;

        default:
            include("home.php");
            break;
    }
} else {
    include("home.php");
}



include("footer.php");
?>