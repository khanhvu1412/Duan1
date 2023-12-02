<?php

function insert_donhang($nguoidung, $sdt, $email, $diachi, $thoigian_mua, $pt_thanhtoan, $soluong)
{
    $sql = "insert into donhang values (null,'$nguoidung' ,'$sdt','$email','$diachi','$thoigian_mua','$pt_thanhtoan','$soluong',0)";
    return pdo_execute_return_lastInsertId($sql);
}


function delete_donhang($id)
{
    $sql = "delete from donhang where id=" . $id;
    pdo_execute($sql);
}

function loadall_trangthai()
{
    $sql = "select * from trangthai_donhang ";
    $listtrangthai = pdo_query($sql);
    return $listtrangthai;
}


function loadall_donhang()
{
    $sql = "select 
                id,
                nguoidung,
                sdt,
                email,
                diachi,
                thoigian_mua,
                soluong,
                ten_trangthai
        from donhang 
        inner join trangthai_donhang
        on trangthai_donhang.id_trangthai = donhang.id_trangthai_donhang";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}


function loadone_donhang($id)
{
    $sql = "select * from donhang where id=" . $id;
    $donhang = pdo_query_one($sql);
    return $donhang;
}


function update_donhang($id, $nguoidung, $sdt, $email, $diachi, $thoigian_mua, $soluong, $id_trangthai_donhang)
{
    $sql = "update donhang set nguoidung = '" . $nguoidung . "', sdt = '" . $sdt . "', email = '" . $email . "', diachi = '" . $diachi . "', thoigian_mua= '" . $thoigian_mua . "', soluong='" . $soluong . "' , id_trangthai_donhang = '" . $id_trangthai_donhang . "'  where id= " . $id;
    pdo_execute($sql);
}
?>