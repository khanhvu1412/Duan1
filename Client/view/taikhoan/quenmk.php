<div class="wrapper">
    <div class="login">
        <h1>Quên mật khẩu</h1>
        <form action="index.php?act=quenmk" method="post" >
            
            <div class="form-input">
                <p>Email</p>
                <br>
                <input type="email" name="email" placeholder="Nhập email">
            </div>
            <div class="login-btn">

                <input type="submit" name="guiemail" value="Gửi" onclick="return confirmMatkhau()">
            </div>

            <?php 
            if(isset($thongbao) && $thongbao !='') {
              echo $thongbao;
            }
            ?>
            
            <div class="forget-password">
                <a href="index.php?act=tkcanhan">Về trang tài khoản</a>
            </div>
        </form>
    </div>
</div>

<script>
    function confirmMatkhau() {
        if (confirm("Bạn có muốn lấy lại mật khẩu không?")) {
            document.location = "index.php?act=tkcanhan";
            alert("Lấy thành công");
        } else {
            return false;
        }
    }
</script>