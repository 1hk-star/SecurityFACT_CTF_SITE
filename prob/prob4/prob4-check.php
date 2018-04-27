<?php
//include_once "..\main\php\session.php"
session_start();
include_once "../../main/php/dbconnect.php";
header("Content-Type:application/json");


$input_flag = $_POST['flag'];
$prob_num = $_POST['prob_num'];
$prob_point = $_POST['prob_point'];
$id = $_SESSION['login_user'][id];


$sql = "SELECT * FROM check_preprob WHERE id = '{$id}'";
$res = $dbconnect -> query($sql);
$row = $res->fetch_array(MYSQLI_ASSOC);


$file = fopen("../flag.txt","r");
if(!file) die("cannot open the file");

$count=1;

while(!feof($file)){
      $origin_flag = fgets($file);
      $origin_flag = trim($origin_flag);

      if($id === null)
        {
          $auth = 3;
          break;
        }

      else if(($input_flag === $origin_flag) && ($count == $prob_num))
      {
        
        if($row['prob'.$prob_num] == NULL )
        {
          $auth = 1;
          $sql = "UPDATE ctf_member set point = point + '{$prob_point}' where id like '{$id}'";
          $res = $dbconnect -> query($sql);

          $sql = "UPDATE check_preprob set prob4 = 1 where id like '{$id}'";
          $res = $dbconnect -> query($sql);
        }
        else
        {
          $auth = 4;
        }
          

        break;
      }
      else
         $auth = 0;

      $count++;
   }

   echo json_encode($auth);

?>