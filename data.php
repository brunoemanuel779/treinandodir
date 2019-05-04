<?php
$hinicial="15:00";
$hfinal="21:20";
$tempoinicial=strtotime('2019-05-02 '.$hinicial);
$tempofinal=strtotime('2019-05-02 '.$hfinal);
$segundostotal=$tempofinal-$tempoinicial;

$horas = floor($segundostotal / 3600);
$minutos = floor(($segundostotal - ($horas * 3600)) / 60);
echo "O intervalo entre $hinicial e $hfinal e igual a : ";
echo $horas.":".$minutos;




?>