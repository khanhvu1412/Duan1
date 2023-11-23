<?php
// if(is_array($sanpham)){
//     extract($sanpham);
// }
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
//$id_sp = $_REQUEST['id_sp'];
$listbl = loadall_binhluan();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../CSS/index.css">
<link rel="stylesheet" href="../CSS/sanpham.css">
<div class="mt-3 px-3">
    <h1>Bình luận</h1>
    <table class="table table-borderless" style="border: 1px solid black">
        <tr>
            <th class="w-5">Người dùng</th>
            <th class="w-5">Nội dung</th>
            <th class="w-5">Ngày bình luận</th>
        </tr>
        <?php
        foreach ($listbl as $ds) {
            extract($ds);
            echo '<tr>
                        <td>' . $id_nguoidung . '</td>
                        <td>' . $noidung . '</td>
                        <td>' . $ngaybinhluan . '</td>
                      </tr>';
        }
        ?>
    </table>
</div>
<div class="comment">
    <form style="margin: 10px 15px;" action="binhluanform.php" method="POST"></form>
        <input type="hidden" name="idpro" value="<?= $id_sp ?>">
        <input type="hidden" name="iduser" value="<?= $id_nguoidung ?>">

        <input type="text" name="noidung">
        <input type="submit" name="guibinhluan" value="Gửi bình luận">
    </form>
</div>
<?php
if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
    $noidung = $_POST['noidung'];
    $id_sp = $_POST['id_sp'];
    $id_nguoidung = $_SESSION['nguoidung']['id'];
    $ngaybinhluan = date('h:i:sa d/m/Y');
    insert_binhluan($id_sp, $id_nguoidung, $noidung, $ngaybinhluan);
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>