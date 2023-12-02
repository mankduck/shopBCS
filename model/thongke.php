<?php
function loadAll_thongke()
{
    $sql = "SELECT danhmuc.id as madm, danhmuc.tendanhmuc as tendm, count(sanpham.id) AS countsp, min(sanpham.price) AS minprice, max(sanpham.price) AS maxprice, avg(sanpham.price) as avgprice FROM sanpham LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddanhmuc GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

function loadAll_thongke_spbc()
{
    $sql = "SELECT sanpham.tensanpham AS tensanpham, chitietdonhang.idsp, SUM(soluong) AS tongsoluong
    FROM chitietdonhang INNER JOIN sanpham ON sanpham.id = chitietdonhang.idsp
    GROUP BY chitietdonhang.idsp ORDER BY tongsoluong DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

function loadAll_thongkebl()
{
    $sql = "SELECT sanpham.id as masp, sanpham.tensanpham as tensp, sanpham.image as anhsp, count(binhluan.id) AS countbl FROM binhluan LEFT JOIN sanpham ON sanpham.id = binhluan.idsp GROUP BY sanpham.id ORDER BY sanpham.id DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}


function loadAll_tongdonhang()
{
    $sql = "SELECT DATE_FORMAT(ngaydat, '%Y-%m') AS thang, COUNT(*) AS tongdon
        FROM donhang
        GROUP BY DATE_FORMAT(ngaydat, '%Y-%m')";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

function loadAll_tongdonhang_ngay()
{
    $sql = "SELECT DATE_FORMAT(ngaydat, '%Y-%m-%d') AS ngay, COUNT(*) AS tongdon
        FROM donhang
        GROUP BY DATE_FORMAT(ngaydat, '%Y-%m-%d')";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

?>