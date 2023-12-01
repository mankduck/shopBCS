<?php
if (is_array($suatk)) {
    extract($suatk);
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
        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class="row content-admin mb">
        <form action="index.php?act=updatetk" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <label for="">IDTK</label><br>
                <input type="text" name="masp" id="" placeholder="<?php echo $id; ?>" disabled>
            </div>
            <div class="row mb10">
                <label for="">Tên tài khoản</label><br>
                <input type="text" name="user" readonly value="<?php if (isset($user) && $user != "")
                    echo $user; ?>">
            </div>
            <div class="row mb10">
                <label for="">Họ và tên</label><br>
                <input type="text" name="hoten" readonly value="<?php if (isset($hoten) && $hoten != "")
                    echo $hoten; ?>">
            </div>
            <div class="row mb10">
                <label for="">Password</label><br>
                <input type="text" name="password" readonly  value="<?php if (isset($password) && $password != "")
                    echo $password; ?>">
            </div>
            <div class="row mb10">
                <label for="">Email</label><br>
                <input type="text" name="email" readonly value="<?php if (isset($email) && $email != "")
                    echo $email; ?>">
            </div>
            <div class="row mb10">
                <label for="">Hình ảnh</label><br>
                <?php echo $image; ?><br>
                <input type="file" name="image" id=""><br>
            </div>
            <div class="row mb10">
                <label for="">Địa chỉ</label><br>
                <input type="text" name="address" readonly value="<?php if (isset($address) && $address != "")
                    echo $address; ?>">
            </div>
            <div class="row mb10">
                <label for="">Số điện thoại</label><br>
                <input type="text" name="phone" readonly value="<?php if (isset($phone) && $phone != "")
                    echo $phone; ?>">
            </div>
            <div class="row mb10">
                <label for="">Vai trò</label><br>
                <input type="text" name="role" value="<?php if (isset($role) && $role != "")
                    echo $role; ?>">
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?php if (isset($id) && $id != "")
                    echo $id; ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listtk">
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