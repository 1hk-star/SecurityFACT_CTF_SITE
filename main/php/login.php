
<?php
session_start();
include_once "./dbconnect.php";
header("Content-Type:application/json");

$id = $_POST['idinput'];
$pw = $_POST['passwordinput'];

$id = trim($id);
$pw = trim($pw);



$pw = sha1("security".$pw);

$sql = "SELECT * FROM ctf_member WHERE id = '{$id}' AND pw = '{$pw}'";

$res = $dbconnect -> query($sql);
$row = $res->fetch_array(MYSQLI_ASSOC);



if($res->num_rows >0)
{
	$_SESSION['login_user'] = array();
	$_SESSION['login_user'][nickname] = $row['nickname'];
	$_SESSION['login_user'][point] = $row['point'];
	$_SESSION['login_user'][email] = $row['email'];
	$_SESSION['login_user'][id] = $row['id'];

  $auth = 1;
}
else
{
	$auth = 0;
}

	echo json_encode($auth);
?>