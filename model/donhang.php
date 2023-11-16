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



function update_donhang($id, $tentk, $tensp, $gia, $trangthai)
{
    $sql = " update donhang set tentk = '" . $tentk . "', tensp ='" . $tensp . "', gia = '" . $gia . "', trangthai = '" . $trangthai . "'  where id= " . $id;
    pdo_execute($sql);
}
?>