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
                <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên khách hàng</th>
                            <th>Sản phẩm</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $suabl = "index.php?act=suabl&id=" . $id;
                            $xoabl = "index.php?act=xoabl&id=" . $id;
                            $hinhpath = "../upload_file/" . $img;


                            echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $tenkh . '</td>
                                <td>' . $tensp . '</td>
                                <td>' . $giasp . ' VNĐ</td>
                                <td>' . $hinh . '</td>
                                <td>' . $mota . '</td>
                                <td> 
                                    <a href="' . $suabl . '"><input type="button" class=" form-control btn btn-warning mt-2" value="Sửa"></a> 
                                    <a href="' . $xoabl . '"  onclick="return confirmDeletebl()"><input type="button" class=" form-control btn btn-danger mt-2" value="Xóa"></a>
                                </td> 
                                </tr>';

                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function confirmDeletebl() {
            if (confirm("Bạn có muốn xóa bình luận này không")) {
                document.location = "index.php?act=listdm";
            } else {
                return false;
            }
        }
    </script>

</div>

</div>