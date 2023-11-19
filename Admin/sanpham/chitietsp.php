<?php

if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = ".././upload_file/" . $img;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height='500px' width='auto'>";
} else {
    $img = "Chưa có ảnh";
}

?>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Chi tiết sản phẩm</h4>
        </div>

        <div class="card-body">
               
            <div class="table-responsive">
                
            
                
                
                    
                    <div class="container" style="display: flex; ">
                        <div class="list-product-img">
                            <?= $img ?>
                        </div>
                        <div class="list-product-text" style="padding-left: 50px">
                        <h2><label for="">Mã sản phẩm : <?= $id ?> </label></h2>
                        <h2><label for="">Tên danh mục:
                                <?php foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    if ($iddm === $id) {
                                        echo $tendm;
                                    } else {
                                        echo "";
                                    }
                                } ?>
                            </label></h2>
                        <h2><label for="">Tên sản phẩm: <?= $tensp ?> </label></h2>
                        <h2><label for="">Giá sản phẩm: <?= $giasp ?> </label></h2>
                        <h2><label for="">Mô tả: <?= $mota ?> </label></h2>
                            
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                     <div class="function-back">
                    <a href="index.php?act=listsp"><input type="submit" class="btn btn-primary"
                            value="Quay lại trang sản phẩm"></a>
                </div>
                
                
                


            </div>
        </div>
    </div>



    
    <br>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Bình luận</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $suabl = "index.php?act=suabl&id=" . $id;
                            $xoabl = "index.php?act=xoabl&id=" . $id;
                            $hinhpath = "../upload_file/" . $img;


                            echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $id_nguoidung. '</td>
                                <td>' . $noidung. ' </td>
                                <td>' . $ngaybinhluan . '</td>
                                <td> 
                                    <a href="' . $suabl . '"><input type="button" class=" form-control btn btn-warning mt-2" value="Sửa"></a> 
                                    <a href="' . $xoabl . '"  onclick="return confirmDeletebl()"><input type="button" class=" form-control btn btn-danger mt-2" value="Xóa"></a>
                                </td> 
                                </tr>';

                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDeletebl() {
            if (confirm("Bạn có muốn xóa bình luận này không")) {
                document.location = "index.php?act=listbl";
            } else {
                return false;
            }
        }
    </script>

    

</div>
<!--End Content -->

</div>