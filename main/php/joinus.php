<?php

include_once "./dbconnect.php";

$id = $_POST['idinput'];
$nickname = $_POST['nninput'];
$pw = $_POST['passwordinput'];
$pwcheck = $_POST['passwordcheckinput'];
$email = $_POST['mailinput'];

$id = trim($id);
$nickname = trim($nickname);
$pw = trim($pw);
$pwcheck = trim($pwcheck);
$email = trim($email);

$sql = "SELECT * FROM ctf_member WHERE id = '{$id}'";

$res = $dbconnect -> query($sql);


if($res->num_rows >= 1)
{
	$auth = 2;
}

else
{
	$pw = sha1("security".$pw);

	$sql = "INSERT INTO ctf_member(id, nickname, pw, email, point) VALUES";
	$sql .= "('{$id}', '{$nickname}', '{$pw}', '{$email}', '0')";
	$res = $dbconnect -> query($sql);

	if($res)
	{
		$auth = 1;
	}

	else
	{
		$auth = 0;
	}

	$sql = "INSERT INTO check_preprob(id) VALUES";
	$sql .= "('{$id}')";
	$res = $dbconnect -> query($sql);
}
	

echo json_encode($auth);

?>