<?php
if (is_array($binhluan)) {
    extract($binhluan);
}




?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Bình luận</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Sửa bình luận</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <br>
                <form action="index.php?act=updatebl" method="post">
                    <div class="mb-3">
                        <label for="exampleInputId" class="form-label">Mã bình luận</label>
                        <input type="text" class="form-control" name="madm" value="<?= $id ?>"disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Tên khách hàng</label>
                        <input type="text" class="form-control" name="tendm" value="<?= $id_nguoidung ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImg" class="form-label">Nội dung</label>
                        <input type="text" class="form-control" name="tendm" value="<?= $noidung ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImg" class="form-label">Ngày bình luận</label >
                        <input type="text" class="form-control" name="tendm" value="<?= $ngaybinhluan ?>" disabled>
                    </div>



                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                        echo $id; ?>">
                    <input type="submit" class="btn btn-success" name="capnhat"  onclick="return confirmUpdatebl()" value="Cập nhật">
                    <input type="reset" class="btn btn-info" value="Nhập lại">

                    <a href="index.php?act=chitietsp"><input type="button" class="btn btn-primary" value="Quay lại"></a>
                    <?php

                    if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;

                    ?>
                </form>
                <script>
                    function confirmUpdatebl() {
                        if (confirm("Bạn có muốn sửa danh mục này không ?")) {
                            document.location = "index.php?act=listbl";
                        } else {
                            return false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>

</div>