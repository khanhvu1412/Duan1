<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bình luận</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Quản lý bình luận</h4>
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
                            <th>Iduser</th>
                            <th>Idpro</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>KH1</td>
                            <td>MT001</td>
                            <td>Quần áo rất đẹp và chất lượng</td>
                            <td>31/10/2023</td>
                            <td>
                                <a href="index.php?act=suabl"><input type="button" class="btn btn-primary" value="Sửa"></a>
                                <a href="index.php?act=xoabl"><input type="button" class="btn btn-primary" value="Xóa"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>KH2</td>
                            <td>DT003</td>
                            <td>Áo rất đẹp</td>
                            <td>06/11/2023</td>
                            <td>
                                <a href="index.php?act=suabl"><input type="button" class="btn btn-primary" value="Sửa"></a>
                                <a href="index.php?act=xoabl"><input type="button" class="btn btn-primary" value="Xóa"></a>
                            </td>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

</div>