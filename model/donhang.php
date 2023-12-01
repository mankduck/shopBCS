<?php
function insert_donhang($madonhang, $hoten, $phone, $diachi, $magiamgia, $ghichu, $pttt, $tong, $tinhtrang, $ngaydat, $iduser)
{										

    $sql = "INSERT INTO donhang(madonhang, hoten, phone, diachi, magiamgia, ghichu, pttt, tong, tinhtrang, ngaydat, iduser) VALUES ('$madonhang', '$hoten', '$phone', '$diachi', '$magiamgia', '$ghichu', '$pttt', '$tong', '$tinhtrang', '$ngaydat', '$iduser')";
    pdo_execute($sql);
}


function loadAll_donhang()
{
    $sql = "SELECT * FROM donhang ORDER BY iddonhang DESC";
    $listgiohang = pdo_query($sql);
    return $listgiohang; 
}

function loadAll_donhang_tgian($tgdau, $tgcuoi)
{
    $sql = "SELECT * FROM donhang";
    if ($tgdau != "" && $tgcuoi != ""){
        $sql .= " WHERE ngaydat >= '$tgdau' AND ngaydat <= '$tgcuoi'";
    };
    $sql .= " ORDER BY iddonhang DESC";
    // var_dump($sql);
    $listgiohang = pdo_query($sql);
    return $listgiohang; 
}




function loadOne_donhang($iddonhang)
{
    $sql = "SELECT * FROM donhang WHERE iddonhang=" . $iddonhang;
    $suadm = pdo_query_one($sql);
    return $suadm;
}

function loadAll_donhang_user($iduser)
{
    $sql = "SELECT * FROM donhang  WHERE iduser='$iduser' ORDER BY iddonhang DESC";
    $listgiohang = pdo_query($sql);
    return $listgiohang; 
}


function insert_ctdonhang($idsp, $soluong, $thanhtien, $iddonhang)
{										

    $sql = "INSERT INTO chitietdonhang(idsp, soluong, thanhtien, iddonhang) VALUES ('$idsp', '$soluong', '$thanhtien', '$iddonhang')";
    pdo_execute($sql);
}

function loadAll_ctdonhang_sp($iddonhang)
{
    $sql = "SELECT * , soluong, thanhtien, iddonhang FROM sanpham INNER JOIN chitietdonhang ON chitietdonhang.idsp = sanpham.id WHERE iddonhang='$iddonhang'";
    $listgiohang = pdo_query($sql);
    return $listgiohang;
}


function update_trangthai($tinhtrang, $iddonhang)
{
    $sql = "UPDATE donhang SET tinhtrang='$tinhtrang' WHERE iddonhang='$iddonhang'";
    // var_dump($sql);
    // die;
    pdo_execute($sql);
}


function loadAll_tinhtrang()
{
    $sql = "SELECT * FROM tinhtrang";
    $listtt = pdo_query($sql);
    return $listtt; 
}



?>