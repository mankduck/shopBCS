<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="view/js/action.js"></script>
    <title>
        Sagami Việt Nam - Bao cao su chính hãng cao cấp
    </title>
    <link rel="icon" href="//bizweb.dktcdn.net/100/150/761/themes/202166/assets/favicon.png?1688540934534"
        type="image/x-icon">
</head>
<script src="https://uhchat.net/code.php?f=78a65f"></script>
<body>
    <div class="container">



        <div class="row">
            <div class="aside header">
                <a href="index.php"><img src="view/image/logo-_2_.jpg" alt=""></a>
            </div>
            <div class="article">
                <div class="boxsearch">
                    <div class="formsearch">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" id="" placeholder="Tìm kiếm">
                            <input type="submit" value="Search" name="tim">
                        </form>
                    </div>
                    <div class="buttondn">
                        <a href="index.php?act=viewcart" class="mr20"><img src="view/image/shopping-cart.png" alt=""
                                width="30xp"></a>
                        <a href="index.php?act=dangnhap"><img src="view/image/user.png" alt="" width="30xp"></a>
                    </div>
                </div>
            </div>
        </div>





        <div class="row nav mb">
            <ul>
                <li>
                    <a href="index.php">TRANG CHỦ</a>
                </li>
                <li>
                    <a href="index.php?act=gioithieu">GIỚI THIỆU</a>
                </li>

                <li>
                    <a href="index.php?act=sanpham">SẢN PHẨM</a>
                    <ul>
                        <?php
                        foreach ($dsdm as $ds) {
                            extract($ds);
                            $linkdm = "index.php?act=sanpham&iddm=" . $id;
                            echo '
                                    <li><a href="' . $linkdm . '">' . $tendanhmuc . '</a></li>
                                    ';
                        }
                        ?>
                        <!-- <li><a href="">Bao cao su cao cấp</a></li>
                            <li><a href="">Bao cao su cổ điển</a></li>
                            <li><a href="">Bao cao su có hương thơm</a></li>
                            <li><a href="">Bao cao su có gân, gai</a></li>
                            <li><a href="">Bao cao su 3D</a></li>
                            <li><a href="">Gel bôi trơn cao cấp</a></li> -->
                    </ul>
                </li>

                <li>
                    <a href="index.php?act=hdsd">HƯỚNG DẪN SỬ DỤNG</a>
                </li>
                <li>
                    <a href="index.php?act=hethongch">HỆ THỐNG CỬA HÀNG</a>
                </li>
                <li>
                    <a href="index.php?act=lienhe">LIÊN HỆ, GÓP Ý</a>
                </li>
            </ul>
        </div>

    </div>