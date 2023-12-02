<div class="container">
    <div class="row mb">

        <div class="article mr">
            <div class="row article mr">
                <div class="box-title mb">
                    ĐƠN HÀNG
                </div>
                <div class="row">
                    <form action="" method="post">
                        <?php
                        if (isset($_SESSION['user']['user'])) { ?>
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
                                    $ship = 30000;
                                    foreach ($_SESSION['mycart'] as $cart) {
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
                            </tr>
                            ';

                                    }
                                    echo '
                        <tr>
                        <td colspan="5">Tiền tạm tính</td>
                        <td>' . $tong . '</td>
                        </tr>

                        <tr>
                        <td colspan="5">Phí vận chuyển</td>
                        <td>' . $ship . '</td>
                        </tr>

                        <tr>
                        <td colspan="5">Số tiền giảm</td>
                        <td id="sotiengiam">0</td>
                        </tr>

                        <tr>
                        <td colspan="5">Tổng đơn hàng</td>
                        <td id="tong">' . $tong + $ship . '</td>
                        </tr>
                        '
                                        ?>
                                </table>
                            </div>

                        <?php } else { ?>
                            <div class="row mb10 formcart">
                                <h1>Đăng nhập để có thể thực hiện chức năng mua hàng!</h1>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
            <div class="row aside">
                <div class="box-title mb">
                    PHƯƠNG THỨC THANH TOÁN
                </div>

                <form action="index.php?act=ttthanhcong" method="post">
                    <div class="row mb formcart">
                        <input type="radio" name="pttt" value="1" checked>Thanh toán khi nhận hàng <br> <br>
                        <input type="radio" name="pttt" value="2">Chuyển khoản ngân hàng
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
                            <input type="text" name="magiamgia" id="magiamgia" value="">
                        </div>

                        <div class="row mb10 aside dathang">
                            <label for=""></label><br>
                            <button onclick="check()">Áp dụng</button>
                        </div>

                        <!-- <script>
                            var isDiscountApplied = false; // Biến để kiểm tra mã giảm giá đã được sử dụng hay chưa

                            function check() {
                                if (!isDiscountApplied) {
                                    var tong = document.getElementById('tong');
                                    var tongsau = document.getElementById('tongsau');
                                    var sotiengiam = document.getElementById('sotiengiam');
                                    var maGiamGia = document.getElementById('magiamgia').value;
                                    var formattedTime = moment().format('Y-M-D H:m:s');
                                    console.log(formattedTime);
                                    var parsedDate1 = new Date(formattedTime);
                                    console.log(parsedDate1);
                                    var timestampDate1 = parsedDate1.getTime();

                                    console.log(timestampDate1);

                                    jsArrMgg.forEach(function (obj) {
                                        if (obj.magiamgia == maGiamGia) {
                                            var parsedDate2 = new Date(obj.thoigianhet);
                                            var timestampDate2 = parsedDate2.getTime();
                                            console.log(timestampDate2);
                                            if (timestampDate2 >= timestampDate1) {
                                                event.preventDefault();
                                                var currentIndex = parseInt(tong.textContent);
                                                var tongNew = parseInt(currentIndex - obj.sotiengiam);
                                                sotiengiam.textContent = "-" + obj.sotiengiam;
                                                tong.textContent = tongNew;
                                                tongsau.value = tongNew;
                                                alert("Đã dùng mã giảm giá");
                                                isDiscountApplied = true; // Đánh dấu rằng mã giảm giá đã được sử dụng
                                                return;
                                            } else {
                                                event.preventDefault();
                                                alert("Mã giảm giá đã hết hạn!");
                                                return;
                                            }

                                        } else {
                                            event.preventDefault();
                                            alert("Mã giảm giá không tồn tại");
                                            return;
                                        }
                                    });

                                    // if (!isDiscountApplied) {
                                    //     event.preventDefault();
                                    //     alert("Mã giảm giá không tồn tại");
                                    // }
                                } else {
                                    event.preventDefault();
                                    alert("Bạn đã sử dụng mã giảm giá rồi");
                                }
                            }
                        </script> -->

                        <script>
                            var isDiscountApplied = false; // Biến để kiểm tra mã giảm giá đã được sử dụng hay chưa

                            function check() {
                                if (!isDiscountApplied) {
                                    var isDiscountTrue = false;
                                    var tong = document.getElementById('tong');
                                    var tongsau = document.getElementById('tongsau');
                                    var sotiengiam = document.getElementById('sotiengiam');
                                    var maGiamGia = document.getElementById('magiamgia').value;
                                    var formattedTime = moment().format('Y-M-D H:m:s');
                                    console.log(formattedTime);
                                    var parsedDate1 = new Date(formattedTime);
                                    console.log(parsedDate1);
                                    var timestampDate1 = parsedDate1.getTime();

                                    console.log(timestampDate1);

                                    jsArrMgg.forEach(function (obj) {
                                        if (obj.magiamgia == maGiamGia) {
                                            isDiscountTrue = true;
                                            var parsedDate2 = new Date(obj.thoigianhet);
                                            var timestampDate2 = parsedDate2.getTime();
                                            console.log(timestampDate2);
                                            if (timestampDate2 >= timestampDate1) {
                                                event.preventDefault();
                                                var currentIndex = parseInt(tong.textContent);
                                                var tongNew = parseInt(currentIndex - obj.sotiengiam);
                                                sotiengiam.textContent = "-" + obj.sotiengiam;
                                                tong.textContent = tongNew;
                                                tongsau.value = tongNew;
                                                alert("Đã dùng mã giảm giá");
                                                isDiscountApplied = true; // Đánh dấu rằng mã giảm giá đã được sử dụng
                                                return;
                                            } else {
                                                event.preventDefault();
                                                alert("Mã giảm giá đã hết hạn!");
                                                return;
                                            }
                                        }
                                    });

                                    if (!isDiscountTrue) {
                                        event.preventDefault();
                                        alert("Mã giảm giá không tồn tại");
                                        return;
                                    }


                                    // if (!isDiscountApplied) {
                                    //     event.preventDefault();
                                    //     alert("Mã giảm giá không tồn tại");
                                    // }
                                } else {
                                    event.preventDefault();
                                    alert("Bạn đã sử dụng mã giảm giá rồi");
                                }
                            }
                        </script>

                        <div class="row mb10">
                            <label for="">Ghi chú</label><br>
                            <textarea name="ghichu" id="" cols="43" rows="10"></textarea>
                        </div>
                    </div>


                    <div class="row mb10 formcart">

                        <input type="hidden" id="tongsau" name="tong" value="<?php echo $tong + $ship; ?>">

                        <a href="index.php?act=viewcart"><input type="button" value="Quay về giỏ hàng"></a>
                        <a href="index.php?act=ttthanhcong"><input type="submit" name="datmua" value="Đặt mua"></a>
                        </form>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>