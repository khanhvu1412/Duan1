<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh mục</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Sửa danh mục</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">

                <br>
                <form action="index.php?act=updatedm" method="post">
                    <div class="mb-3">
                        <label for="exampleInputId" class="form-label">Mã danh mục</label>
                        <input type="text" class="form-control" name="madm" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Tên danh mục</label>
                        <input type="text" class="form-control" name="tendm" value="<?php if (isset($tendm) && ($tendm != "")) echo $tendm; ?>">
                        </div>
                        <input type="hidden" name="id"  value="<?php if(isset($id) && ($id > 0)) echo $id ;?>">
                        <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                        <input type="reset" class="btn btn-primary" value="Nhập lại">

                        <a href="index.php?act=listdm"><input type="button" class="btn btn-primary" value="Danh sách"></a>
                        <?php 

                        if(isset($thongbao) && ($thongbao!=""))
                        echo $thongbao;
                    
                    ?>
                    </form>
                </div>
            </div>
        </div>

    </div>

    </div>