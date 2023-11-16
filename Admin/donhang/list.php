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
                            <th>Giá tiền</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>



                    <?php
                        foreach ($listdonhang as $donhang) {
                            extract($donhang);
                            $suadh = "index.php?act=suadh&id=" . $id;
                            $xoadh = "index.php?act=xoadh&id=" . $id;

                            echo '
                                <tr>
                                <td>' . $id . '</td>
                                <td>' . $tentk . '</td>
                                <td>' . $tensp . ' </td>
                                <td>' . $gia . ' VNĐ</td>
                                <td>' .($trangthai === 1 ? "<p style='background-color: yellow; color: black; '>Mới đặt hàng</p>" :
                                        "<p style='background-color: green; color: white;'>Đã thanh toán</p>"  ).'</td>
                                <td>  
                                   <a href=" index.php?act=chitietdh&id= '.$id.'"><input type="button" class=" form-control btn btn-secondary" value="Xem đơn hàng"></a> 
                                    <a href="' . $suadh . '"><input type="button" class=" form-control btn btn-warning mt-2" value="Sửa"></a> 
                                    <a href="' . $xoadh . '" ><input type="button" class=" form-control btn btn-danger mt-2" value="Xóa"></a>
                                </td> 
                                </tr>';

                        }
                        ?>
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- <script>
    function confirmDelete() {
        if (confirm("Bạn có muốn xóa không")) {
            document.location = "index.php?act=listdm";
        } else {
            return false;
        }
    }
    </script> -->
<!--End Content -->

</div>