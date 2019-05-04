<html>
	<head>
		<title>Aula de cookie</title>
	</head>
	<body>
		<?php
$data= array('empresa' => "hcode treinamento" 
);

setcookie("NOME_COOKIE",json_encode($data),time()+3600);

?>
		<span><?php echo "ok cookie criado"; ?></span>
		
	</body>
</html>
