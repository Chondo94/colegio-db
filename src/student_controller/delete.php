<?php 
include_once('../database/connection.php');

$id = $_GET['id'];
$sql = "UPDATE student SET is_active = 0 WHERE id = $id";

$db_con -> exec($sql);
header('Location: ../../student/list.php');

?>