<?php
function insert_binhluan($tendm)
{
    $sql = "insert into danhmuc(tendm) values('$tendm')";
    pdo_execute($sql);
}


function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}


function loadall_binhluan()
{
    $sql = "select * from binhluan order by id asc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}



function update_binhluan($id, $noidung)
{
    $sql = " update danhmuc set tendm = '" . $noidung . "' where id= " . $id;
    pdo_execute($sql);
}
?>