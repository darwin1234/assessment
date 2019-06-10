<?php
include_once("includes/Crud.php");
$crud = new Crud();
$query = "SELECT * FROM product ORDER BY ID DESC";
$result = $crud->getData($query);
echo json_encode($result);
?>

