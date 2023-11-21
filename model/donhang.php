<?php


// function insert_donhang($tendm)
// {
//     $sql = "insert into donhang(tendm) values('$tendm')";
//     pdo_execute($sql);
// }


function delete_donhang($id)
{
    $sql = "delete from donhang where id=" . $id;
    pdo_execute($sql);
}

// function loadall_trangthai()
// {
//     $sql = "select * from trangthai_donhang order by id_trangthai asc";
//     $listtrangthai = pdo_query($sql);
//     return $listtrangthai;
// }

// function loadone_trangthai($id_trangthai)
// {
//     $sql = "select * from donhang where id=" . $id_trangthai;
//     $trangthaidonhang = pdo_query_one($sql);
//     return $trangthaidonhang;
// }




function loadall_donhang()
{
    $sql = "select * from donhang order by id asc";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}

function loadone_donhang($id)
{
    $sql = "select * from donhang where id=" . $id;
    $donhang = pdo_query_one($sql);
    return $donhang;
}



function update_donhang($id, $tentk, $tensp, $gia, $diachi_giaohang, $thoigian_mua , $id_trangthai_donhang)
{
    $sql = " update donhang set tentk = '" . $tentk . "', tensp ='" . $tensp . "', gia = '" . $gia . "', diachi_giaohang = '".$diachi_giaohang."', thoigian_mua= '".$thoigian_mua."' , id_trangthai_donhang = '" . $id_trangthai_donhang . "'  where id= " . $id;
    pdo_execute($sql);
}
?>