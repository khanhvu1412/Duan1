<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
$hinh = "../upload_file/" .$img ;
if (is_file($hinh)) {
    $img = "<img src='" . $hinh . "' height='200'>";
} else {
    $img = "no photo";
}


?>

<div class="container">
    <div class="breadcrumbs style2">
        <a href="index.php">Home</a> Tài khoản
    </div>
    <div class="row">
        <div class="main-content col-sm-12" style="border:1px soloid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="product-detail-image style2">
                    <div class="main-image-wapper">
                            <img class="main-image" src="<?= $hinh ?>"  alt="">
                        </div>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="product-details-right style2">
                        <h3 class="product-name">
                            Tên đăng nhập:
                            <?= $nguoidung ?>
                        </h3>
                        <br>
                        <h3 class="product-name">
                            Email:
                            <?= $email ?>
                        </h3>
                        <br>
                        <h3 class="product-name">
                            Số điện thoại:
                            <?= $sdt ?>
                        </h3>
                        <br>
                        <span class="price">
                            Địa chỉ:
                            <?= $diachi ?>
                        </span>
                        <br>
                        <a href="index.php?act=capnhattk"><input type="submit" class="button button-add-cart" value="Cập nhật tài khoản"></a>
                        <a href="index.php?act=doimk"><input type="submit" class="button button-add-cart" value="Đổi mật khẩu"></a>

                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<!-- tab -->



<?php include "menu/3hopcn.php" ?>
</div>