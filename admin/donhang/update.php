<?php
if (is_array($suadonhang)) {
    extract($suadonhang);
}
?>

<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>CẬP NHẬT ĐƠN HÀNG</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=updatedh" method="post">
            <div class="row mb10">
                <label for="">Mã đơn hàng</label><br>
                <input type="text" name="maloai" id="" placeholder="<?php echo $madonhang; ?>" readonly>
            </div>
            <div class="row mb10">
                <select name="tinhtrang" id="">
                    <option value="1">Chờ xác nhận</option>
                    <option value="2">Đã xác nhận</option>
                    <option value="3">Đang vận chuyển</option>
                    <option value="4">Giao hàng thành công</option>
                </select>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php echo $iddonhang; ?>">
                <input type="submit" value="Cập nhật" name="capnhatdh">
                <a href="index.php?act=donhang">
                    <input type="button" value="Danh sách">
                </a>
            </div>
            <?php
            if (isset($thongbao) && $thongbao) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>
</div>