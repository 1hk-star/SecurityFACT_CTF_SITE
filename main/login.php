<?php
  include_once "./php/session.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script type="text/javascript">

  $(function()
  {

    $("#button").click(function()
      {
        $.ajax({
        type: "POST",
        dataType: "json",
        url: "./php/login.php",
        data: {idinput:$('#ID').val(), passwordinput:$('#password').val()},
        async: false,

        success: function(data)
        {
          if(data==1)
          {
            alert("Login Success!!");
            top.document.location.reload();
            //location.replace("home.html");
          }
          else if (data==0)
            alert("Login Fail!!");
          
        },
        error: function(xhr, status, error)
        {
          alert("error");
        }
      });
    });
  });
      
  </script>
</head>
<body>
<?php if($_SESSION['login_user']!=null)
{

}

else
{?>
  <header><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <h5>Log In</h>
    <h5>-----------------------</h>
  </header>
  <section>
    <div class=longin>
      <br/><center><label for="ID">&nbsp;&nbsp;ID&nbsp;</label>
      <input id="ID" type="text" name="idinput" size="20" maxlength="15" required><br/><br/>
      <label for="password">PASSWORD&nbsp;</label>
      <input id="password" type="password" name="passwordinput" size="20" maxlength="20" required>&nbsp;
      <input id="button" type="button" value="submit">
    </center>
  </div>
  </section>
  <br/><h5>-----------------------</h>
  <?php } ?>
</body>
</html>
