<?php

$v1 = md5($_POST[input]);


if($v1 == '0')
{
	$fp = fopen("flag12345.txt","r");
	$v2 = fgets($fp);

	echo $v2;
}

else
	echo "Try again";
?>