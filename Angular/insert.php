<<?php 
include "connection.php";
$data=json_decode(file_get_contents("php://input"));
$id=$dbhandle->real_escape_string($data->id);
$name=$dbhandle->real_escape_string($data->name);
$query="INSERT INTO angular VALUES($id,'".$name."')";
$dbhandle->query($query);
 ?>