<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>THỐNG KÊ</h1>
    </div>
    <div class="row mb"></div>
    <div class="row mb content-admin">
    <div class="row mb10">
            <a href="index.php?act=thongkebl">
                    <input type="button" value="Xem thống kê bình luận">
                </a>
                <a href="index.php?act=bieudo">
                    <input type="button" value="Biểu đồ thống kê sản phẩm">
                </a>
                <a href="index.php?act=bieudodh">
                    <input type="button" value="Biểu đồ thống kê đơn hàng">
                </a>
            </div>
        <form action="" method="post">
            <div class="row mb10 formdsloai">
                <table class="mb">
                    <tr>
                        <th class="br">Mã danh mục</th>
                        <th class="br">Tên danh mục</th>
                        <th class="br">Số lượng</th>
                        <th class="br">Giá cao nhất</th>
                        <th class="br">Giá thấp nhất</th>
                        <th class="br">Giá trung bình</th>
                    </tr>
                    <?php
                    foreach ($listthongke as $tk) {
                        extract($tk);
                        echo '
                                    <tr>
                                    <td class="br">' . $madm. '</td>
                                    <td class="br">' . $tendm. '</td>
                                    <td class="br">' . $countsp. '</td>
                                    <td class="br">' . $maxprice. '</td>
                                    <td class="br">'.$minprice.'</td>
                                    <td class="br">' . $avgprice. '</td>
                                </tr>
                                    ';
                    }
                    ?>
                </table>
            </div>

        </form>
    </div>
</div>
</div>