<?php
function insert_taikhoan($user, $password, $email)
{
    $sql = "INSERT INTO taikhoan(user, password, email) VALUES ('$user', '$password', '$email')";
    pdo_execute($sql);
}


function checklogin($user, $password)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "' AND password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkUser($user)
{
    $sql = "SELECT * FROM taikhoan WHERE user='" . $user . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkPass($password)
{
    $sql = "SELECT * FROM taikhoan WHERE password='" . $password . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function updatePass($id, $password)
{
    $sql = "UPDATE taikhoan SET password='$password' WHERE id='$id'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkid($id)
{
    $sql = "SELECT * FROM taikhoan WHERE id='" . $id . "'";
    $tk = pdo_query_one($sql);
    return $tk;
}


function update_taikhoan($id, $user, $hoten, $password, $email, $name_img, $address, $phone, $role)
{
    if ($name_img != "") {
        $sql = "UPDATE taikhoan SET user='$user', hoten='$hoten', password='$password', email='$email', image='$name_img', address='$address', phone='$phone', role='$role' WHERE id='$id'";
    } else {
        $sql = "UPDATE taikhoan SET user='$user', hoten='$hoten', password='$password', email='$email', address='$address', phone='$phone', role='$role' WHERE id='$id'";

    }
    pdo_execute($sql);
}


function loadAll_taikhoan($kyw)
{
    $sql = "SELECT * FROM taikhoan WHERE 1";
    if ($kyw != "") {
        $sql .= " and user like '%" . $kyw . "%'";
    }
    $sql .= " order by id desc";
    $listtk = pdo_query($sql);
    return $listtk;
}

function loadOne_taikhoan($id)
{
    $sql = "SELECT * FROM taikhoan WHERE id=" . $id;
    $tk = pdo_query_one($sql);
    return $tk;
}

function delete_taikhoan($id)
{
    $sql = "DELETE FROM taikhoan WHERE id=" . $id;
    pdo_execute($sql);
}


?>