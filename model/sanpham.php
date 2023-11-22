<?php

function insert_sanpham($tensp, $giasp, $hinh, $mota, $soluong, $luotxem, $trangthai, $iddm)
{
    $sql = "insert into sanpham (tensp, giasp, img , mota, soluong, luotxem, trangthai, iddm) values ('$tensp', '$giasp', '$hinh', '$mota','$soluong','$luotxem','$trangthai', '$iddm' )";
    pdo_execute($sql);

}

function loadall_sanpham_top5(){
    $sql = "select * from sanpham where 1 order by giasp asc limit 0,5";
    $sanphamtop5 = pdo_query($sql);
    return $sanphamtop5;
}

function loadall_shop($kyw = " ", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and tensp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by giasp asc";
    // $sql = "select * from sanpham where 1 order by id desc ";
    $sanphamShop = pdo_query($sql);
    return $sanphamShop;
}

function load_sanpham_khac($id, $iddm)
{
    $sql = "select * from sanpham where id != $id  and iddm = $iddm  ";
    $sanphamkl = pdo_query($sql);
    return $sanphamkl;
}



function delete_sapham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}

function load_danhmuc()
{
    $sql = "select * from danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadall_sanpham_1($kyw = " ", $iddm = 0){
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and tensp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by giasp desc";
    $listsanpham1 = pdo_query($sql);
    return $listsanpham1;
}

function loadall_sanpham($kyw = " ", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and tensp like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm ='" . $iddm . "'";
    }
    $sql .= " order by giasp desc";

    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id= " . $id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

// function load_ten_dm($iddm)
// {
//     if ($iddm > 0) {
//         $sql = "select * from danhmuc where id=" . $iddm;
//         $danhmuc = pdo_query_one($sql);
//         extract($danhmuc);
//         return $tendm;
//     } else {
//         return "";
//     }
// }


function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $soluong, $luotxem, $trangthai, $hinh)
{
    if ($hinh != "") {
        $sql = " update sanpham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "', soluong='".$soluong."', luotxem='".$luotxem."', trangthai='".$trangthai."', img = '" . $hinh . "' where id = " . $id;
    } else {
        $sql = " update sanpham set iddm = '" . $iddm . "' , tensp = '" . $tensp . "', giasp = '" . $giasp . " ', mota = '" . $mota . "', soluong='".$soluong."', luotxem='".$luotxem."', trangthai='".$trangthai."' where id = " . $id;
    }
    pdo_execute($sql);
}


?>