<?php


function insert_taikhoan($id, $nguoidung, $matkhau, $email, $diachi, $sdt, $id_role)
{
    $sql = "INSERT INTO `taikhoan` ( `id`, `nguoidung`, `matkhau`, `email`, `diachi`, `sdt`, `id_role `) VALUES ('$id','$nguoidung', '$matkhau', '$email', '$diachi', '$sdt', '$id_role  '); ";
    pdo_execute($sql);
}

function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id asc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function update_taikhoan($id, $nguoidung, $matkhau, $email, $diachi, $sdt, $id_role)
{
    $sql = "update taikhoan set nguoidung = '" . $nguoidung . "', matkhau = '" . $matkhau . "',email = '" . $email . "',diachi = '" . $diachi . "',sdt = '" . $sdt . "',nguoidung = '" . $nguoidung . "',id_role = '" . $id_role . "' where id =" . $id;
    pdo_execute($sql);
}

function loadone_taikhoan($id){
    $sql = "select * from taikhoan where id = " . $id;
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;

}
function delete_taikhoan($id)
{

    $sql = "delete from taikhoan where id =" . $id;
    pdo_execute($sql);
}


?>