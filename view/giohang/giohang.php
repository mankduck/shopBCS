<div class="container">
    <div class="row main-body">
        <div class="row title-admin mb">
            <h1>GIỎ HÀNG</h1>
        </div>
        <!-- <div class="row mb content-admin"></div> -->
        <form action="index.php?act=thanhtoan" method="post">
            <?php
            if (isset($_SESSION['user']['user'])) {
                if ($_SESSION['mycart'] != []) { ?>
                    <div class="row mb10 formcart">
                        <table class="mb">
                            <tr>
                                <th class="br">Mã sản phẩm</th>
                                <th class="br">Tên sản phẩm</th>
                                <th class="br">Ảnh sản phẩm</th>
                                <th class="br">Giá</th>
                                <th class="br">Số lượng</th>
                                <th class="br">Thành tiền</th>
                                <th>Tùy chỉnh</th>
                            </tr>
                            <?php
                            $tong = 0;
                            $idmang = 0;
                            $i = 0;


                            foreach ($_SESSION['mycart'] as $cart) {
                                extract($cart);


                                $xoaspcart = '<a href="index.php?act=xoaspcart&idcart=' . $i . '" ><input type="button" value="Xóa"></a>';
                                $image = $img_path . $cart[2];
                                $tong += $cart[5];
                                echo '
                            <tr>
                            <td class="br">' . $cart[0] . '</td>
                            <td class="br">' . $cart[1] . '</td>
                            <td class="br"><img src="' . $image . '" alt="" width="80px"></td>
                            <td class="br">' . $cart[3] . '</td>
                            <td class="br">' . $cart[4] . '</td>
                            <td class="br">' . $cart[5] . '</td>
                            <td>' . $xoaspcart . '</td>
                            </tr>
                            ';


                            $i ++;
                            $idmang ++;
                            }
                            echo '
                        <tr>
                        <td colspan="5">Tổng đơn hàng</td>
                        <td>' . $tong . '</td>
                        <td></td>
                        </tr>
                        '
                                ?>
                        </table>
                    </div>
                    <div class="row mb10 formcart">
                        <a href="index.php?act=sanpham"><input type="button" value="Tiếp tục mua sắm"></a>
                        <a href="index.php?act=xoaspcart"><input type="button" value="Xóa giỏ hàng"></a>
                        <a href="index.php?act=thanhtoan"><input type="submit" name="dathang" value="Đặt hàng"></a>
                        <?php

                } else {
                    echo '
                        <div class="err">
                            <h2>Không có sản phẩm nào trong giỏ hàng. Quay lại <a href="index.php?act=sanpham">CỬA HÀNG</a> để tiếp tục mua sắm</h2>
                        </div>
                    ';
                }
                ?>
                </div>
            <?php } else { ?>
                <div class="row mb10 formcart err">
                    <h2>Đăng nhập để có thể thực hiện chức năng mua hàng!</h2>
                </div>
            <?php } ?>
        </form>

    </div>
</div>