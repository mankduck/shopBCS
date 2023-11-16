<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc(tendanhmuc) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM danhmuc WHERE id=" . $id;
    pdo_execute($sql);
}

function loadAll_danhmuc()
{
    $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadOne_danhmuc($id)
{
    $sql = "SELECT * FROM danhmuc WHERE id=" . $id;
    $suadm = pdo_query_one($sql);
    return $suadm;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE danhmuc SET tendanhmuc='$tenloai' WHERE id='$id'";
    pdo_execute($sql);
}


?>