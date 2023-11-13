<?php

function insert_sanpham($tensp, $giasp, $hinh , $mota, $iddm)
{
    $sql = "insert into sanpham (tensp, giasp, img , mota, iddm) values ('$tensp', '$giasp', '$hinh', '$mota', '$iddm' )";
    pdo_execute($sql);
   
}

function delete_sapham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}

function loadall_sanpham($kyw = " ", $iddm = 0)
{
    $sql="select * from sanpham where 1"; 
    if($kyw!=""){
        $sql.=" and tendm like '%".$kyw."%'";
    }
    if($iddm > 0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id asc";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id= " . $id;
    $dm = pdo_query($sql);
    return $dm;
}

function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh != "") {
        $sql = "update sanham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "', img = '" . $img . "' where id = " . $id;
    } else {
        $hinh = "update sanham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "' where id = " . $id;
    }
    pdo_execute($sql);
}


?>