<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <div class="row filter-admin">
        <form action="index.php?act=listtk" method="post">
            <input type="text" name="kyw" id="">
            <input type="submit" name="listok" value="Tìm kiếm">
        </form>
    </div>
    <div class="row mb"></div>
    <div class="row mb content-admin">
    <div class="row mb10">
                <!-- <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn"> -->
            </div>
        <form action="" method="post">
            <div class="row mb10 formdsloai">
                <table class="mb">
                    <tr>
                        <!-- <th class="br">Chọn</th> -->
                        <th class="br">IDTK</th>
                        <th class="br">Tên tài khoản</th>
                        <th class="br">Họ tên</th>
                        <th class="br">Email</th>
                        <th class="br">Image</th>
                        <th class="br">Địa chỉ</th>
                        <th class="br">Số điện thoại</th>
                        <th class="br">Vai trò</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    foreach ($listtk as $key => $value) {
                        $suatk = "index.php?act=suatk&id=" . $value['id'];
                        $xoatk = "index.php?act=xoatk&id=" . $value['id'];
                        $hinh = "../../upload/" . $value['image'];
                        if (is_file($hinh)) {
                            $image = "<img src='" . $hinh . "' width='80'>";
                        } else {
                            $image = "No picture";
                        }
                        echo '
                                    <tr>

                                    <td class="br">' . $value['id'] . '</td>
                                    <td class="br">' . $value['user'] . '</td>
                                    <td class="br">' . $value['hoten'] . '</td>
                                    <td class="br">' . $value['email'] . '</td>
                                    <td class="br"><img src="../../upload/' . $value['image'] . '" alt="" width="80px"></td>
                                    <td class="br">' . $value['address'] . '</td>
                                    <td class="br">' . $value['phone'] . '</td>
                                    <td class="br">' . $value['role'] . '</td>
                                    <td>
                                        <a href="' . $suatk . '" ><input type="button" value="Sửa"></a>  
                                        <a href="' . $xoatk . '" ><input type="button" value="Xóa"></a>
                                    </td>
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