<?php
    function loadAll_magiamgia()
    {
        $sql = "SELECT * FROM magiamgia ORDER BY id DESC";
        $listmgg = pdo_query($sql);
        return $listmgg;
    }

    function insert_magiamgia($magiamgia, $sotiengiam, $tgtao)
{
    $sql = "INSERT INTO magiamgia(magiamgia, sotiengiam, thoigiantao) VALUES ('$magiamgia', '$sotiengiam', '$tgtao')";
    pdo_execute($sql);
}


function delete_magiamgia($id)
{
    $sql = "DELETE FROM magiamgia WHERE id=" . $id;
    pdo_execute($sql);
}

    
?>