<?php 

    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
      if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";
      }else{
        $hinh="no photo";
      }

?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Thêm sản phẩm</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <br>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Mã sản phẩm</label>
                        <input type="text" class="form-control" name="masp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="tensp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPrice" class="form-label">Giá</label>
                        <input type="text" class="form-control" name="masp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImg" class="form-label">Ảnh</label>
                        <br>
                        <input type="file" name="hinh">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescribe" class="form-label">Mô tả</label>
                        <textarea class="form-control" rows="10" name="mota"></textarea>
                    </div>

                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" class="btn btn-primary" value="Danh sách"></a>

                    <?php
                    if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>

</div>

</div>