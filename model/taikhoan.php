<?php
function insert_taikhoan($nguoidung, $matkhau, $email, $img, $diachi, $sdt)
{
    $sql = "insert into taikhoan(nguoidung, matkhau, email,img, diachi, sdt) values ('$nguoidung', '$matkhau', '$email','$img','$diachi', '$sdt')";
    pdo_execute($sql);
    
}

function loadall_role()
{
    $sql = "select * from role ";
    $listrole = pdo_query($sql);
    return $listrole;
}



function checkuser($nguoidung, $matkhau)
{
    $sql = "select * FROM taikhoan WHERE nguoidung ='" . $nguoidung . "' AND matkhau ='" . $matkhau . "'";

    $sp = pdo_query_one($sql);
    return $sp;
}


function loadall_taikhoan()
{
    $sql = "select
                    tk.id as tk_id,
                    tk.nguoidung as tk_nguoidung,
                    tk.matkhau as tk_matkhau,
                    tk.email as tk_email,
                    tk.img as tk_img,
                    tk.diachi as tk_diachi,
                    tk.sdt as tk_sdt,
                    r.name_role as r_name_role
                    from taikhoan as tk
                    inner join role as r
                    on r.id_role = tk.id_role
                    order by tk.id asc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}




function loadone_taikhoan($id)
{
    $sql = "select * from taikhoan where id = " . $id;
    $listtaikhoan = pdo_query_one($sql);
    return $listtaikhoan;

}

function update_taikhoan_admin($id, $nguoidung, $matkhau, $email, $diachi, $sdt)
{
    $sql = "update taikhoan set nguoidung = '" . $nguoidung . "', matkhau = '" . $matkhau . "',email = '" . $email . "', diachi = '" . $diachi . "', sdt = '" . $sdt . "' where id =" . $id;
    pdo_execute($sql);
}

// function loadall_role(){
//     $sql = "select * from role " ;
//     $listrole = pdo_query($sql);
//     return $listrole;
// }

function update_taikhoan_user($id, $email, $img, $diachi, $sdt)
{
    $sql = "update taikhoan set email = '" . $email . "', img = '" . $img . "',  diachi = '" . $diachi . "', sdt = '" . $sdt . "'  where id =" . $id;
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


?>