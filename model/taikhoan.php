<?php
function insert_taikhoan($id, $nguoidung, $matkhau, $email, $diachi, $sdt, $id_role )
{
    $sql = "INSERT INTO `taikhoan` ( `id`, `nguoidung`, `matkhau`, `email`, `diachi`, `sdt`, `id_role `) VALUES ('$id','$nguoidung', '$matkhau', '$email', '$diachi', '$sdt', '$id_role  '); ";
    pdo_execute($sql);
}

function loadall_taikhoan(){
    $sql="select * from taikhoan order by id asc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

?>