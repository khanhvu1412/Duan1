<?php
if (is_array($sanpham)) {
    extract($sanpham);
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
                            <!-- <del>125.00 ₫</del> -->
                        </span>
                        <div class="meta">
                            <span>Only 15 left 3</span>
                            <span>Availalbe: <span class="text-primary">In Stock</span></span>
                        </div>
                        <div class="short-descript">
                            <?= $mota ?>

                        </div>
                        <!-- <div class="select-color">
                            <label>MÀU</label>
                            <div class="inner">
                                <a href="#"><span style="background-color:#736357;"></span></a>
                                <a href="#"><span style="background-color:#bdb871;"></span></a>
                                <a href="#"><span style="background-color:#f26522;"></span></a>
                                <a href="#"><span style="background-color:#fff799;"></span></a>
                            </div>
                        </div>
                        <div class="select-size">
                            <label>SIZE </label>
                            <div class="inner">
                                <a class="active" href="#"><span>S</span></a>
                                <a href="#"><span>M</span></a>
                                <a href="#"><span>L</span></a>
                                <a href="#"><span>XL</span></a>
                                <a href="#"><span>XXL</span></a>
                            </div>
                        </div> -->

                        <form class="cart-form" enctype="multipart/form-data" method="post">
                            <div class="quantity">
                                <input style="border: 1px solid #000" type="number" name="" id="">
                            </div>
                            <a class="button button-add-cart" data-quantity="1" href="#">Mua</a>
                            <a class="wishlist button" href="#"><i class="fa-solid fa-cart-plus" style="padding-top: 10px ;"></i></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- tab -->
<div class="container">

    <div class="tab-details-product style2">

        <br>
        <div class="tab-container">
            <div class="binhluan">
                <span style="font-size: 35px">Bình luận</span>

                <table class="product-cart">

                    <tr>
                        <th>Tài khoản</th>
                        <th>Nội dung</th>
                        <th>Ngày bình luận</th>
                    </tr>

                    <tr>
                        <td>HEHE</td>
                        <td>HEHE</td>
                        <td>HEHE</td>
                    </tr>
                    <tr>
                        <td>HEHE</td>
                        <td>HEHE</td>
                        <td>HEHE</td>
                    </tr>
                    <tr>
                        <td>HEHE</td>
                        <td>HEHE</td>
                        <td>HEHE</td>
                    </tr>
                </table>
                <br>




                <div class="binhluan_content">
                    <div class="ndbinhluan"><input type="text" name="binhluan" height="20px" width="400px"
                            id="binhluan"></div>
                    <div class="nut"><a href="index.php?act=chitietsp"><input type="submit" value="Gửi"></a></div>
                </div>
            </div>
        </div>

    </div>


    <div class="product-slide upsell-products">
        <div class="section-title text-center">
            <h3>SẢN PHẨM KHÁC</h3>
        </div>
        <ul class="owl-carousel" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'
            data-autoplay="true" data-loop="true" data-items="4" data-dots="false" data-nav="false" data-margin="30">
            <?php
            //foreach ($sanphamcl as $spcl): ?>
            <!-- <li class="product-item">
                    <div class="product-inner">
                        <div class="product-thumb">
                            <a href="#"><img src="#" alt=""></a>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="#"><?php //$tensp ?></a></h3>
                            <span class="price">
                                <ins style="color:red"> <?php //$giasp ?> VNĐ</ins>
                            </span>
                            <a href="index.php?act=giohang" class="button">Thêm vào giỏ hàng</a>
                        </div>
                    </div>
                </li> -->

            <?php //endforeach; ?>
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/5.jpg" alt=""></a>

                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins style="color:red"> 85.00 ₫</ins>
                            <del>95.00 ₫</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/6.jpg" alt=""></a>

                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins style="color:red"> 85.00 ₫</ins>
                            <del>95.00 ₫</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/7.jpg" alt=""></a>

                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins style="color:red"> 85.00 ₫</ins>
                            <del>95.00 ₫</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
            <li class="product-item">
                <div class="product-inner">
                    <div class="product-thumb">
                        <a href="#"><img src="images/products/8.jpg" alt=""></a>

                    </div>
                    <div class="product-info">
                        <h3 class="product-name"><a href="#">London Star Sweatshirt</a></h3>
                        <span class="price">
                            <ins style="color:red"> 85.00 ₫</ins>
                            <del>95.00 ₫</del>
                        </span>
                        <a href="#" class="button">ADD TO CART</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<!--END CONTAINER-->
<!-- ./tab -->
<?php include "menu/3hopcn.php" ?>
</div>