<?php

if (is_array($sanpham)) {
    extract($sanpham);
}

$hinhpath = ".././upload_file/" . $img;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height='500px' width='500px'>";
} else {
    $img = "no photo";
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
        <br>

        <div class="card-body">

            <div class="table-responsive">
                <div class="row">



                    <div class="container">
                        <h2><label for="">Mã sản phẩm: <?= $id ?></label></h2>
                        <h2><label for="">Tên sản phẩm: <?= $tensp ?></label></h2>
                        <h2><label for="">Giá sản phẩm: <?= $giasp ?></label></h2>
                        <h2><label for="">Mô tả: <?= $mota ?></label></h2>

                        <div class="list-product-img">
                            <?= $img ?>
                        </div>



                    </div>


                </div>
                <br>
                <div class="function-back">
                    <a href="index.php?act=listsp"><input type="submit" class="btn btn-primary"
                            value="Quay lại trang sản phẩm"></a>
                </div>


            </div>
        </div>
    </div>

</div>
<!--End Content -->

</div>