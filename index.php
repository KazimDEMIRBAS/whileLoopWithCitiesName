<?php
$sehirlistesi = ["İstanbul", "Ankara", "Antalya", "Muğla", "İzmir", "Sakarya","Bursa","Artvin"];
$array = count($sehirlistesi);

$i = 0;
while ($i < $array)
{
    echo $sehirlistesi[$i] ."<br />";
    $i++;
}
?>