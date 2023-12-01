<?php
if (is_array($suadm)) {
    extract($suadm);
}
?>

<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                <label for="">Mã loại</label><br>
                <input type="text" name="maloai" id="" placeholder="<?php echo $id;?>" disabled>
            </div>
            <div class="row mb10">
                <label for="">Tên loại</label><br>
                <input type="text" name="tenloai"
                    value="<?php if (isset($tendanhmuc) && $tendanhmuc != "")
                        echo $tendanhmuc; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && $id != "")
                    echo $id; ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
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
</div>