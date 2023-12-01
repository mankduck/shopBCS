<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <!-- <div class="row filter-admin">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw" id="">
            <select name="iddm" id="">
                <option value="0" selected>Tất cả</option>
                <?php foreach ($listbinhluan as $bl) {
                    extract($bl); ?>
                    <option value="<?php echo $value['id'] ?>">
                        <?php echo $value['tendanhmuc'] ?>
                    </option>
                <?php } ?>
            </select>
            <input type="submit" name="listok" value="Tìm kiếm">
        </form>
    </div> -->
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
                        <th class="br">IDBL</th>
                        <th class="br">Avatar</th>
                        <th class="br">Người bình luận</th>
                        <th class="br">IDSP</th>
                        <th class="br">Nội dung</th>
                        <th class="br">Ngày bình luận</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    foreach ($listbinhluan as $bl) {
                        extract($bl);
                        $xoabl = "'index.php?act=xoabl&id=" . $id."'";
                        $hinh = "../upload/" . $image;
                        $err_hinh = "../view/image/anhmacdinh.jpg";
                        if (is_file($hinh)) {
                            $image = "<img src='" . $hinh . "' width='50'>";
                        } else {
                            $image = "<img src='" . $err_hinh . "' width='50'>";
                        }
                        echo '
                                    <tr>

                                    <td class="br">' . $id. '</td>
                                    <td class="br">' . $image. '</td>
                                    <td class="br">' . $user. '</td>
                                    <td class="br">' . $idsp. '</td>
                                    <td class="br">'.$noidung.'</td>
                                    <td class="br">' . $ngaybinhluan. '</td>
                                    <td>
                                        <a href="javascript:confirmDelete(' . $xoabl . ')" ><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>
                                    ';
                    }
                    ?>
                </table>
            </div>
        </form>
    </div>
    <script>
        function confirmDelete(delUrl) {
            if (confirm("Bạn có muốn xóa không ? ")) {
                document.location = delUrl;
            }
        }
    </script>
</div>
</div>