<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = ".././upload_file/" . $img;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height='200'>";
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
            <div class="function-back">
                <a href="index.php?act=listsp"><input type="submit" class="btn btn-primary"
                        value="Quay lại trang sản phẩm"></a>
            </div>
            <div class="table-responsive">
                <div class="row">

                    <div class="container">
                        <div class="list-product-img">
                            <img src="../../upload_file/"<?= $img ?> alt="">
                        </div>

                    </div>

                    <div class="container">
                        <div class="list-product-img">
                            <?= $img ?>
                        </div>
                        
                    </div>

                </div>


            </div>
        </div>
    </div>

</div>
<!--End Content -->

</div>