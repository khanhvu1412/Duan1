<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tài khoản</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Quản lý tài khoản</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <h5><label for="">Tìm kiếm</label></h5>
                <div>

                    <form class="d-none d-sm-inline-block form-inline navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                aria-describedby="basic-addon2" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Vai trò</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Đỗ Khánh Vũ</td>
                            <td>**********</td>
                            <td>vudkph37645@fpt.edu.vn</td>
                            <td>Phương Canh Hà Nội</td>
                            <td>09123743818</td>
                            <td>Admin</td>
                            <td>
                                <a href="index.php?act=suatk"><input type="button" class="btn btn-primary" value="Sửa"></a>
                                <a href="index.php?act=xoatk"><input type="button" class="btn btn-primary" value="Xóa"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Đỗ Khánh Vũ</td>
                            <td>**********</td>
                            <td>vudkph37645@fpt.edu.vn</td>
                            <td>Phương Canh Hà Nội</td>
                            <td>09123743818</td>
                            <td>Nhân viên</td>
                            <td>
                                <a href="index.php?act=suatk"><input type="button" class="btn btn-primary" value="Sửa"></a>
                                <a href="index.php?act=xoatk"><input type="button" class="btn btn-primary" value="Xóa"></a>
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