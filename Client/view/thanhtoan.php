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
                        <!-- <div class="row"> -->
                        <!-- <div class="col-sm-6"> -->
                        <label for="">Họ tên:</label>
                        <p><input type="text" value="<?= $nguoidung ?>"></p>
                        <!-- </div> -->



                        <!-- <div class="col-sm-6">
                                <p><input type="text"e"></p>
                            </div> -->
                        <!-- </div> -->
                        <label for="">Email: </label>
                        <p><input type="text" value="<?= $email ?>"></p>

                        <label for="">Địa chỉ:</label>
                        <p><input type="text" value="<?= $diachi ?>"></p>

                        <label for="">Số điện thoại:</label>
                        <p><input type="text" value="<?= $sdt ?>"></p>

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
                                        <td><span class ="price" style="color:red;">' . $giasp . ' VNĐ</span> </td>

                                        <td class="product-remove"></td>
                                        
                                        <td class="text-right"><input type="submit" name="addtocart"onclick="return confirmAddgh()"  value="Thêm vào giỏ hàng"></td>
                                        </form>
                                    </tr>
                                        ';
                                    }
                                    ?>


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