<?php 

// in danh sách
function insert_danhmuc($tendm)
{
    $sql = "insert into danhmuc(tendm) values('$tendm')";
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
    $dm = pdo_query_one($sql);
    return $dm;
}
// sửa danh mục
function update_danhmuc($id, $tendm)
{
    $sql = " update danhmuc set tendm =' ". $tendm ." ' where id= " . $id;
    pdo_execute($sql);
}





//  function insert_danhmuc($tenloai){
//         $sql = "INSERT INTO danhmuc(tenloai) VALUES('$tenloai')";
     
//         pdo_execute($sql);
//     }
//     function delete_danhmuc($id){
//         $sql = "DELETE FROM danhmuc WHERE id =".$id; 
//         pdo_execute($sql);
//     }
//     function loadall_danhmuc(){
//         $sql = "SELECT * FROM danhmuc ORDER BY id desc ";
//         $listdanhmuc = pdo_query($sql);
//         return $listdanhmuc;
//     }
//     function loadone_danhmuc($id){
//         $sql = "SELECT * FROM danhmuc WHERE id =".$id; 
//         $dm = pdo_query_one($sql);
//         return $dm;
//     }
//     function update_danhmuc($id,$tenloai){
//         $sql = "UPDATE danhmuc SET tenloai ='".$tenloai."' WHERE id =".$id ;
//         pdo_execute($sql);
//     }
?>