<?php

function bagi_bilangan_bulat($bil1,$bil2){

    $ck = (($bil1 < 0) ^ ($bil2 < 0)) ? -1 : 1;

    $bil1 = abs($bil1);
    $bil2 = abs($bil2);
    
    $strt = 0;
    while($bil1 >= $bil2){
        $bil1-=$bil2;
        ++$strt;
    }
    if($ck==-1) $strt=-$strt;
    return $strt;
}

echo bagi_bilangan_bulat(7 , 2)."\n";
echo bagi_bilangan_bulat(8 , 4)."\n";
echo bagi_bilangan_bulat(-7 , 2)."\n";
?>