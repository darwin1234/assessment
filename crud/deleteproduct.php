<?php 
include_once("includes/Crud.php");
$crud = new Crud();
$result = $crud->delete($_POST['ID'],'product');
	


