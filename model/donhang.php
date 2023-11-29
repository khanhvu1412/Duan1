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

function loadall_trangthai()
{
    $sql = "select * from trangthai_donhang ";
    $listtrangthai = pdo_query($sql);
    return $listtrangthai;
}

// function loadone_trangthai($id_trangthai)
// {
//     $sql = "select * from donhang where id=" . $id_trangthai;
//     $trangthaidonhang = pdo_query_one($sql);
//     return $trangthaidonhang;
// }




function loadall_donhang()
{
    $sql = "select dh.id as dh_id,
                   dh.tentk as dh_tentk,
                   dh.tensp as dh_tensp,
                   dh.gia as dh_gia,
                   dh.diachi_giaohang as dh_dcgh,
                   dh.thoigian_mua as dh_tgmua,
                   dh.soluong as dh_soluong,
                   ttdh.ten_trangthai as ttdh_tentt
                   from donhang as dh 
                   inner join trangthai_donhang as ttdh
                   on ttdh.id_trangthai = dh.id_trangthai_donhang";
    $listdonhang = pdo_query($sql);
    return $listdonhang;
}



// function loadall_donhang()
// {
//     $sql = "SELECT 
//                 dh.id as dh_id,
//                 tk.nguoidung as tk_nguoidung,
//                 sp.tensp as sp_tensp,
//                 sp.giasp as sp_giasp,
//                 dh.diachi_giaohang as dh_dcgh,
//                 dh.thoigian_mua as dh_tgmua,
//                 dh.soluong as dh_soluong,
//                 ttdh.ten_trangthai as ttdh_tentt
//                 from donhang as dh 
//                 inner join trangthai_donhang as ttdh
//                 on ttdh.id_trangthai = dh.id_trangthai_donhang
//                 inner join taikhoan as tk
//                 on tk.id = dh.id_tk
//                 inner join sanpham as sp
//                 on sp.id = dh.id_sp
                
//                 order by dh.id_trangthai_donhang desc";
//     $listdonhang = pdo_query($sql);
//     return $listdonhang;
// }



function loadone_donhang($id)
{
    $sql = "select * from donhang where id=" . $id;
    $donhang = pdo_query_one($sql);
    return $donhang;
}



function update_donhang($id, $tentk, $tensp, $gia, $diachi_giaohang, $thoigian_mua, $soluong , $id_trangthai_donhang)
{
    $sql = " update donhang set tentk = '" . $tentk . "', tensp ='" . $tensp . "', gia = '" . $gia . "', diachi_giaohang = '".$diachi_giaohang."', thoigian_mua= '".$thoigian_mua."', soluong='".$soluong."' , id_trangthai_donhang = '" . $id_trangthai_donhang . "'  where id= " . $id;
    pdo_execute($sql);
}
?>