<?php
$file=$_FILES['logo'];

$file_name = $file['name'];

$tem_name = $file['tmp_name'];


$fileExt = explode('.', $file_name);
$fileExtlowCase = strtolower(end($fileExt));

$fileNameToSave = uniqid('',true).".".$fileExtlowCase;

$fileDestination = 'views/uploads/'.$fileNameToSave;

move_uploaded_file($tem_name,$fileDestination);

$ClubMdl->createClub($_POST["nom"],$_POST["description"],$_POST["datecreation"],$fileDestination,0); 

header('Location: ./index.php');