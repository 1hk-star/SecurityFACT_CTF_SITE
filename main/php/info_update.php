<?php

session_start();
include_once "..\main\php\dbconnect.php";

$id = $_SESSION['login_user'][id];
if(!empty($id)) {
$sql = "SELECT * FROM ctf_member WHERE id = '{$id}'" ;

$res = $dbconnect -> query($sql);
$row = $res->fetch_array(MYSQLI_ASSOC);



if($res->num_rows >0)
{
	$_SESSION['login_user'][point] = $row['point'];
}
}
?>