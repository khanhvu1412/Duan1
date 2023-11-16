<?php

if (is_array($donhang)) {
    extract($donhang);
}

?>


<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Đơn hàng</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Chi tiết đơn hàng</h4>
        </div>
        <br>

        <div class="card-body">
            <div class="table-responsive">
                <div class="row">

                    <div class="container">
                        <div class="list-product-text" style="padding-left: 50px">
                            <h2><label for="">Mã đơn:
                                    <?= $id ?>
                                </label></h2>
                            <h2><label for="">Tên khách hàng:
                                    <?= $tentk ?>
                                </label></h2>
                            <h2><label for="">Tên sản phẩm:
                                    <?= $tensp ?>
                                </label></h2>
                            <h2><label for="">Giá sản phẩm:
                                    <?= $gia ?>
                                </label></h2>
                            <h2><label for="">Trạng thái:
                                    <?= $trangthai ?>
                                </label></h2>

                        </div>
                    </div>
                    <br>
                    <div class="function-back">
                        <a href="index.php?act=listdh"><input type="submit" class="btn btn-primary"
                                value="Quay lại trang đơn hàng"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--End Content -->

</div>