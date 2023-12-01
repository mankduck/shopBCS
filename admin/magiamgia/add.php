<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>THÊM MỚI MÃ GIẢM GIÁ</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=addmgg" method="post">
            <div class="row mb10">
                <label for="">ID</label><br>
                <input type="text" name="id" id="" placeholder="Auto number" disabled>
            </div>
            <div class="row mb10">
                <label for="">Mã giảm giá</label><br>
                <input type="text" name="magiamgia" id="">
            </div>
            <div class="row mb10">
                <label for="">Số tiền giảm</label><br>
                <input type="text" name="sotiengiam" id="">
            </div>
            <div class="row mb10">
                <input type="submit" value="Thêm mới" name="themmoi">
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