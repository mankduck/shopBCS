<?php
    if($_SESSION['user']['role'] != 1){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="Content-Security-Policy" content="script-src 'unsafe-eval'"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <title>
        Sagami Việt Nam - Bao cao su chính hãng cao cấp
    </title>
    <link rel="icon" href="//bizweb.dktcdn.net/100/150/761/themes/202166/assets/favicon.png?1688540934534"
        type="image/x-icon">
</head>

<body>
    <div class="container">



        <div class="row header-admin">
            <img src="../view/image/logo-_2_.jpg" alt="">
        </div>





        <div class="row nav">
            <ul>
                <li>
                    <a href="index.php?act=trangadmin">TRANG CHỦ</a>
                </li>
                <li>
                    <a href="index.php?act=listdm">DANH MỤC</a>
                </li>
                <li>
                    <a href="index.php?act=listsp">HÀNG HÓA</a>
                </li>
                <li>
                    <a href="index.php?act=listtk">TÀI KHOẢN</a>
                </li>
                <li>
                    <a href="index.php?act=magiamgia">MÃ GIẢM GIÁ</a>
                </li>
                <li>
                    <a href="index.php?act=donhang">ĐƠN HÀNG</a>
                </li>
                <li>
                    <a href="index.php?act=dsbl">BÌNH LUẬN</a>
                </li>
                <li>
                    <a href="index.php?act=thongke">THỐNG KÊ</a>
                </li>
            </ul>
        </div>