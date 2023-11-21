<?php
function insert_taikhoan($nguoidung, $matkhau, $email, $img, $diachi, $sdt)
{
    $sql = "insert into taikhoan(nguoidung, matkhau, email,img, diachi, sdt) values ('$nguoidung', '$matkhau', '$email','$img','$diachi', '$sdt')";
    pdo_execute($sql);
    // header("location:index.php?act=listsp");
}

// Đăng nhập / đăng xuất
// function dangnhap($nguoidung, $matkhau)
// {
//     $sql = "select * from taikhoan where nguoidung = '$nguoidung' and matkhau='$matkhau '";

//     $taikhoan = pdo_query_one($sql);
//     return $taikhoan;
// }

// function dangxuat()
// {
//     unset($_SESSION["nguoidung"]);
// }

function checkuser($nguoidung, $matkhau)
{
    $sql = "select * FROM taikhoan WHERE nguoidung ='" . $nguoidung . "' AND matkhau ='" . $matkhau . "'";

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

function update_taikhoan_admin($id, $nguoidung, $matkhau, $email, $diachi, $sdt, $id_role)
{
    $sql = "update taikhoan set nguoidung = '" . $nguoidung . "', matkhau = '" . $matkhau . "',email = '" . $email . "', diachi = '" . $diachi . "', sdt = '" . $sdt . "', id_role = '" . $id_role . "' where id =" . $id;
    pdo_execute($sql);
}

function update_taikhoan_user($id, $nguoidung, $email, $img, $diachi, $sdt)
{
    $sql = "update taikhoan set nguoidung = '" . $nguoidung . "', email = '" . $email . "', img = '" . $img . "',  diachi = '" . $diachi . "', sdt = '" . $sdt . "'  where id =" . $id;
    pdo_execute($sql);
}

function update_matkhau($id, $matkhau)
{
    $sql = "update taikhoan set matkhau ='".$matkhau."' where id =" . $id;
    pdo_execute($sql);
}

function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id =" . $id;
    pdo_execute($sql);
}

function checkemail($email)
{
    $sql = "SELECT * FROM user WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

?>