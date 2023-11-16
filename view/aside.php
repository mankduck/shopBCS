<!-- <div class="row mb">
    <div class="box-title">
        TÀI KHOẢN
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
                <input type="submit" value="Đăng nhập"><br>
            </div>
        </form>
        <li><a href="">Quên mật khẩu</a></li>
        <li><a href="">Đăng kí thành viên</a></li>
    </div>
</div>

 -->
<!-- 
<div class="row mb">
    <div class="box-title">
        TÌM KIẾM SẢN PHẨM
    </div>
    <div class="box-footer boxsearch">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="kyw" id="" placeholder="Tìm kiếm">
            <input type="submit" value="Search" name="tim">
        </form>
    </div>
    <div class="box-content2 nav-doc">
        <ul>
            <?php
            foreach ($dsdm as $ds) {
                extract($ds);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '
                                    <li><a href="' . $linkdm . '">' . $tendanhmuc . '</a></li>
                                    ';
            }
            ?>
            <li><a href="">Bao cao su cao cấp</a></li>
                            <li><a href="">Bao cao su cổ điển</a></li>
                            <li><a href="">Bao cao su có hương thơm</a></li>
                            <li><a href="">Bao cao su có gân, gai</a></li>
                            <li><a href="">Bao cao su 3D</a></li>
                            <li><a href="">Gel bôi trơn cao cấp</a></li>
        </ul>
    </div>
</div> -->



<div class="row mb">
    <div class="box-title">
        SẢN PHẨM BÁN CHẠY
    </div>
    <div class="row box-content3">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $image = $img_path . $image;

            echo '
                                <div class="row topsp">
                                <img src="' . $image . '" alt="">
                                <a href="' . $linksp . '">' . $tensanpham . '</a>
                            </div>
                                ';
        }
        ?>
        <!-- <div class="row topsp">
                            <img src="view/image/bao-cao-su-001-hop-2-web.jpg" alt="">
                            <a href="">BCS Sagami Original 001</a>
                        </div>

                        <div class="row topsp">
                            <img src="view/image/bao-cao-su-001-hop-2-web.jpg" alt="">
                            <a href="">BCS Sagami Original 002</a>
                        </div>

                        <div class="row topsp">
                            <img src="view/image/bao-cao-su-001-hop-2-web.jpg" alt="">
                            <a href="">Bao cao su Sagami Classic</a>
                        </div>

                        <div class="row topsp">
                            <img src="view/image/bao-cao-su-001-hop-2-web.jpg" alt="">
                            <a href="">BCS Sagami Original 001</a>
                        </div>
                         -->
    </div>
</div>