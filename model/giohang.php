<?php
function insert_giohang($idsp, $tensanpham, $image, $price, $soluong, $thanhtien, $iduser)
{
    $sql = "INSERT INTO giohang(idsp,tensanpham, image, price, soluong, thanhtien, iduser) VALUES ('$idsp', '$tensanpham', '$image', '$price', '$soluong', '$thanhtien', '$iduser')";
    pdo_execute($sql);
}

function loadAll_giohang()
{
    $sql = "SELECT * FROM giohang ORDER BY id DESC";
    $listgiohang = pdo_query($sql);
    return $listgiohang;
}

function update_giohang_sl($idsp, $soluong, $thanhtien)
{
    $sql = "UPDATE giohang SET soluong='$soluong', thanhtien='$thanhtien' WHERE idsp='$idsp'";
    pdo_execute($sql);
}



function loadOne_giohang($iduser)
{
    $sql = "SELECT * FROM giohang WHERE iduser= '$iduser'";

    $gh = pdo_query($sql);

    return $gh;
}

function delete_giohang_tc($iduser)
{
    $sql = "DELETE FROM giohang WHERE iduser=" . $iduser;
    pdo_execute($sql);
}


function delete_giohang($id)
{
    $sql = "DELETE FROM giohang WHERE id=" . $id;
    pdo_execute($sql);
}

?>