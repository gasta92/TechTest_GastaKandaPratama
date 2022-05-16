<?php
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$jml = count($aplikasi);
$i = 1;
while($i <= $jml):
    echo $aplikasi[$i].'<br>';
    $i++;
endwhile;

?>