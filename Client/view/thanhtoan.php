<div class="main-container no-sidebar">
    <div class="container">
        <div class="main-content">
            <div class="page-title">
                <h3>Thanh toán</h3>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-checkout">
                        <h5 class="form-title">ĐỊA CHỈ GIAO HÀNG</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <p><input type="text" placeholder="First Name"></p>
                            </div>
                            <div class="col-sm-6">
                                <p><input type="text" placeholder="Last Name"></p>
                            </div>
                        </div>
                        <p><input type="text" placeholder="Địa chỉ"></p>
                        <p><input type="text" placeholder="Thị trấn / Thành phố"></p>
                        <p><input type="text" placeholder="Số điện thoại"></p>

                    </div>
                    <div class="form-checkout checkout-payment">
                        <h5 class="form-title">Bạn muốn thanh toán</h5>
                        <div class="payment_methods">
                            <div class="payment_method">
                                <label><input name="payment_method" type="radio">Chuyển khoản trực tiếp</label>

                            </div>
                            <div class="payment_method">
                                <label><input name="payment_method" type="radio">Thanh toán khi giao hàng</label>

                            </div>
                            <div class="payment_method">
                                <label><input name="payment_method" type="radio">PAYPAL</label>
                            </div>

                            <a href="#"><button class="button medium">Gửi</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-checkout">
                        <h5 class="form-title">SẢN PHẢM CÓ THỂ BẠN THÍCH</h5>
                        <div class="row">

                            <table class="shop_table cart">
                                <tbody>

                                    <?php
                                    foreach ($sanphamtop5 as $sanpham) {
                                        extract($sanpham);

                                        $linksp = "index.php?act=chitietsp&id=" . $id;

                                        echo '
                                        <tr>
                                        <form action="index.php?act=addgiohang" method="post">
                                        <td class="product-thumbnail"><a href="' . $linksp . '"><img src="../upload_file/' . $img . '" alt=""></a></td>

                                        <td class="product-name"><a href="index.php?act=chitietsp" >' . $tensp . '</a></td>
                                        <td><span class ="price"><ins>' . $giasp . ' VNĐ</ins></span> </td>

                                        <td class="product-remove"></td>
                                        
                                        <td class="text-right"><input type="submit" name="addtocart"onclick="return confirmAddgh()"  value="Thêm vào giỏ hàng"></td>
                                        </form>
                                    </tr>
                                        ';
                                    }
                                    ?>


                                    <!-- <tr>
                                        <td class="product-thumbnail"><a href="index.php?act=chitietsp"><img
                                                    src="images/products/1.png" alt=""></a></td>

                                        <td class="product-name"><a href="index.php?act=chitietsp">Oversize Fit Trousers
                                                Sneaker</a></td>
                                        <td>85.000 VNĐ</td>

                                        <td class="product-remove"><a href="#"></a></td>
                                        <td class="text-right"><a class="button" href="#">Thêm vào gỏ hàng</a></td>
                                    </tr> -->

                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "menu/3hopcn.php"; ?>

    <script>
        function confirmAddgh() {
            if (confirm("Bạn thêm sản phẩm này vào giỏ hàng?")) {
                document.location = "index.php?act=listsp";
            } else {
                return false;
            }
        }
    </script>
</div>