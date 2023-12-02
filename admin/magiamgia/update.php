<?php
if (is_array($suamgg)) {
    extract($suamgg);
}
?>

<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>CẬP NHẬT MÃ GIẢM GIÁ</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=updatemgg" method="post">
            <div class="row mb10">
                <label for="">ID</label><br>
                <input type="text" name="id" id="" placeholder="<?php echo $id;?>" disabled>
            </div>
            <div class="row mb10">
                <label for="">Mã giảm giá</label><br>
                <input type="text" name="magiamgia"
                    value="<?php if (isset($magiamgia) && $magiamgia != "")
                        echo $magiamgia; ?>">
            </div>
            <div class="row mb10">
                <label for="">Số tiền giảm</label><br>
                <input type="text" name="sotiengiam"
                    value="<?php if (isset($sotiengiam) && $sotiengiam != "")
                        echo $sotiengiam; ?>">
            </div>
            <div class="row mb10">
                <label for="">Thời gian hết hạn</label><br>
                <input type="datetime" name="tghet"
                    value="<?php if (isset($thoigianhet) && $thoigianhet != "")
                        echo $thoigianhet; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && $id != "")
                    echo $id; ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=magiamgia">
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