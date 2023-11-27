<?php
if (is_array($sanpham)) {
    extract($sanpham);
}

if (isset($_SESSION['nguoidung']) && (is_array($_SESSION['nguoidung']))) {
    extract($_SESSION['nguoidung']);
}


?>

<div class="container">
    <div class="breadcrumbs style2">
        <a href="index.php">Home</a>
        <span>Chi tiết sản phẩm</span>
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
                            <?= $tensp ?>
                        </h3>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <span class="price">
                            <ins>
                                <?= $giasp ?> VNĐ
                            </ins>
                        </span>
                        <div class="meta"><span class="text-primary">
                            </span>
                            <?= ($trangthai === 0 ? "<p style='color: green;'>Còn hàng</p>" : "<p style='color: red;'>Hết hàng</p>") ?>
                            </span>
                        </div>
                        <div class="meta"><span class="text-primary">
                            <span>Còn <?= $soluong ?></span>
                        </div>
                        <div class="short-descript">
                            <?= $mota ?>

                        </div>

                        <form class="cart-form" enctype="multipart/form-data" method="post">
                            <div class="quantity">
                                <input style="border: 1px solid #000" type="number" name="" id="">
                            </div>
                            <a class="button button-add-cart" data-quantity="1" href="index.php?act=thanhtoan">Mua</a>

                            <a class="wishlist button" href="#" style="margin-left: 5px;"><i
                                    class="fa-solid fa-cart-plus" style="padding-top: 10px ;"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <iframe src="./view/binhluanform.php?id_sp=<?php if (is_array($sanpham)) {
        extract($sanpham);
    }
    echo $id; ?>" width="100%" height="300px" frameborder="0"></iframe>
    
 
    <div class="comment">



        <div class="product-slide upsell-products">
            <div class="section-title text-center">
                <h3>SẢN PHẨM KHÁC</h3>
            </div>
            <ul class="owl-carousel" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'
                data-autoplay="true" data-loop="true" data-items="4" data-dots="false" data-nav="false"
                data-margin="30">
                <?php
                foreach ($sanphamtop6 as $sanpham) {

                    extract($sanpham);
                    $linksp = "index.php?act=chitietsp&id=" . $id;

                    echo '
                 <li class="product-item">
                    <div class="product-inner">
                        <div class="product-thumb">
                            <a href="' . $linksp . '"><img src="../upload_file/' . $img . '" alt=""></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="#">' . $tensp . '
                                </a></h3>
                            <span class="price">
                                <ins style="color:red"> ' . $giasp . '  VNĐ
                                </ins>
                            </span>
                            <a href="#" class="button">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </li>
                
                
                ';



                } ?>
            </ul>
        </div>
    </div>

    <!--END CONTAINER-->
    <!-- ./tab -->

    <?php include "menu/3hopcn.php" ?>
</div>