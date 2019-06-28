<?php
require_once('../database/connection.php');

$fullname  = $_POST['name'];
$birthdate = $_POST['birthdate'];
$sql = "insert into student values(null, null, '$fullname', '$birthdate', 1)";

echo $fullname;
echo $birthdate;
echo $is_active;

if(isset($db_con) == false){
    

}else{
    $db_con -> exec($sql);
    header('Location: ../../student/list.php');
}

?>