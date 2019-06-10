<?php 
include_once("includes/Crud.php");  
$crud = new Crud();
$productname					= strip_tags($_POST['productname']);
$productCat						= strip_tags($_POST['productCat']);
$Description					= strip_tags($_POST['Description']);

$result = $crud->execute("INSERT INTO `product` (`ID`, `productname`, `productCat`, `Description`) VALUES('','".$productname."','".$productCat."','".$Description."')");
//echo $productCat;	
?>


