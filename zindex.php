<?php
    // while ($a <= 10) {
    //     $a++;
    // }


    // $i = 0;
    // $sum = 0;

    // do {
    //     echo "a = $a <br>";
    //     $tong += $i;
    //     $i++;
    // } while ($i <= 10);
    // echo $tong;


    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $tong = 0;
    $count = 0;

    for($i = 1; $i < count($arr); $i += 2){
        $tong += $arr[$i];
    }

    for($i = 0; $i < count($arr); $i ++){
        for($a = 2; $a < $i; $a++){
            if($i % $a != 0){

            }
        }
        // $tong += $arr[$i];
    }

    echo $tong;
?>