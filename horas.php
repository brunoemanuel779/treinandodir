<form method="POST">
	<label for="horasinicial">Horas Inicial</label>
	<input type="text" name="horasinicial"><br>
	<label for="horasfinal">Horas Final</label>
	<input type="text" name="horasfinal"><br>
	<button tipe="submit">Enviar</button>
</form>
<?php
 error_reporting(0);
 $hif=$_POST['horasinicial'];
 $hff=$_POST['horasfinal'];

$tempoinicial=strtotime('2019-05-02 '.$hif);
$tempofinal=strtotime('2019-05-02 '.$hff);
$segundostotal=$tempofinal-$tempoinicial;

$horas = floor($segundostotal / 3600);
$minutos = floor(($segundostotal - ($horas * 3600)) / 60);
echo "O intervalo entre $hif e $hff e igual a : ";
echo $horas.":".$minutos;

?>