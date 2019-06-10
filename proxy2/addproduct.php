<?php 
include_once("includes/Crud.php");  
$crud = new Crud();
$Pl					= strip_tags($_POST['Pl']);
$ImagePath			= strip_tags($_POST['ImagePath']);
$Oprice				= strip_tags($_POST['Oprice']);
$Sp					= strip_tags($_POST['Sp']);

$result = $crud->execute("INSERT INTO `product` (`ID`, `Pl`, `ImagePath`, `Oprice`,`Sp`) VALUES  ('','".$Pl."','". $ImagePath ."', '" .$Oprice ."'",'"'+$Sp+'"');
	
?>


