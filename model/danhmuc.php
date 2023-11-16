<?php 

// in danh sách
function insert_danhmuc($tendm, $hinh)
{
    $sql = "insert into danhmuc(tendm, img) values('$tendm', '$hinh')";
    pdo_execute($sql);
}

// xóa danh mục
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}


function loadall_danhmuc()
{
    $sql = "select * from danhmuc order by id asc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where id=" . $id;
    $danhmuc = pdo_query_one($sql);
    return $danhmuc;
}
// sửa danh mục
function update_danhmuc($id, $tendm, $hinh)
{
    if ($hinh != "") {
        $sql = " update danhmuc set tendm = '". $tendm ."', img ='".$hinh."' where id= " . $id;
    } else {
        $sql = " update danhmuc set tendm = '". $tendm ."' where id= " . $id;
    }
    pdo_execute($sql);
}

?>