<?php

// session_start();
// ob_start();
// // if ((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
// //     $email = $_POST['email'];
// //     $matkhau = $_POST['matkhau'];

// // }



if (isset($_POST["dangnhap"])) {
    $email = $_POST["email"];
    $matkhau = $_POST["matkhau"];
    if ($email == "admin@gmail.com" && $matkhau == "12345678") {
        $_SESSION["admin@gmail.com"] = $emal;
        header("location: ../Admin/index.php");
    }
} 

if (isset($_SESSION["admin"])) {
    header("location: ../Admin/index.php");
}
if (isset($_SESSION["user"])) {
    header("location: ../Client/index.php");
}

ob_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng nhập</title>

    <!-- Custom fonts for this template-->
    <link href="view/taikhoan/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="view/taikhoan/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Chào mừng quay trở lại </h1>
                                    </div>

                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                aria-describedby="emailHelp" placeholder=" Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="matkhau"
                                                placeholder="Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="dangnhap"
                                            value="Đăng nhập">
                                        <?php ob_end_flush(); ?>
                                        <hr>
                                        <div class="text-center"> <a class="small" href="view/taikhoan/quenmk.php">Quên mật khẩu ?</a>
                                        </div>
                                        <div class="text-center"> <a class="small" href="view/taikhoan/dangky.php">Tạo tài khoản!</a>
                                        </div>


                                    </form>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="view/taikhoan/vendor/jquery/jquery.min.js"></script>
    <script src="view/taikhoan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="view/taikhoan/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="view/taikhoan/js/sb-admin-2.min.js"></script>

</body>

</html>