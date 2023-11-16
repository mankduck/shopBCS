<div class="container">
    <div class="row mb">
        <div class="aside mr">
            <?php include "aside.php" ?>
        </div>
        <div class="article">
            <div class="row box-title">
                <?php
                if ($iddm > 0) {
                    echo $tendm;
                } else {
                    echo "KẾT QUẢ TÌM KIẾM";
                }
                ?>
            </div>
            <?php
            $i = 0;
            foreach ($dmsp as $sp) {
                extract($sp);
                $image = $img_path . $image;
                $linksp = "index.php?act=sanphamct&idsp=" . $id . "&view=" . $view;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11) || ($i == 14)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '
                        <div class="box-sp ' . $mr . '">
                        <div class="img">
                            <img src="' . $image . '" alt="">
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
</div>