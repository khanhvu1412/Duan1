<?php
// if (is_array($taikhoan)) {
//     extract($taikhoan);
// }


?>

<div class="container">
    <div class="breadcrumbs style2">
        <a href="index.php">Home</a>
    </div>
    <div class="row">
        <div class="main-content col-sm-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="product-detail-image style2">
                    <div class="main-image-wapper">
                            <img class="main-image" src="../upload_file/<?= $img ?>" height="450px" width="600px"
                                alt="">
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
                            Số điện thoại
                            <?= $sdt ?>
                        </h3>
                        <br>
                        <span class="price">
                            Địa chỉ:
                            <?= $diachi ?>
                        </span>
                        <br>
                        <a href="index.php?act=capnhattk"><input type="submit" class="button button-add-cart" value="Cập nhật tài khoản"></a>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<!-- tab -->



<?php include "menu/3hopcn.php" ?>
</div>