<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Giỏ hàng</h1>
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
                            <th>ID</th>
                            <th>Email</th>
                            <th>Passworh</th>
                            <th>Họ tên</th>
                            <th>Ảnh</th>
                            <th>Số điện thoại</th>
                            <th>Vai trò</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td>Mã</td>
                            <td>Email</td>
                            <td>Password</td>
                            <td>Họ tên</td>
                            <td>Ảnh</td>
                            <td>Số điện thoại</td>
                            <td>Vai trò</td>
                            <td>Hành động</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>vudkph37645@fpt.edu.vn</td>
                            <td>**********</td>
                            <td>Đỗ Khánh Vũ</td>
                            <td><img src="img/3.jpg" width="150"></td>
                            <td>09123743818</td>
                            <td>Admin</td>
                            <td>
                                <a href="index.php?act=suatk"><input type="button" class="btn btn-primary"
                                        value="Sửa"></a>
                                <a href="index.php?act=xoatk"><input type="button" class="btn btn-primary"
                                        value="Xóa"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>huygp@gmail.com</td>
                            <td>**********</td>
                            <td>Phạm Gia Huy</td>
                            <td><img src="img/4.jpg" width="150"></td>
                            <td>03278382748</td>
                            <td>Nhân viên</td>
                            <td>
                                <input type="button" class="btn btn-primary" value="Sửa">
                                <input type="button" class="btn btn-primary" value="Xóa">
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