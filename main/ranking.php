<?php
  include_once "./php/dbconnect.php";
  
  $sql = "select * from ctf_member order by point desc limit 0, 100;";
  $result = $dbconnect -> query($sql);
?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js">
  </script>
</head>
<body>
  <header>
    <br/><br/><br/><h2>&#9752;Ranking&#9752;</h></br>
  </header>
  <div class="rank">
  <table style="margin: auto; padding-top: 0px;">
    <thead>
    
      <tr style="color: white;">
        <th width="100px">Rank</th>
        <th width="180px">Name</th>
        <th width="120px">Point</th>
        <th width="220px">Last Time</th>
      </tr>
    </thead>
    <tbody>
    <?php
      for($i = 0; $i < $result->num_rows; $i++)
      {
        $member = $result -> fetch_array(MYSQLI_ASSOC);
      
    ?>
      
        <tr style="color:white">
          <td><?=$i+1?></td>
          <td><?=$member['nickname']?></td>
          <td><?=$member['point']?></td>
          <td></td>
        </tr>
    <?php }?>
    
    </tbody>
  </table>
</div>
</body>
</html>
