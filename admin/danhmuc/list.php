<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <div class="row mb"></div>
    <div class="row mb content-admin">
    <div class="row mb10">
                <!-- <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn"> -->
                <a href="index.php?act=adddm">
                    <input type="button" value="Thêm mới">
                </a>
            </div>
        <form action="" method="post">
            <div class="row mb10 formdsloai">
                <table class="mb">
                    <tr>
                        <!-- <th class="br">Chọn</th> -->
                        <th class="br">Mã loại</th>
                        <th class="br">Tên loại</th>
                        <th>Tùy chỉnh</th>
                    </tr>
                    <?php
                    foreach ($listdanhmuc as $key => $value) {
                        $suadm = "index.php?act=suadm&id=" . $value['id'];
                        $xoadm = "'index.php?act=xoadm&id=" . $value['id']."'";
                        echo '
                                    <tr>

                                    <td class="br">' . $value['id'] . '</td>
                                    <td class="br">' . $value['tendanhmuc'] . '</td>
                                    <td>
                                        <a href="' . $suadm . '" ><input type="button" value="Sửa"></a>  
                                        <a href="javascript:confirmDelete(' . $xoadm . ')" ><input type="button" value="Xóa"></a>
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