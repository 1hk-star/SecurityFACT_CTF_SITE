<?php
  include_once "./php/session.php";
  include_once "./php/info_update.php";
?>

<!DOCTYPE html>
<html>
<head>
  <title> FACTChallenge - Forensic CTF </title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
  <header>
    <center><img id="image" width="200" height="100"/></center>
    <h1>FACT_Challenge</h1>
    <h3><i>CTF for Newbie Forenser </i></h3>

    <?php

      if($_SESSION['login_user']!=null)
      {?>
      <!-- 로그인 한 상태일 때 -->
        <p style="color: white; text-align: right; margin-bottom: 10px; margin-right: 10px; font-size: 20px;"><?=$_SESSION['login_user'][nickname]?> (<?=$_SESSION['login_user'][point]?>point)&nbsp;&nbsp;
        <a href = "./php/logout.php"><input id="LogoutClick" type="button" value="Logout"></a></p> 
        <?php
      }


      if($_SESSION['login_user']==null)
      {?>
       <!-- 로그인 안 한 상태일 때 -->
      <p style="color: white; text-align: right; margin-bottom: 10px; margin-right: 57px;">[Not logged on.]</p>
      <p style="color: white; text-align: right; margin-bottom: 10px; margin-right: 50px; font-size: 20px;">Guest (0point)</p>
      <?php
      }?>


    <script>
        window.onload = function () {
            // 변수를 선언합니다.
            var count = 0;
            var image = document.getElementById('image');
            var frames = [
                '../picture/1.png', '../picture/2.png', '../picture/3.png', '../picture/4.png', '../picture/5.png',
                '../picture/6.png', '../picture/7.png', '../picture/8.png'
            ];

            image.src = 'http://media3.giphy.com/media/sIIhZliB2McAo/giphy.gif';
            // 타이머 반복을 시작합니다.
            /*setInterval(function () {
                image.src = frames[count % frames.length];
                count = count + 1;
            }, 1000 / 8);*/
        };

    </script>
      
    <hr />
  </header>
  <menu>
    <div class="box1"><a href="home.html" target="iframe_a"><b>HOME</b></a></div>
    <div class="box"><a href="challenge.html" target="iframe_a"><b>CHALLENGE</b></a></div>
    <div class="box"><a href="ranking.php" target="iframe_a"><b>RANKING</b></a></div>
    <div class="box"><a href="joinus.php" target="iframe_a"><b>JOIN US</b></a></div>
    <div class="box"><a href="login.php" target="iframe_a"><b>LOGIN</b></a></div>
    <div class="box"><a href="about.html" target="iframe_a"><b>ABOUT</b></a></div>
  </menu>
  <section>
    <iframe height="900px" width="100%" src="home.html" name="iframe_a" style="border:none"></iframe>
  </section>
  <br /><br /><br /><br />
  <footer><hr /><br />
		<p>Copyrightⓒ Choi Ga-Yeong All Rights Reserved.</p>
	</footer>
  <br />
</body>
</html>