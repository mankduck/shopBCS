<?php
function insert_sanpham($tensp, $giasp, $img_name, $mota, $iddm)
{
    $sql = "INSERT INTO sanpham(tensanpham, price, image, mota, iddanhmuc) VALUES ('$tensp', '$giasp', '$img_name', '$mota', '$iddm')";
    pdo_execute($sql);
}

function delete_sanpham($id)
{
    $sql = "DELETE FROM sanpham WHERE id=" . $id;
    pdo_execute($sql);
}

function loadAll_sanpham($kyw, $iddm, $page)
{

    $limit = 9;
    $start = ($page - 1) * $limit;

    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != "") {
        $sql .= " and tensanpham like '%" . $kyw . "%'";
    }

    if ($iddm > 0) {
        $sql .= " and iddanhmuc = '" . $iddm . "'";
    }

    $sql .= " order by id ASC LIMIT " . $start . ', ' . $limit;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadOne_sanpham($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}


function update_sanpham($id, $tensp, $giasp, $name_img, $mota, $iddm)
{
    if ($name_img != "") {
        $sql = "UPDATE sanpham SET tensanpham='$tensp', price='$giasp', image='$name_img', mota='$mota', iddanhmuc='$iddm' WHERE id='$id'";
    } else {
        $sql = "UPDATE sanpham SET tensanpham='$tensp', price='$giasp', mota='$mota', iddanhmuc='$iddm' WHERE id='$id'";
    }
    pdo_execute($sql);
}


function update_sanpham_view($id, $view)
{
    $sql = "UPDATE sanpham SET view='$view' WHERE id='$id'";
    pdo_execute($sql);
}



function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY view DESC LIMIT 0,6";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadAll_sanpham_top10()
{
    $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY view DESC LIMIT 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_sanpham_cungloai($id, $iddanhmuc)
{
    $sql = "SELECT * FROM sanpham WHERE iddanhmuc = " . $iddanhmuc . " AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}


function load_tendm($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tendanhmuc;
    } else {
        return "";
    }
}


function checkSP($tensanpham)
{
    $sql = "SELECT * FROM sanpham WHERE tensanpham='" . $tensanpham . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}



?>