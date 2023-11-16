<?php
function insert_binhluan($noidung, $user, $image, $idsp, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan(noidung, user, image, idsp, ngaybinhluan) VALUES ('$noidung', '$user', '$image', '$idsp', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadAll_binhluan($idsp)
{
    $sql = "SELECT * FROM binhluan WHERE 1";
    if($idsp > 0){
        $sql .=  " AND idsp = '".$idsp."'";
    }

    $sql .= " ORDER BY id DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id=" . $id;
    pdo_execute($sql);
}


?>