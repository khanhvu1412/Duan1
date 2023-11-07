<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh mục</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Quản lý danh mục</h4>
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
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th>Hành động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Áo</td>
                            <td>Áo gió</td>
                            <td>
                                <input type="button" class="btn btn-primary" value="Sửa">
                                <input type="button" class="btn btn-primary" value="Xóa">
                            </td>
                        </tr>
                        <tr>
                            <td>Quần</td>
                            <td>Quần âu</td>
                            <td>
                                <input type="button" class="btn btn-primary" value="Sửa">
                                <input type="button" class="btn btn-primary" value="Xóa">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="">
                    <a href="index.php?act=adddm"><input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                </form>
            </div>
        </div>
    </div>

</div>

</div>