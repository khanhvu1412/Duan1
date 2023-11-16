<?php 

// in danh sách
function insert_binhluan()
{
    $sql = "insert into binhluan() values()";
    pdo_execute($sql);
}

// xóa danh mục
function delete_binhluan($id)
{
    $sql = "delete from binhluan where id=" . $id;
    pdo_execute($sql);
}


function loadall_binhluan()
{
    $sql = "select * from binhluan order by id asc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function loadone_binhluan($id)
{
    $sql = "select * from binhluan where id=" . $id;
    $binhluan = pdo_query_one($sql);
    return $binhluan;
}
// sửa danh mục
function update_dbinhluan($id)
{
    
        $sql = " update danhmuc set  where id= " . $id;
    pdo_execute($sql);
}

?>