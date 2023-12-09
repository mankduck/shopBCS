<?php
function insert_binhluan($noidung, $idsp, $iduser, $ngaybinhluan)
{
    $sql = "INSERT INTO binhluan(noidung, idsp, ngaybinhluan, iduser) VALUES ('$noidung', '$idsp', '$ngaybinhluan', '$iduser')";
    pdo_execute($sql);
}

function loadAll_binhluan($idsp)
{
    $sql = "SELECT binhluan.*, taikhoan.user, taikhoan.image
    FROM binhluan
    LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
    WHERE 1";
    if ($idsp > 0) {
        $sql .= " AND binhluan.idsp = '" . $idsp . "'";
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