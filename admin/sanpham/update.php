<?php
if (is_array($suasp)) {
    extract($suasp);
}
$hinh = "../upload/" . $image;
if (is_file($hinh)) {
    $image = "<img src='" . $hinh . "' width='150'>";
} else {
    $image = "No picture";
}
?>

<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="">Mã sản phẩm</label><br>
                <input type="text" name="masp" id="" placeholder="<?php echo $id;?>" disabled>
            </div>
            <div class="row mb10">
                <select name="iddm" id="">
                    <?php foreach ($listdanhmuc as $key => $value) {
                        if ($value['id'] == $iddanhmuc) {
                            echo "<option value='" . $value['id'] . "' selected>" . $value['tendanhmuc'] . "</option>";
                        } else {
                            echo "<option value='" . $value['id'] . "'>" . $value['tendanhmuc'] . "</option>";
                        }
                    } ?>
                </select>
            </div>
            <div class="row mb10">
                <label for="">Tên sản phẩm</label><br>
                <input type="text" name="tensp"
                    value="<?php if (isset($tensanpham) && $tensanpham != "")
                        echo $tensanpham; ?>">
            </div>
            <div class="row mb10">
                <label for="">Giá</label><br>
                <input type="number" name="giasp" value="<?php if (isset($price) && $price != "")
                    echo $price; ?>">
            </div>
            <div class="row mb10">
                <label for="">Hình ảnh</label><br>
                <?php echo $image; ?><br>
                <input type="file" name="image" id=""><br>
            </div>
            <div class="row mb10">
                <label for="">Mô tả</label><br>
                <textarea name="mota" cols="30" rows="10"><?php if (isset($mota) && $mota != "")
                    echo $mota; ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && $id != "")
                    echo $id; ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp">
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