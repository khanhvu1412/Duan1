<?php

function insert_sanpham($tensp, $giasp,   $mota)
{
    $sql = "insert into `sanpham` (`tensp`, `giasp`,  `mota`) value ('$tensp', '$giasp','$mota');";
    pdo_execute($sql);
}

// function delete_sapham($id)
// {
//     $sql = "delete form sanpham where id=" . $id;
// }

function loadall_sanpham()
{
    $sql = "select * from sanpham  order by id desc ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

// function loadone_sanpham()
// {
//     $sql = "select * from sanpham id= " . $id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }

// function update_sanpham()
// {
//     $sql = "update sanpham set name '". $tenloai ."' where id=  "  .$id ;
//     pdo_execute($sql);
// }


?>