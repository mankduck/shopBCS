<?php
    function loadAll_magiamgia()
    {
        $sql = "SELECT * FROM magiamgia ORDER BY id DESC";
        $listmgg = pdo_query($sql);
        return $listmgg;
    }

    function insert_magiamgia($magiamgia, $sotiengiam, $tgtao, $tghet)
{
    $sql = "INSERT INTO magiamgia(magiamgia, sotiengiam, thoigiantao, thoigianhet) VALUES ('$magiamgia', '$sotiengiam', '$tgtao', '$tghet')";
    pdo_execute($sql);
}


function delete_magiamgia($id)
{
    $sql = "DELETE FROM magiamgia WHERE id=" . $id;
    pdo_execute($sql);
}


function loadOne_magiamgia($id)
{
    $sql = "SELECT * FROM magiamgia WHERE id=" . $id;
    $suadm = pdo_query_one($sql);
    return $suadm;
}


function update_magiamgia($id, $magiamgia, $sotiengiam, $tghet)
{
    $sql = "UPDATE magiamgia SET magiamgia='$magiamgia', sotiengiam='$sotiengiam', thoigianhet='$tghet' WHERE id='$id'";
    pdo_execute($sql);
}




    
?>