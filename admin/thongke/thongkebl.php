<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>THỐNG KÊ BÌNH LUẬN</h1>
    </div>
    <div class="row mb"></div>
    <div class="row mb content-admin">
    <div class="row mb10">
                <a href="index.php?act=thongke">
                    <input type="button" value="Về trang thống kê">
                </a>
            </div>
        <form action="" method="post">
            <div class="row mb10 formdsloai">
                <table class="mb">
                    <tr>
                        <th class="br">Mã sản phẩm</th>
                        <th class="br">Tên sản phẩm</th>
                        <th class="br">Ảnh sản phẩm</th>
                        <th class="br">Số lượt bình luận</th>
                    </tr>
                    <?php
                    foreach ($listthongkebl as $tk) {
                        extract($tk);
                        $hinh = "../upload/" . $anhsp;
                        $err_hinh = "view/image/anhmacdinh.jpg";
                        if (is_file($hinh)) {
                            $image = "<img src='" . $hinh . "' width='100'>";
                        } else {
                            $image = "<img src='" . $err_hinh . "' width='100'>";
                        }
                        echo '
                                    <tr>
                                    <td class="br">' . $masp. '</td>
                                    <td class="br">' . $tensp. '</td>
                                    <td class="br">' . $image. '</td>
                                    <td class="br">' . $countbl. '</td>
                                </tr>
                                    ';
                    }
                    ?>
                </table>
            </div>

        </form>
    </div>
</div>