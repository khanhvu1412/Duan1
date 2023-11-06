<?php


include("header.php");

// contronler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        // Tài khoản
        case "updatetk":
            include("taikhoan/update.php");
            break;
        case "listtk":
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
        

        // Sản phẩm
        case "listsp":
            include("sanpham/list.php");
            break;
        case "addsp":
            include("sanpham/add.php");
            break;
        case "updatesp":
            include("sanpham/update.php");
            break;

        // Bình luận
        case "listbl":
            include("binhluan/list.php");
            break;

        // Thống kê
        case "thongke":
            include("thongke/list.php");
            break;

        case "thongke":
            include("thongke/bieudo.php");
            break;
    }
} else {
    include("home.php");
}



include("footer.php");
?>