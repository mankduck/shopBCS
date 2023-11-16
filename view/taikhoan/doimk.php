<div class="container">
    <div class="row main-body mb">
        <div class="box-title">
            ĐỔI MẬT KHẨU
        </div>
        <div class="box-content formtk">
            <?php extract($_SESSION['user']); ?>
            <form action="" method="post">
                <div class="row mb10">
                    <label for="">Mật khẩu cũ</label><br>
                    <input type="text" name="password" id="">
                </div>
                <div class="row mb10">
                    <label for="">Mật khẩu mới</label><br>
                    <input type="password" name="password_new" id="">
                </div>
                <div class="row mb10">
                    <label for="">Nhập lại mật khẩu</label><br>
                    <input type="password" name="password_cf" id="">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <input type="reset" value="Nhập lại">
                    <input type="submit" value="Đổi mật khẩu" name="doimk"><br>
                </div>
            </form>

            <div class="row mb10 err">
                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo "<h2>$thongbao</h2>";
                }
                ?>
            </div>



            <li><a href="index.php?act=dangnhap">Về trang đăng nhập</a></li>

        </div>
    </div>
</div>