<?php 
    
?>



<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tài khoản</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Cập nhật tài khoản</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <br>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Tên tài khoản</label>
                        <input type="text" class="form-control"  name="nguoidung" value=" <?=$taikhoan['nguoidung'];?> ">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPrice" class="form-label">Mật khẩu</label>
                        <input type="text" class="form-control" name="matkhau" value="<?= $taikhoan['mathau']; ?>" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImg" class="form-label">Email</label>
                        <input type="text" class="form-control"  name="email"value="<?= $taikhoan['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescribe" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control"  name="diachi" value="<?= $taikhoan['diachi']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescribe" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control"  name="sdt" value="<?= $taikhoan['sdt']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescribe" class="form-label">Vai trò</label>
                        <input type="text" class="form-control"  name="id_role" value="<?= $taikhoan['id_role']; ?>">
                    </div>

                    <input type="submit" class="btn btn-success" name="capnhat" value="Cập nhật">
                    <input type="reset" class="btn btn-info" value="Nhập lại">
                    <a href="index.php?act=listsp"><input type="button" class="btn btn-primary" value="Danh sách"></a>

                    <?php
                    if (isset($thongbao) && ($thongbao != ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>

</div>

