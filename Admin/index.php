<?php
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";

include "header.php";

// contronler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {




        // Tài khoản
        case "listtk":

            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;

        case "updatetk":

            include "taikhoan/update.php";
            break;

        case "xoatk":
            include "taikhoan/list.php";
            break;

        // Danh mục
        case "listdm":

            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case "adddm":
            if (isset($_POST["themmoi"]) && ($_POST["themmoi"])) {
                $tendm = $_POST["tendm"];
                insert_danhmuc($tendm);
                $thongbao = "Thêm thành công danh mục";
            }
            include "danhmuc/add.php";
            break;

        case "suadm":
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            
            include "danhmuc/update.php";
            break;

        case "updatedm":
            if (isset($_POST['capnhat']) && ($_POST['capnhat'] )) {
                $tendm = $_POST['tendm'];
                $id = $_POST['id'];
                update_danhmuc($id , $tendm);  
                $thongbao = "Cập nhật danh mục thành công";


            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/update.php";
            break;


        case "xoadm":
            if (isset($_GET['id']) && ($_GET['id'])) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;


        // Sản phẩm
        case "listsp":
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw='';
                $iddm=0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload_file/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    echo "Load ảnh thành công";
                } else {
                    echo "Upload ảnh không thành công";
                }
                insert_sanpham($tensp, $giasp, $hinh , $mota, $iddm);
                $thongbao = "Thêm thành công";

            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case "xoasp":
            if(isset($_GET['id']) && ($_GET['id'] > 0 )) {
                delete_sapham($_GET['id']);
            }
            $listsanpham = loadall_sanpham(" ", 0);
            include "sanpham/list.php" ;
            break;

        // case "suasp":
        //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        //         $sanpham = loadone_sanpham($_GET['id']));
        //     }
        //     include "sanpham/update.php";
        //     break;

        // case "updatesp":
        //     if(isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
        //         $tendm = $_POST['tendm'];
        //         $id = $_POST['id'];

        //         update_sanpham($id, $dm);
        //         $thongbao = 'Cập nhật thành công';

        //     }
        //     $listsanpham = loadall_sanpham(" ", 0);
        //     include "sanpham/update.php";
        //     break;







        // Bình luận
        case "listbl":
            include "binhluan/list.php";
            break;

        case "suabl":
            include "binhluan/update.php";
            break;

        case "xoabl":
            include "binhluan/list.php";
            break;

        // Thống kê
        case "thongke":
            include "thongke/list.php";
            break;

        case "bieudo":
            include "thongke/bieudo.php";
            break;

        // Giỏ hàng
        case "donhang":
            include "giohang/donhang.php";
            break;

        case "suadh":
            include "giohang/update.php";
            break;

        case "xoadh":
            include "giohang/donhang.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}



include "footer.php";
?>