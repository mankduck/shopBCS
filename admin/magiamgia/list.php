<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>DANH SÁCH MÃ GIẢM GIÁ</h1>
    </div>
    <div class="row mb"></div>
    <div class="row mb content-admin">
        <div class="row mb10">
            <!-- <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn"> -->
            <a href="index.php?act=addmgg">
                <input type="button" value="Thêm mới">
            </a>
        </div>
        <form action="" method="post">
            <div class="row mb10 formdsloai">
                <table class="mb">
                    <tr>
                        <!-- <th class="br">Chọn</th> -->
                        <th class="br">ID</th>
                        <th class="br">Mã giảm giá</th>
                        <th class="br">Số tiền giảm</th>
                        <th class="br">Thời gian tạo</th>
                        <th class="br">Thời gian hết hạn</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    foreach ($listmgg as $key => $value){
                        $suamgg = "index.php?act=suamgg&id=" . $value['id'];
                        $xoamgg = "'index.php?act=xoamgg&id= " . $value['id'] . "'";
                    echo '
                                    <tr>

                                    <td class="br">' . $value['id'] . '</td>
                                    <td class="br">' . $value['magiamgia'] . '</td>
                                    <td class="br">' . $value['sotiengiam'] . '</td>
                                    <td class="br">' . $value['thoigiantao'] . '</td>
                                    <td class="br">' . $value['thoigianhet'] . '</td>
                                    <td>
                                        <a href="' . $suamgg . '" ><input type="button" value="Sửa"></a>  
                                        <a href="javascript:confirmDelete(' . $xoamgg . ')" ><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>
                                    ';

                    }?>
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