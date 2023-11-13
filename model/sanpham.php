<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
{
    $sql = "insert into sanpham (tensp, giasp, hinh , mota, iddm) values ('$tensp', '$giasp', '$hinh','$mota', '$iddm)";
    pdo_execute($sql);
   
}

function delete_sapham($id)
{
    $sql = "delete form sanpham where id=" . $id;
}

function loadall_sanpham()
{
    $sql = "select * from sanpham  order by id asc ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "select * from sanpham id= " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh != "") {
        $sql = "update sanham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "', img = '" . $hinh . "' where id = " . $id;
    } else {
        $sql = "update sanham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "' where id = " . $id;
    }
    pdo_execute($sql);
}


?>