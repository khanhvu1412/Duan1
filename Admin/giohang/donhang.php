<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Đơn hàng</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Các đơn đặt hàng</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
               <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Tên khách hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>Số điện thoại</th>
                            <th>Giá tiền</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Đỗ Khánh Vũ</td>
                            <td>Áo polo</td>
                            <td>09123743818</td>
                            <td>300.000 VNĐ</td>
                            <td> <div class="trangthai form-cotrol btn-success">Đã thanh toán</div></td>
                            <td>
                                <a href="index.php?act=suagh"><input type="button" class="btn btn-primary"
                                        value="Sửa"></a>
                                <a href="index.php?act=xoagh"><input type="button" class="btn btn-primary"
                                        value="Xóa"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Phạm Gia Huy</td>
                            <td>Quần Âu</td>
                            <td>09127357368</td>
                            <td>450.000 VNĐ</td>
                            <td> <div class="trangthai form-cotrol btn-warning">Đang giao hàng</div></td>
                            <td>
                                <a href="index.php?act=suagh"><input type="button" class="btn btn-primary"
                                        value="Sửa"></a>
                                <a href="index.php?act=xoagh"><input type="button" class="btn btn-primary"
                                        value="Xóa"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!--End Content -->

</div>