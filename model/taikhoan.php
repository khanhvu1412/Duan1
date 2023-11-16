<?php
session_start();
function insert_taikhoan($nguoidung, $email, $matkhau, $diachi, $sdt, $id_role)
{
    $sql = "insert into taikhoan values ( null, '$nguoidung', '$email', '$matkhau',  '$diachi', '$sdt', '$id_role')";
    pdo_execute($sql);
    header("location:index.php?act=listsp");
}

// Đăng nhập / đăng xuất
function dangnhap($email, $matkhau)
{
    $sql = "select * from taikhoan where email = '$email' and matkhau='$matkhau '";

    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {

        $_SESSION['email'] = $taikhoan;

    } else {

        return "Thông tin tài khoản sai";
    }
}
function dangxuat()
{
    unset($_SESSION["eamil"]);
}

function checkuser($email, $matkhau)
{
    $sql = "select * FROM taikhoan WHERE email='" . $email . "' AND matkhau ='" . $matkhau . "'";

    $sp = pdo_query_one($sql);
    return $sp;
}
// end 

function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id asc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}



function loadone_taikhoan($id)
{
    $sql = "select * from taikhoan where id = " . $id;
    $listtaikhoan = pdo_query_one($sql);
    return $listtaikhoan;

}

function update_taikhoan($id, $nguoidung, $matkhau, $email, $diachi, $sdt, $id_role)
{
    $sql = "update taikhoan set nguoidung = '" . $nguoidung . "', matkhau = '" . $matkhau . "',email = '" . $email . "',diachi = '" . $diachi . "',sdt = '" . $sdt . "',nguoidung = '" . $nguoidung . "',id_role = '" . $id_role . "' where id =" . $id;
    pdo_execute($sql);
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id =" . $id;
    pdo_execute($sql);
}


?>