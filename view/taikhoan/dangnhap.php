<div class="container">
    <div class="row main-body mb">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            $hinh = "upload/" . $image;
            if (is_file($hinh)) {
                $image = "<img src='" . $hinh . "' width='100'>";
            } else {
                $image ="<img src='view/image/anhmacdinh.jpg' width='100'>";
            }
            ?>

            <div class="box-title">
                QUẢN LÝ TÀI KHOẢN
            </div>
            <div class="box-content formtk">
                <div class="row mb">
                    <div class="aside aside-user">
                        <?php echo $image; ?>
                    </div>
                    <div class="article article-user mb10">
                        <h1>Xin chào,
                            <?php echo $user; ?>
                        </h1>
                    </div>
                </div>
                <a href="index.php?act=quanlytk"><input type="button" value="Quản lý tài khoản"></a>
                <a href="index.php?act=doimk"><input type="button" value="Đổi mật khẩu"></a>
                <a href="index.php?act=donhang"><input type="button" value="Đơn hàng"></a>
                <?php if ($role == 1) { ?>
                    <a href="admin/index.php"><input type="button"
                            value="Đến trang admin"></a>
                <?php }
                ; ?>
                <a href="index.php?act=dangxuat"><input type="button" value="Đăng xuất"></a>
            </div>

        <?php } else { ?>
            <div class="box-title">
                ĐĂNG NHẬP
            </div>
            <div class="box-content formtk">
                <form action="" method="post">
                    <div class="row mb10">
                        <label for="">Tên đăng nhập</label><br>
                        <input type="text" name="user" id="">
                    </div>
                    <div class="row mb10">
                        <label for="">Mật khẩu</label><br>
                        <input type="password" name="pass" id=""><br>
                    </div>
                    <div class="row mb10">
                        <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?<br>
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap"><br>
                    </div>
                </form>
                <?php
                if (isset($thongbao)) {
                    echo $thongbao;
                }
                ?>
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            </div>
        <?php } ?>
    </div>
</div>