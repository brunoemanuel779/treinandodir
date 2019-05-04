<form  method="POST" enctype="multipart/form-data">
	<input type="file" name="fileupload"><br>
	<button type="submit">Send</button>
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=== "POST"){
	$file=$_FILES["fileupload"];
	if($file["error"]){
		throw new Exception("Error:" .$file["error"]);
		
	}
	$dirupload="uploads";
	if(!is_dir($dirupload)){
		mkdir($dirupload);
	}
	if(move_uploaded_file($file["tmp_name"],$dirupload.DIRECTORY_SEPARATOR.$file["name"]))
	{
		echo "<br>upload realizado com sucesso";

	}
	else
	{
		echo "<br> nao foi possivel fazer upload";
	}
}
?>