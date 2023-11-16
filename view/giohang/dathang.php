<div class="container">
    <div class="row mb">

        <div class="article mr">
            <div class="row">
                <div class="box-title mb">
                    ĐƠN HÀNG
                </div>
                <div class="row">
                    <form action="" method="post">
                        <div class="row mb10 formcart">
                            <table class="mb">
                                <tr>
                                    <th class="br">Mã sản phẩm</th>
                                    <th class="br">Tên sản phẩm</th>
                                    <th class="br">Ảnh sản phẩm</th>
                                    <th class="br">Giá</th>
                                    <th class="br">Số lượng</th>
                                    <th class="br">Thành tiền</th>
                                </tr>
                                <?php
                                $tong = 0;
                                foreach ($giohang as $cart) {
                                    extract($cart);
                                    $image = $img_path . $image;
                                    $tong += $thanhtien;
                                    echo '
                            <tr>
                            <td class="br">' . $idsp . '</td>
                            <td class="br">' . $tensanpham . '</td>
                            <td class="br"><img src="' . $image . '" alt="" width="80px"></td>
                            <td class="br">' . $price . '</td>
                            <td class="br">' . $soluong . '</td>
                            <td class="br">' . $thanhtien . '</td>
                            </tr>
                            ';

                                }
                                echo '
                        <tr>
                        <td colspan="5">Tổng đơn hàng</td>
                        <td id="tong">' . $tong . '</td>
                        </tr>
                        '
                                    ?>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
            <div class="row">
                <div class="box-title mb">
                    PHƯƠNG THỨC THANH TOÁN
                </div>
                <div class="row mb formcart">
                    <table>
                        <tr>
                            <td><input type="radio" name="pttt" checked>Thanh toán khi nhận hàng</td>
                            <td><input type="radio" name="pttt">Chuyển khoản ngân hàng</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="aside">
            <div class="row">
                <div class="box-title mb">
                    THÔNG TIN NHẬN HÀNG
                </div>
                <?php
                if (isset($_SESSION['user'])) {
                    $user = $_SESSION['user']['user'];
                    $hoten = $_SESSION['user']['hoten'];
                    $phone = $_SESSION['user']['phone'];
                    $address = $_SESSION['user']['address'];
                    ?>
                    <form action="index.php?act=ttthanhcong" method="post">
                        <div class="row mb content-admin">

                            <div class="row mb10">
                                <label for="">Họ và tên</label><br>
                                <input type="text" name="hoten" value="<?= $hoten; ?>">
                            </div>
                            <div class="row mb10">
                                <label for="">Số điện thoại</label><br>
                                <input type="text" name="phone" value="<?= $phone; ?>">
                            </div>
                            <div class="row mb10">
                                <label for="">Địa chỉ</label><br>
                                <input type="text" name="address" value="<?= $address; ?>">
                            </div>

                            <div class="row mb10 article mr">
                                <label for="">Mã giảm giá</label><br>
                                <input type="text" id="magiamgia" value="">
                            </div>

                            <div class="row mb10 aside dathang">
                                <label for=""></label><br>
                                <button onclick="check()">Áp dụng</button>
                            </div>

                            <script>

                                function check() {
                                    var tong = document.getElementById('tong');
                                    var tongsau = document.getElementById('tongsau');
                                    var maGiamGia = document.getElementById('magiamgia').value;
                                    jsArrMgg.forEach(function (obj) {
                                        if (obj.magiamgia == maGiamGia) {
                                            event.preventDefault();
                                            var currentIndex = parseInt(tong.textContent);
                                            var tongNew = parseInt(currentIndex - obj.sotiengiam);
                                            tong.textContent = tongNew;
                                            tongsau.value = tongNew;
                                            alert("Đã dùng mã giảm giá");
                                        } else {
                                            event.preventDefault();
                                            alert("Mã giảm giá không tồn tại");
                                        }
                                    });
                                }
                            </script>

                            <div class="row mb10">
                                <label for="">Ghi chú</label><br>
                                <textarea name="ghichu" id="" cols="43" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row mb10 formcart">

                            <?php
                            foreach ($giohang as $cart) {
                                extract($cart);
                                $image = $img_path . $image;
                                echo '
                                <input type="hidden" name="iduser" value="'. $iduser .'">
                                <input type="hidden" name="idsp" value="' . $idsp . '">
                                <input type="hidden" name="tensanpham" value="' . $tensanpham . '">
                                <input type="hidden" name="image" value="' . $image . '">
                                <input type="hidden" name="price" value="' . $price . '">
                                <input type="hidden" name="soluong" value="' . $soluong . '">
                                <input type="hidden" name="thanhtien" value="' . $thanhtien . '">
                            ';

                            } ?>

                            <input type="hidden" id="tongsau" name="tong" value="">

                            <a href="index.php?act=viewcart"><input type="button" value="Quay về giỏ hàng"></a>
                            <a href="index.php?act=ttthanhcong"><input type="submit" name="datmua" value="Đặt mua"></a>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>