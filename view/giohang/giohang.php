<div class="container">
    <div class="row main-body">
        <div class="row title-admin mb">
            <h1>GIỎ HÀNG</h1>
        </div>
        <!-- <div class="row mb content-admin"></div> -->
        <form action="index.php?act=thanhtoan" method="post">
            <?php
            if (isset($_SESSION['user']['user'])) {
                if ($giohang != []) { ?>
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


                            foreach ($giohang as $gh) {
                                extract($gh);


                                $xoaspcart = '<a href="index.php?act=xoaspcart&idcart=' . $id . '" ><input type="button" value="Xóa"></a>';
                                $image = $img_path . $image;
                                $tong += $thanhtien;
                                echo '
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="hidden" name="iduser" value="' . $iduser . '">
                            <tr>
                            <td class="br">' . $idsp . '</td><input type="hidden" name="idsp" value="' . $idsp . '">
                            <td class="br">' . $tensanpham . '</td><input type="hidden" name="tensanpham" value="' . $tensanpham . '">
                            <td class="br"><img src="' . $image . '" alt="" width="80px"></td><input type="hidden" name="image" value="' . $image . '">
                            <td class="br">' . $price . '</td><input type="hidden" name="price" value="' . $price . '">
                            <td class="br">
                            <button type="button" class="tru">-</button>
                            <input type="text" name="soluong" class="value" value="' . $soluong . '" readonly>
                            <button type="button" class="cong">+</button>
                            </td>
                            <td class="br">' . $thanhtien . '</td>
                            <td>' . $xoaspcart . '</td>
                            </tr>
                            ';

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

                }else{
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