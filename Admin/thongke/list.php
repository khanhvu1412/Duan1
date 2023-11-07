<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống kê</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Thống kê sản phẩm</h4>
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
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã danh mục</th>
                            <th>Tên danh mục</th>
                            <th>Số lượng</th>
                            <th>Giá cao nhất</th>
                            <th>Giá thấp nhất</th>
                            <th>Giá trung bình</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Áo gió</td>
                            <td>30</td>
                            <td>120.000</td>
                            <td>52.200</td>
                            <td>200.000</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Áo thun</td>
                            <td>30</td>
                            <td>320.000</td>
                            <td>43.500</td>
                            <td>300.000</td>
                        </tr>
                    </tbody>
                </table>
                <form action="">

                    <a href="index.php?act=bieudo"><input type="button" class="btn btn-primary" value="Biểu đồ"></a>

                </form>
            </div>
        </div>
    </div>

</div>
</div>