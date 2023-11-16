<div class="container">
    <div class="row main-body mb">
        <div class="box-title">
            QUẢN LÝ TÀI KHOẢN
        </div>
        <div class="box-content formtk">
            <?php
            if (isset($_SESSION['user']) && $_SESSION['user']) {
                extract($_SESSION['user']);
                $hinh = "upload/" . $image;
                if (is_file($hinh)) {
                    $image = "<img src='" . $hinh . "' width='150'>";
                } else {
                    $image = "No picture";
                }
            }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <label for="">Tên đăng nhập</label><br>
                    <input type="text" name="user" id="" value="<?= $user; ?>" readonly>
                </div>
                <div class="row mb10">
                    <label for="">Họ và tên</label><br>
                    <input type="text" name="hoten" id="" value="<?= $hoten; ?>">
                </div>
                <div class="row mb10">
                    <?php
                        if(isset($errUser)){
                            echo '<h2>'.$errUser.'</h2>';
                        }
                    ?>
                </div>
                <div class="row mb10">
                    <label for="">Mật khẩu</label><br>
                    <input type="password" name="pass" id="" value="<?= $password; ?>" readonly><br>
                </div>
                <div class="row mb10">
                    <label for="">Email</label><br>
                    <input type="text" name="email" id="" value="<?= $email; ?>">
                </div>
                <div class="row mb10">
                    <?php
                        if(isset($errEmail)){
                            echo '<h2>'.$errEmail.'</h2>';
                        }
                    ?>
                </div>
                <div class="row mb10">
                    <label for="">Địa chỉ</label><br>
                    <input type="text" name="diachi" id="" value="<?= $address; ?>">
                </div>
                <div class="row mb10">
                    <label for="">Hình ảnh</label><br>
                    <?php echo $image; ?><br>
                    <input type="file" name="image" id=""><br>
                </div>
                <div class="row mb10">
                    <label for="">Điện thoại</label><br>
                    <input type="text" name="phone" id="" value="<?= $phone; ?>">
                    <input type="hidden" name="role" value="<?= $role;?>">
                </div>
                <div class="row mb10">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <input type="reset" value="Nhập lại">
                    <input type="submit" value="Cập nhật" name="capnhat"><br>
                </div>
            </form>

            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>

            <li><a href="index.php?act=dangnhap">Về trang người dùng</a></li>

        </div>
    </div>
</div>