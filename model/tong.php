<?php

function tinhtongsp(){
    $sql = "select Count(*) as total from sanpham";
    $tongsp = pdo_query($sql);
    return $tongsp;
}

function tinhtongdm(){
    $sql = "select Count(*) as total from danhmuc";
    $tongdm = pdo_query($sql);
    return $tongdm;
}

function tinhtongtk(){
    $sql = "select Count(*) as total from taikhoan";
    $tongtk = pdo_query($sql);
    return $tongtk;
}

function tinhtongbl(){
    $sql = "select Count(*) as total from binhluan";
    $tongbl = pdo_query($sql);
    return $tongbl;
}
?>