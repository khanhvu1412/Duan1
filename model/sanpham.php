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
        $sql.=" and tensp like '%".$kyw."%'";
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
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh != "") {
        $sql = " update sanpham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "', img = '" . $hinh . "' where id = " . $id;
    } else {
        $sql = " update sanpham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "' where id = " . $id;
    }
    pdo_execute($sql);
}


?>