<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Quản lý sản phẩm</h4>
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
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình</th>
                            <th>Mô tả</th>
                            <th>Lượt xem</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Áo polo ARIST</td>
                            <td><img src="../img/6.jpg" alt=""></td>
                            <td>Áo dành riêng cho phái nam</td>
                            <td>100</td>
                            <td>
                                <a href="index.php?act=suasp"><input type="button" class="btn btn-primary" value="Sửa"></a>
                                <a href="index.php?act=xoasp"><input type="button" class="btn btn-primary" value="Xóa"></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Quần âu GT-34</td>
                            <td><img src="../img/12.jpg" alt=""></td>
                            <td>Giảm 40% cho hôm nay</td>
                            <td>87</td>
                            <td>
                                <a href="index.php?act=suasp"><input type="button" class="btn btn-primary" value="Sửa"></a>
                                <a href="index.php?act=xoasp"><input type="button" class="btn btn-primary" value="Xóa"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="">
                    <a href="index.php?act=addsp"><input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                </form>
            </div>
        </div>
    </div>

</div>

</div>