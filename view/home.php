<div class="row mb banner">
    <img src="view/image/banner.jpg" id="slideshow" alt="">
</div>


<div class="container">


    <div class="row mb tieude">
        <h2>DẪN ĐẦU CÔNG NGHỆ - CẢM XÚC THĂNG HOA</h2>
        <p>Khẳng định vị thế số một trong ngành bao cao su Việt Nam <br> Mang
            đến cho quý khách hàng những trải ngiệm tuyệt vời nhất.
        </p>
    </div>





    <div class="row mb">
        <div class="box-title2">
            SẢN PHẨM BÁN CHẠY
        </div>
        <div class="article2 mb">
            <?php
            $i = 0;
            foreach ($spmoi as $sp) {
                extract($sp);
                $hinh = $img_path . $image;
                $linksp = "index.php?act=sanphamct&idsp=" . $id . "&view=" . $view;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '
                        <div class="box-sp ' . $mr . '">
                        <div class="img hover-button">
                            <img src="' . $hinh . '" alt="">
                            <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="tensanpham" value="' . $tensanpham . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="hidden" name="image" value="' . $image . '">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>

                        </div>
                        <p>' . $price . '₫</p>
                        <a href="' . $linksp . '">' . $tensanpham . '</a>
                    </div>
                        ';
                $i++;
            }
            ?>
        </div>

    </div>
    <div class="row mb">
        <div class="box-title2">
            SẢN PHẨM MỚI
        </div>
        <div class="article2 mb">
            <?php
            $i = 0;
            foreach ($spmoi as $sp) {
                extract($sp);
                $hinh = $img_path . $image;
                $linksp = "index.php?act=sanphamct&idsp=" . $id . "&view=" . $view;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '
                        <div class="box-sp ' . $mr . '">
                        <div class="img hover-button">
                            <img src="' . $hinh . '" alt="">
                            <form action="index.php?act=addtocart" method="post">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="tensanpham" value="' . $tensanpham . '">
                            <input type="hidden" name="price" value="' . $price . '">
                            <input type="hidden" name="image" value="' . $image . '">
                            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>

                        </div>
                        <p>' . $price . '₫</p>
                        <a href="' . $linksp . '">' . $tensanpham . '</a>
                    </div>
                        ';
                $i++;
            }
            ?>
        </div>
    </div>
    <div class="row mb"></div>
</div>