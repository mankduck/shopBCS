<div class="container">
    <div class="row main-body mb">
        <div class="box-title">
            ĐĂNG KÍ TÀI KHOẢN MỚI
        </div>
        <div class="box-content formtk">
            <form action="" method="post">
                <div class="row mb10">
                    <label for="">Tên đăng nhập</label><br>
                    <input type="text" name="user" id="">
                </div>
                <div class="row mb10 err">
                    <?php if (isset($ckUser)) {
                        echo "<h2>$ckUser</h2>";
                    }
                    ; ?>
                </div>
                <div class="row mb10">
                    <label for="">Mật khẩu</label><br>
                    <input type="password" name="pass" id=""><br>
                </div>
                <div class="row mb10 err">
                    <?php if (isset($ckPass)) {
                        echo "<h2>$ckPass</h2>";
                    }
                    ; ?>
                </div>
                <div class="row mb10">
                    <label for="">Email</label><br>
                    <input type="text" name="email" id="">
                </div>
                <div class="row mb10 err">
                    <?php if (isset($ckEmail)) {
                        echo "<h2>$ckEmail</h2>";
                    }
                    ; ?>
                </div>

                <div class="row mb10 err">
                    <?php
                    if (isset($errEmail)) {
                        echo '<h2>' . $errEmail . '</h2>';
                    }
                    ?>
                </div>
                <div class="row mb10">
                    <input type="reset" value="Nhập lại">
                    <input type="submit" value="Đăng ký" name="dangky"><br>
                </div>
            </form>
            <div class="row mb10 err">
                <?php
                if (isset($thongbao) && $thongbao != "") {
                    echo "<h2>$thongbao</h2>";
                }
                ?>
            </div>


            <li><a href="index.php?act=dangnhap">Đăng nhập tài khoản</a></li>

        </div>
    </div>
</div>