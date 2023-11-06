<?php


include("header.php");

// contronler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {

        case "listtk":
            include("taikhoan/list.php");
            break;

        case "listdm":
            include("danhmuc/list.php");
            break;

        case "listsp":
            include("sanpham/list.php");
            break;

        case "listbl":
            include("binhluan/list.php");
            break;

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