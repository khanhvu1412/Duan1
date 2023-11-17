<!-- Content -->
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Trang chủ</h1>
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <h3>
                                <?php foreach ($tongtk as $taikhoan) {
                                    extract($taikhoan);
                                    echo $tongtk;
                                } ?>
                            </h3>
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tài khoản</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <h3>
                                <?php foreach ($tongdm as $dm) {
                                    extract($dm);
                                    echo $tongdm;
                                } ?>
                            </h3>
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Danh mục</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard fa-2x text-gray-300"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <h3>
                                <?php foreach ($tongsp as $sp) {
                                    extract($sp);
                                    echo $tongsp;
                                } ?>
                            </h3>
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Sản phẩm</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-box-open fa-2x text-gray-300"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                        <h3>
                                <?php foreach ($tongbl as $binhluan) {
                                    extract($binhluan);
                                    echo $tongbl;
                                } ?>
                            </h3>
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Bình luận</div>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--End Content -->

</div>