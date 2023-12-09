<div class="container">
    <div class="row mb">
        <div class="aside mr">
            <?php include "aside.php" ?>
        </div>
        <div class="article">
            <div class="row">
                <div class="row mb">
                    <div class="box-title mb">
                        CHI TIẾT SẢN PHẨM
                    </div>
                    <div class="row box-ctsp">
                        <div class="aside-ctsp mr mb">
                            <?php
                            extract($ctsp);
                            $image = $img_path . $image;
                            echo '
                            <img src="' . $image . '" alt="" ><br>
                            ';

                            ?>
                        </div>
                        <div class="article-ctsp ml">
                            <?php
                            extract($ctsp);
                            echo '
                            <h1>' . $tensanpham . '</h1>
                            <h2>Mã sản phẩm: ' . $id . '</h2>

                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="' . $id . '">
                                <input type="hidden" name="view" value="' . $view . '">
                                <input type="hidden" name="tensanpham" value="' . $tensanpham . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <input type="hidden" name="image" value="' . $image . '">';
                                 echo '
                                <div class="row mb10">
                                <button type="button" class="tru">-</button>
                                <input type="text" name="soluong" class="value" value="1" readonly>
                                <button type="button" class="cong">+</button>
                                </div>
                                <div class="row">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                </div>
                                </form>
                            ';
                            if (isset($thongbao) && $thongbao != "") {
                                echo $thongbao;
                            };

                            ?>
                        </div>
                        <div class="row ctsp">

                            <?php
                            extract($ctsp);
                            echo '
                            <h3>THÔNG TIN CHI TIẾT</h3><br>
                            <p>' . $mota . '</p><br>
                            ';

                            ?>
                        </div>
                    </div>
                </div>


                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $("#binhluan").load("view/binhluan/binhluan.php", { idsp: <?php echo $id; ?> });
                    });
                </script>
                <div class="row mb" id="binhluan">
                    <div class="box-title">
                        BÌNH LUẬN
                    </div>
                    <div class="row box-content4">

                    </div>
                </div>
                <div class="row mb">
                    <div class="box-title mb">
                        SẢN PHẨM CÙNG LOẠI
                    </div>
                    <div class="row mb">
                        <?php
                        foreach ($spcungloai as $sp) {
                            extract($sp);
                            $image = $img_path . $image;
                            $linksp = "index.php?act=sanphamct&idsp=" . $id . "&view=" . $view;
                            echo '
                                <div class="row spcl">
                                <img src="' . $image . '" alt="">
                                <li><a href ="' . $linksp . '">' . $tensanpham . '</a></li>
                                </div>
                            ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>