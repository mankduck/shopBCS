<?php
    function insert_sanphamdx($tensp, $giasp, $img_name, $mota, $iddm, $ngayxoa)
    {
        $sql = "INSERT INTO spdaxoa(tensanpham, price, image, mota, iddanhmuc, ngayxoa) VALUES ('$tensp', '$giasp', '$img_name', '$mota', '$iddm', '$ngayxoa')";
        pdo_execute($sql);
    }

    function loadAll_sanphamdx()
    {
        $sql = "SELECT * FROM spdaxoa ORDER BY id DESC";
        $listspdx = pdo_query($sql);
        return $listspdx;
    }
    

function delete_sanphamdx($id)
{
    $sql = "DELETE FROM spdaxoa WHERE id=" . $id;
    pdo_execute($sql);
}

function loadOne_sanphamdx($id)
{
    $sql = "SELECT * FROM spdaxoa WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

?>