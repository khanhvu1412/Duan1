<div class="main-container no-sidebar">
        <div class="container">
            <div class="main-content">
                <div class="page-title">
                    <h3>Giỏ hàng</h3>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <table class="shop_table cart">
                            <thead>
                                <tr>
                                    <th colspan="2" class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng</th>
                                    <th class="product-remove">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><img src="images/products/1.png" alt=""></td>

                                    <td class="product-name"><a href="#">Oversize Fit Trousers Sneaker</a></td>
                                    <td>85.000 VNĐ</td>
                                    <td><input class="qty" type="text" value="+1"></td>
                                    <td>85.000 VNĐ</td>
                                    <td class="product-remove"><a href="#"><i class="fa-regular fa-trash-can"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="product-thumbnail"><img src="images/products/2.jpg" alt=""></td>
                                    <td class="product-name"><a href="#">Oversize Fit Trousers Sneaker</a></td>
                                    <td>85.000 VNĐ</td>
                                    <td><input class="qty" type="text" value="+1"></td>
                                    <td>85.000 VNĐ</td>
                                    <td class="product-remove"><a href="#"><i class="fa-regular fa-trash-can"></i></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="box-coupon">
                            <div class="coupon">
                                <h3 class="coupon-box-title">Phiếu giảm giá</h3>
                                <div class="inner-box">
                                    <input type="text" name="ma_giam_gia" class="input-text" id="ma_giam_gia" value="" placeholder="Mã giảm giá">
                                    <input type="submit" class="button" name="ap_dung_ma_giam_gia" value="Áp dụng">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="box-cart-total">
                            <h2 class="title">Tổng</h2>
                            <table>
                                <tr>
                                    <td>Tổng phụ</td>
                                    <td><span class="price">170.000 VNĐ</span></td>
                                </tr>
                                <tr>
                                    <td>Giao hàng</td>
                                    <td>
                                        <label><input name="shipping" type="checkbox"> Miễn phí vận chuyển</label>
                                        <label>
                                            <input name="shipping" type="checkbox">Giao hàng tận nơi
                                        </label>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <td>Tổng: </td>
                                    <td><span class="price">320.000 VNĐ</span></td>
                                </tr>
                            </table>
                            <button class="button medium">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include '3hopcn.php'; ?>
    </div>