<?php

if (is_array($taikhoan)) {
    extract($taikhoan);
}



?>


<div class="wrapper">
    <div class="login">
        <h1>Đổi mật khẩu</h1>
        <form action="index.php?act=doimk" method="post" class="form-login" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id ?>">


            <div class="form-input">

                <p>Mật khẩu cũ</p>
                <div class="matkhau">
                    <input type="password" id="passwordInput1" name="matkhau" value="<?= $matkhau ?>">

                    <i class="far fa-eye" id="togglePassword1" onclick="togglePassword('passwordInput1')"></i>
                </div>

            </div>
            <div class="form-input">
                <p>Mật khẩu mới</p>
                <div class="matkhau">
                    <input type="password" id="passwordInput2" name="matkhau">
                    <i class="far fa-eye" id="togglePassword2" onclick="togglePassword('passwordInput2')"></i>
                </div>
            </div>
            <!-- <div class="show">
                <input type="checkbox" onclick="myFunction()" > Hiện mật khẩu
            </div> -->
            <!-- <br> -->

            <!-- <div class="form-input">
                <p>Mật khẩu cũ</p>
                <input type="text" name="matkhau" value="<?= $matkhau ?>" >
            </div>
            <div class="form-input">
                <p>Mật khẩu mới</p>
                <input type="text" name="matkhau" >
            </div> -->


            <?php if (isset($_POST['doimk']) && $_POST['doimk']) {
                echo "Đổi mật khẩu thành công";
            } ?>
            <div class="login-btn">

                <input type="submit" name="doimk" value="Cập nhật" onclick="return confirmDoimk()">
            </div>
            <div class="forget-password">
                <a href="index.php?act=tkcanhan">Về trang tài khoản</a>
            </div>
        </form>
    </div>
</div>

<script>
    function confirmDoimk() {
        if (confirm("Bạn có muốn đổi mật khẩu này không")) {
            document.location = "index.php?act=tkcanhan";
        } else {
            return false;
        }
    }
</script>

<!-- <script>
    function myFunction() {
        var x = document.getElementById("password1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script> -->


<script>
    function togglePassword(inputId) {
        var x = document.getElementById(inputId);
        var iconId = 'togglePassword' + inputId.charAt(inputId.length - 1);

        if (x.type === "password") {
            x.type = "text";
            document.getElementById(iconId).classList.add("fa-eye-slash");
            document.getElementById(iconId).classList.remove("fa-eye");
        } else {
            x.type = "password";
            document.getElementById(iconId).classList.add("fa-eye");
            document.getElementById(iconId).classList.remove("fa-eye-slash");
        }
    }
</script>