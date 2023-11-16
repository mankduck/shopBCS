<?php
function insert_donhang($madonhang, $iduser, $hoten, $phone, $address, $ghichu, $idsp, $tensanpham, $price, $image, $soluong, $thanhtien, $tong, $trangthai, $ngaydat)
{
    $sql = "INSERT INTO donhang(madonhang, iduser, hoten, phone, address, ghichu, idsp, tensanpham, price, image, soluong, thanhtien, tong, trangthai, ngaydat) VALUES ('$madonhang', '$iduser', '$hoten', '$phone', '$address', '$ghichu', '$idsp', '$tensanpham', '$price', '$image', '$soluong', '$thanhtien', '$tong', '$trangthai', '$ngaydat')";
    pdo_execute($sql);
}

?>