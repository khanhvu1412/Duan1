<?php

// in danh sách
function insert_binhluan($id_sp, $id_nguoidung, $noidung)
{
    // $sql = "insert into binhluan() values()";
    // pdo_execute($sql);
    {
        $date = date(' d-m-Y');
        $sql = "
                INSERT INTO binhluan(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
                VALUES ('$noidung','$id_nguoidung','$id_sp','$date'); ";
        
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
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
// sửa danh mục
function update_binhluan($id, $id_nguoidung, $noidung)
{

    $sql = " update binhluan set id_nguoidung = '$id_nguoidung', noidung = '$noidung'  where id= " . $id;
    pdo_execute($sql);
}

?>