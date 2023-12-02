<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}

if ($img) {
    $hinh = "../upload_file/" .$img;
} else {
    $hinh = "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png";
}


?>

<div class="container">
    <div class="breadcrumbs style2">
        <a href="index.php">Home</a> Tài khoản
    </div>
    <div class="row">
        <div class="main-content col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="product-detail-image style2">

                        <div class="main-image-wapper">
                            <img class="main-image" src="<?= $hinh ?>" alt="">
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
                        <span class="product-name">
                            Địa chỉ:
                            <?= $diachi ?>
                        </span>
                        <br>
                        <a href="index.php?act=capnhattk"><input type="submit" style="margin-top:50px"
                                class="button button-add-cart" value="Cập nhật tài khoản"></a>
                        <a href="index.php?act=doimk"><input type="submit" style="margin-top:50px; margin-left: 10px;"
                                class="button button-add-cart" value="Đổi mật khẩu"></a>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<!-- tab -->



<?php include "menu/3hopcn.php" ?>
</div>