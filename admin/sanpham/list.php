<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row filter-admin">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw" id="">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($listdanhmuc as $key => $value) { ?>
                    <option value="<?php echo $value['id'] ?>">
                        <?php echo $value['tendanhmuc'] ?>
                    </option>
                <?php } ?>
            </select>
            <input type="submit" name="listok" value="Tìm kiếm">
        </form>
    </div>
    <div class="row mb"></div>
    <div class="row mb content-admin">
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=listspdx">
                <input type="button" value="Đã xóa gần đây">
            </a>
            <a href="index.php?act=addsp">
                <input type="button" value="Thêm mới">
            </a>
        </div>
        <form action="" method="post">
            <div class="row mb10 formdsloai">
                <table class="mb">
                    <tr>
                        <th class="br">Chọn</th>
                        <th class="br">Mã loại</th>
                        <th class="br">Tên loại</th>
                        <th class="br">Hình ảnh</th>
                        <th class="br">Giá</th>
                        <th class="br">Lượt xem</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $key => $value) {
                        $suasp = "index.php?act=suasp&id=" . $value['id'];
                        $xoasp = "index.php?act=xoasp&id=" . $value['id'];
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
                                    <td class="br">' . $value['view'] . '</td>
                                    <td>
                                        <a href="' . $suasp . '" ><input type="button" value="Sửa"></a>  
                                        <a href="' . $xoasp . '" ><input type="button" value="Xóa"></a>
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