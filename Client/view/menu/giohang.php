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
                                <th class="product-remove">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = 0;

                            foreach ($_SESSION['mycart'] as $cart) {
                                $hinh = '../upload_file/' . $cart[2] . '';
                                $linksp = 'index.php?act=chitietsp';
                                $xoa = 'index.php?act=deletecart&id=' . $id . '';
                                
                                echo '<tr>
                                        <td class="product-thumbnail"><img src="' . $hinh . '" alt=""></td>

                                        <td class="product-name"><a href="#">' . $cart[1] . '</a></td>
                                        <td class="product-price"><a href="#">' . $cart[4] . '.000 VNĐ</a></td>
                                        <td class="product-remove"><a href=' . $xoa . ' onclick="return confirmDeletegh()"><i class="fa-regular fa-trash-can"></i></a></td> 
                                    </tr>';

                                $id += 1;
                            }
                            ;
                            ?>
                        </tbody>
                    </table>
                    <!-- <div class="box-coupon">
                        <div class="coupon">
                            <h3 class="coupon-box-title">Phiếu giảm giá</h3>
                            <div class="inner-box">
                                <input type="text" name="ma_giam_gia" class="input-text" id="ma_giam_gia" value=""
                                    placeholder="Mã giảm giá">
                                <input type="submit" class="button" name="ap_dung_ma_giam_gia" value="Áp dụng">
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="box-cart-total">
                        <h2 class="title">Tổng đơn hàng</h2>
                        <table>

                            <tr>
                                <?php
                                $tong = 0;
                                foreach ($_SESSION['mycart'] as $cart) {
                                    $tong += $cart[4];
                                    $count = count($_SESSION['mycart']);
                                }
                                echo '<p>Số lượng x' . $count . ' </p> 
                                <p> Tổng: ' . $tong . '.000 VNĐ</p>';
                                ?>

                            </tr>

                            <tr>
                                <td>Giao hàng</td>
                                <td>
                                    <label><input name="shipping" type="radio"> Miễn phí vận chuyển</label>
                                   
                                </td>
                            </tr>
                            <tr class="order-total">
                                <?php
                                $tong = 0;
                                foreach ($_SESSION['mycart'] as $cart) {
                                    $tong += $cart[4];
                                }
                                echo '
                                <td>Tổng: </td>
                                <td><span class="price" style ="color: red">' . $tong . '.000 VNĐ</span></td>';

                                ?>

                            </tr>
                        </table>
                        <a href="index.php?act=thanhtoan"><button class="button medium">Thanh toán</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
function confirmDeletegh() {
    if (confirm("Bạn có muốn xóa sản phẩm này không?")) {
        document.location = "index.php?act=listsp";
    } else {
        return false;
    }
}
</script>

    <?php include '3hopcn.php'; ?>
</div>