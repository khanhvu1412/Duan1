<?php
   
    // include "../model/binhluan.php";

    // $id_sp = $_REQUEST['id_sp'];
  //$binhluansp = load_binhluansp($id_sp);

?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Bình luận</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <br>
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên khách hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($listbinhluan as $binhluan):
                            extract($binhluan);
                            $xoabl = "index.php?act=xoabl&id=" . $id;
                            ?>

                            <tr>
                                <td>
                                    <?= $id ?>
                                </td>
                                <td>
                                    <?= $nguoidung ?>
                                </td>
                                <td>
                                    <?= $tensp ?>
                                </td>
                                <td>
                                    <?= $noidung ?>
                                </td>
                                <td>
                                    <?= $ngaybinhluan ?>
                                </td>
                                <td>
                                    <a href="<?= $xoabl ?>" onclick="return confirmDeletebl()"><input type="button"
                                            class=" form-control btn btn-danger mt-2" value="Xóa"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function confirmDeletebl() {
            if (confirm("Bạn có muốn xóa bình luận này không")) {
                document.location = "index.php?act=listbl";
            } else {
                return false;
            }
        }
    </script>


</div>