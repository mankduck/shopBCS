<?php
    function loadAll_magiamgia()
    {
        $sql = "SELECT * FROM magiamgia ORDER BY id DESC";
        $listmgg = pdo_query($sql);
        return $listmgg;
    }
    
?>