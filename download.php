<?php
$dir1="uploads";
$dir2="img";
if(!is_dir($dir1))mkdir($dir1);
if(!is_dir($dir2))mkdir($dir2);
$filename="1483729397_ArcDark.zip";
if(!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)){
	$file=fopen($dir1.DIRECTORY_SEPARATOR.$filename);
	fclose($file);
}
rename($dir1.DIRECTORY_SEPARATOR.$filename,$dir2.DIRECTORY_SEPARATOR.$filename);
echo"movido com sucesso";
?>