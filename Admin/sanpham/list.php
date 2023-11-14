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
                <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Hình</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=" . $id;
                            $xoasp = "index.php?act=xoasp&id=" . $id;
                            $hinhpath = "../upload_file/" . $img;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='" . $hinhpath . "' height='90'>";
                            } else {
                                $hinh = "No img";
                            }

                            echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $tensp . '</td>
                                <td>' . $giasp . ' VNĐ</td>
                                <td>' . $hinh . '</td>
                                <td>' . $mota . '</td>
                                <td>  
                                   <a href=" index.php?act=chitietsp"><input type="button" class=" form-control btn btn-secondary" value="Xem sản phẩm"></a> 
                                    <a href="' . $suasp . '"><input type="button" class=" form-control btn btn-warning mt-2" value="Sửa"></a> 
                                    <a href="' . $xoasp . '"><input type="button" class=" form-control btn btn-danger mt-2" value="Xóa"></a>
                                </td> 
                                </tr>';

                        }
                        ?>


                        <!-- <tr>
                            <td>DM01</td>
                            <td>1</td>
                            <td>Áo polo ARIST</td>
                            <td><img src="../img/6.jpg" alt=""></td>
                            <td>Áo dành riêng cho phái nam</td>
                            <td>100</td>
                            <td>
                                <a href="index.php?act=suasp"><input type="button" class="btn btn-primary"
                                        value="Sửa"></a>
                                <a href="index.php?act=xoasp"><input type="button" class="btn btn-primary"
                                        value="Xóa"></a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
                <form action="">
                    <a href="index.php?act=addsp"><input type="button" class="btn btn-primary" value="Nhập thêm"></a>
                    <a href="index.php?act=listbl"><input type="button" class="btn btn-primary" value="Bình luận"></a>

                </form>
            </div>
        </div>
    </div>

</div>

</div>