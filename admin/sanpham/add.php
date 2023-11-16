<div class="row main-admin">
    <div class="row title-admin mb">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="">Mã sản phẩm</label><br>
                <input type="text" name="masp" id="" placeholder="Auto number" disabled>
            </div>
            <div class="row mb10">
                <label for="">Danh mục</label><br>
                <select name="iddm" id="">
                    <?php foreach ($listdanhmuc as $key => $value) { ?>
                        <option value="<?php echo $value['id'] ?>">
                            <?php echo $value['tendanhmuc'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="row mb10">
                <label for="">Tên sản phẩm</label><br>
                <input type="text" name="tensp" id="">
            </div>
            <div class="row mb10 err">
                    <?php if (isset($cksp)) {
                        echo "<h2>$cksp</h2>";
                    }
                    ; ?>
                </div>
            <div class="row mb10">
                <label for="">Giá</label><br>
                <input type="number" name="giasp" id="">
            </div>
            <div class="row mb10 err">
                    <?php if (isset($ckgia)) {
                        echo "<h2>$ckgia</h2>";
                    }
                    ; ?>
                </div>
            <div class="row mb10">
                <label for="">Hình ảnh</label><br>
                <input type="file" name="image" id="">
            </div>
            <div class="row mb10">
                <label for="">Mô tả</label><br>
                <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" value="Thêm mới" name="themmoi">
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