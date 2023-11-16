<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>ĐÃ XÓA GẦN ĐÂY</h1>
    </div>
    <div class="row mb"></div>
    <div class="row mb content-admin">
        <form action="" method="post">
            <div class="row mb10 formdsloai">
                <table class="mb">
                    <tr>
                        <th class="br">Chọn</th>
                        <th class="br">Mã loại</th>
                        <th class="br">Tên loại</th>
                        <th class="br">Hình ảnh</th>
                        <th class="br">Giá</th>
                        <th class="br">Ngày xóa</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    foreach ($listsanphamdx as $key => $value) {
                        $kpsp = "index.php?act=kpsp&id=" . $value['id'];
                        $xoavv = "index.php?act=xoavv&id=" . $value['id'];
                        $hinh = "../../upload/" . $value['image'];
                        if (is_file($hinh)) {
                            $image = "<img src='" . $hinh . "' width='80'>";
                        } else {
                            $image = "No picture";
                        }
                        echo '
                                    <tr>
                                    <td class="br"><input type="checkbox" name="" id=""></td>
                                    <td class="br">' . $value['id'] . '</td>
                                    <td class="br">' . $value['tensanpham'] . '</td>
                                    <td class="br"><img src="../../upload/' . $value['image'] . '" alt="" width="80px"></td>
                                    <td class="br">' . $value['price'] . '</td>
                                    <td class="br">' . $value['ngayxoa'] . '</td>
                                    <td>
                                        <a href="' . $kpsp . '" ><input type="button" value="Khôi phục"></a>  
                                        <a href="' . $xoavv . '" ><input type="button" value="Xóa vĩnh viễn"></a>
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