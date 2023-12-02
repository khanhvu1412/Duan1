<?php


function insert_giohang($id_tk, $id_sp, $tensp, $img, $giasp, $soluong, $id_donhang)
{
    $sql = "insert into giohang values(null,'$id_tk','$id_sp','$tensp','$img','$giasp','$soluong','$id_donhang')";
    return pdo_execute($sql);
}


function load_hoadon_user($id)
{
    $sql = " SELECT 
                giohang.id, 
                giohang.id_tk,
                giohang.id_sp, 
                giohang.tensp, 
                giohang.img, 
                giohang.giasp,
                giohang.soluong, 
                giohang.id_donhang, 
                donhang.thoigian_mua, 
                donhang.id_trangthai_donhang 
        FROM giohang
        LEFT JOIN donhang 
        ON giohang.id_donhang = donhang.id
        WHERE id_tk = $id ";
        //ORDER BY id DESC";
    $giohang = pdo_query($sql);
    return $giohang;
}

function load_cart($id_donhang){
    $sql = "select * from giohang where id_donhang = $id_donhang";
    $giohang = pdo_query($sql);
    return $giohang;
}

function load_hoadon($id_donhang){
    $sql = "select * from giohang where id_tk = $id_donhang";
    $giohang = pdo_query($sql);
    return $giohang;
}