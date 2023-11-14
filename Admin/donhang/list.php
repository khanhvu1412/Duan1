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
                            <th>Ảnh</th>
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
                            <td></td>
                            <td>300.000 VNĐ</td>
                            <td>
                                <div class="trangthai form-cotrol btn-success">Đã thanh toán</div>
                            </td>
                            <td>
                                <a href="index.php?act=chitietdh"><input type="button"
                                        class="form-control btn btn-primary" value="Chi tiết"></a>
                                <a href="index.php?act=suadh"><input type="button"
                                        class="form-control btn btn-warning mt-2" value="Sửa"></a>
                                <a href="index.php?act=xoadh"><input type="button"
                                        class="form-control btn btn-danger mt-2" value="Xóa"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Phạm Gia Huy</td>
                            <td>Quần Âu</td>
                            <td></td>
                            <td>450.000 VNĐ</td>
                            <td>
                                <div class="trangthai form-cotrol btn-warning">Đang giao hàng</div>
                            </td>
                            <td>
                                <a href="index.php?act=chitietdh"><input type="button"
                                        class="form-control btn btn-primary" value="Chi tiết"></a>
                                <a href="index.php?act=suagh"><input type="button" class=" form-control btn btn-warning mt-2"
                                        value="Sửa"></a>
                                <a href="index.php?act=xoagh"><input type="button"
                                        class=" form-control btn btn-danger mt-2" value="Xóa"></a>
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