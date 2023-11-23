<?php

// in danh sách
function insert_binhluan($id_sp, $id_nguoidung, $noidung,$ngaybinhluan )
{
    
    if (!empty($noidung)){
        
        $sql = "
                INSERT INTO binhluan 
                VALUES (null, '$noidung','$id_nguoidung','$id_sp','$ngaybinhluan'); ";
        
        pdo_execute($sql);
    }
}

// xóa danh mục
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}


function loadall_binhluan()
{
    // $sql = "select * from binhluan order by id asc";
    // $listbinhluan = pdo_query($sql);
    // return $listbinhluan;


    $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.nguoidung, binhluan.id_nguoidung, binhluan.id_sp, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_nguoidung = taikhoan.id
            LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id; 
        ";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function loadone_binhluan($id)
{
    // $sql = "select * from binhluan where id=" . $id;
    // $binhluan = pdo_query_one($sql);
    // return $binhluan;

    $sql = "
    SELECT binhluan.id, binhluan.noidung, taikhoan.nguoidung,  binhluan.ngaybinhluan FROM `binhluan` 
     JOIN taikhoan ON binhluan.id_nguoidung = taikhoan.id
     JOIN sanpham ON binhluan.id_sp = sanpham.id
    WHERE sanpham.id = $id;
";
    $binh_luan = pdo_query($sql);
    return $binh_luan;
}
// sửa danh mục
function update_binhluan($id, $id_nguoidung, $noidung)
{

    $sql = " update binhluan set id_nguoidung = '$id_nguoidung', noidung = '$noidung'  where id= " . $id;
    pdo_execute($sql);
}

?>