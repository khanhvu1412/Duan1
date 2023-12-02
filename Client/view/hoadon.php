<?php
if (isset($donhang) && is_array($donhang)) {
    extract($donhang);
}
if (isset($_SESSION['user'])) {
    $nguoidung = $_SESSION['user']['nguoidung'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
} else {
    $name = "";
    $diachi = "";
    $email = "";
    $sdt = "";
}
?>
<main class="wrapper-bill">
    <h1 class="box_title" style="text-align: center;">Hoá đơn</h1>
    <div class="bills">
        <div class="bill-information">
            <h3 class="box_title text-center">Thông tin đơn hàng</h3>
            <div class="box-bill " style="min-height: 20px;">
                <p>Mã đơn hàng: N4-
                    <?= $id ?>
                </p>
                <p>Ngày đặt hàng:
                    <?= $thoigian_mua ?>
                </p>
                <p>Phương thức thanh toán:
                    <?= $pt_thanhtoan === 0 ? "Chuyển khoản" : "Thanh toán khi giao hàng" ?>
                </p>
            </div>
            <h3 class="box_title text-center">Thông tin đặt hàng</h3>
            <div class="box-bill " style="min-height: 20px;">
                <p>Người dùng:
                    <?= $nguoidung ?>
                </p>
                <p>Địa chỉ:
                    <?= $diachi ?>
                </p>
                <p>Email:
                    <?= $email ?>
                </p>
                <p>Số điện thoại:
                    <?= $sdt ?>
                </p>
            </div>

        </div>
        <div class="bill-table">
            <h3 class="box_title text-center">Chi tiết đơn hàng</h3>
            <table style="background-color: #fff;" border=" 1px">
                <tr>
                    <th width="200px" class="text-center">Ảnh</th>
                    <th width="250px" class="text-center">Tên sản phẩm</th>
                    <th width="150px" class="text-center">Đơn giá</th>
                    <th width="100px" class="text-center">Số lượng</th>
                    <th width="150px" class="text-center">Ngày đặt hàng</th>
                    <th width="150px" class="text-center">Trạng thái</th>
                </tr>
                <?php
                foreach ($giohang as $value):
                    extract($value);
                    ?>
                    <tr>
                        <td style="padding: 10px" class="text-center"><img src="../upload_file/<?= $img ?>" width="120px" />
                        </td>
                        <td style="padding: 10px" class="text-center">
                            <?= $tensp ?>
                        </td>
                        <td style="padding: 10px" class="text-center">
                            <?= $giasp ?>.000 ₫
                        </td>
                        <td style="padding: 10px" class="text-center">
                            <?= $soluong ?>
                        </td>
                        <td style="padding: 10px" class="text-center">
                            <?= $thoigian_mua ?>
                        </td>
                        <td style="padding: 10px" class="text-center">
                            <?= ($id_trangthai_donhang == 0 ? '<p style="color: orange">Chờ xác nhận</p>' : '<p style="color: red;">Hủy bỏ</p>') ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <?php
            $tong = 0;
            foreach ($giohang as $value) {
                extract($value);
                $tong += $giasp;
            }
            echo "<h3 style='margin: 15px 0px'>Tổng số tiền: " . $tong . ".000 ₫</h3>";
            ?>
        </div>
    </div>
</main>

<?php include 'menu/3hopcn.php'; ?>