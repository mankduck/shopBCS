<div class="container">
    <div class="row main-body mb">
        <div class="box-title">
            LẤY LẠI MẬT KHẨU
        </div>
        <div class="box-content formtk">
            <form action="" method="post">
                <div class="row mb10">
                    <label for="">Email đã đăng kí</label><br>
                    <input type="text" name="email" id="">
                </div>
                <div class="row mb10">
                    <input type="reset" value="Nhập lại">
                    <input type="submit" value="Lấy lại mật khẩu" name="quenmk"><br>
                </div>
            </form>

            <?php
            if (isset($thongbao) && $thongbao != "") {
                echo $thongbao;
            }
            ?>

            <li><a href="index.php?act=dangnhap">Về trang đăng nhập</a></li>

        </div>
    </div>
</div>