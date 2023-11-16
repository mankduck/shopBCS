<?php
session_start();
$hinh = $_SESSION['user']['image'];
$user = $_SESSION['user']['user'];
$hinh = "../upload/" . $hinh;
$err_hinh = "../view/image/anhmacdinh.jpg";
if (is_file($hinh)) {
    $image = $hinh;
} else {
    $image = $err_hinh;
}
?>

<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>QUẢN LÝ TRANG WEB CHO ADMIN</h1>
    </div>
    <div class="box-content formtk">
        <div class="row">
            <div class="aside">
                <img src="<?= $image ?>" alt="" width="120" style="border-radius:50%">
            </div>
            <div class="article article-user">
                <h1>Xin chào,
                    <?php echo $user; ?>
                </h1>
            </div>
        </div>
        <div>
            <a href="../index.php"><input type="button" value="Về trang Web"></a>
        </div>
    </div>
</div>