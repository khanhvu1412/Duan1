<?php


if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = ".././upload_file/" . $img;
if (is_file($hinhpath)) {
    $img = "<img src='" . $hinhpath . "' height='200'>";
} else {
    $img = "no photo";
}

?>

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sản phẩm</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Sửa sản phẩm</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <br>
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <select name="iddm">
                            <option value="0" seclection>Tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                if ($iddm == $id)
                                    $s = "selected";
                                else
                                    $s = "";
                                echo '<option value="' . $id . '" ' . $s . '>' . $tendm . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="tensp" value="<?= $tensp ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPrice" class="form-label">Giá</label>
                        <input type="text" class="form-control" name="giasp" value="<?= $giasp ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputImg" class="form-label">Ảnh</label>
                        <br>
                        <?= $img ?>
                        <br>
                        <input type="file" class="mt-2" name="hinh">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputDescribe" class="form-label">Mô tả</label>
                        <textarea class="form-control" rows="10" name="mota"><?= $mota ?></textarea>
                    </div>
                    <input type="hidden" name="id" value="<?= $sanpham['id'] ;?>">
                    <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                    <input type="reset" class="btn btn-primary" value="Nhập lại">
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

</div>