<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                <label for="">Mã loại</label><br>
                <input type="text" name="maloai" id="" placeholder="Auto number" disabled>
            </div>
            <div class="row mb10">
                <label for="">Tên loại</label><br>
                <input type="text" name="tenloai" id="">
            </div>
            <div class="row mb10">
                <input type="submit" value="Thêm mới" name="themmoi">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listdm">
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