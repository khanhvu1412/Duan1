<?php
include "../model/pdo.php" ;
include "../model/sanpham.php" ;

include "header.php" ;

// contronler
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {


 

        // Tài khoản
        case "listtk":
            include "taikhoan/list.php";
            break;

        case "updatetk":
            include "taikhoan/update.php";
            break;

        case "suatk":
            include "taikhoan/update.php";
            break;

        case "xoatk":
            include "taikhoan/list.php";
            break;

        // Danh mục
        case "listdm":
            include "danhmuc/list.php";
            break;

        case "adddm":
            include "danhmuc/add.php";
            break;

        case "updatedm":
            include "danhmuc/update.php";
            break;

        case "suadm":
            include "danhmuc/update.php";
            break;

        case "xoadm":
            include "danhmuc/list.php";
            break;


        // Sản phẩm
        case "listsp":
            
            $listsanpham=loadall_sanpham();
            include "sanpham/list.php" ;
            break ; 

        case "addsp":
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                // $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    // $hinh = $_FILES['hinh']['name'];
                    // $target_dir = "../upload/";
                    // $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    //     if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //         echo "Bạn đã load ảnh thành công";
                    //     } else {
                    //         echo "Upload ảnh không thành công";
                    //     }
                        insert_sanpham($tensp, $giasp,  $mota);
                    // $tenloai = $_POST['tenloai'];
                    // insert_sanpham($tenloai);
                    $thongbao = "Thêm thành công";

            }
            $listsanpham = loadall_sanpham();
            include "sanpham/add.php" ;
            break;

        // case "xoasp":
        //     if(isset($_GET['id']) && ($_GET['id'] > 0)) {
        //         // delete_sapham($_GET('id'));
        //     }
        //     $listsanpham = loadall_sanpham();
        //     include "sanpham/list.php" ;
        //     break;

        case "suasp":
            if(isset($_GET['id']) && ($_GET['id'] > 0)) {
                // $dm = loadone_sanpham($_GET('id'));
            }
            include "sanpham/update.php" ;
            break;

        // case "updatesp":
        //     if(isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
        //         // $tenloai = $_POST['tenloai'];
        //         // $id = $_POST['id'];

        //         // update_sanpham($id, $tenloai);
        //         // $thongbao = 'Cập nhật thành công';
            
        //     }
        //     $listsanpham = loadall_sanpham();
        //     include "sanpham/update.php";
        //     break;







        // Bình luận
        case "listbl":
            include "binhluan/list.php" ;
            break;

        case "suabl":
            include "binhluan/update.php" ;
            break;

        case "xoabl":
            include "binhluan/list.php" ;
            break;

        // Thống kê
        case "thongke":
            include "thongke/list.php" ;
            break;

        case "bieudo":
            include "thongke/bieudo.php" ;
            break;

        // Giỏ hàng
        case "giohang":
            include "giohang/giohang.php" ;
            break;

        case "suagh":
            include "giohang/update.php" ;
            break;

        case "xoagh":
            include "giohang/giohang.php" ;
            break;

        default:
            include "home.php" ;
            break;
    }
} else {
    include "home.php";
}



include "footer.php";
?>