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
        url: "./php/joinus.php",
        data: {idinput:$('#ID').val(), passwordinput:$('#password').val(), nninput:$('#Nickname').val()},
        async: false,

        success: function(data)
        {
          if(data==1)
          {
            alert("Join Success!!");
            location.replace("login.php");
          }
          else if (data==0)
            alert("Join Fail!!");
          else if (data==2)
            alert("Overlap ID");
          
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
 <header><br/><br/><br/><br/><br/><br/>
    <h5>** Register **</h>
    <h5>-----------------------</h>
  </header>
  <section>
    <div class=longin>
      <br/><center><label for="ID">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID&nbsp;</label>
      <input id="ID" type="text" name="idinput" size="20" maxlength="15" required><br/><br/>
      <label for="Nickname">&nbsp;NICKNAME&nbsp;</label>
      <input id="Nickname" type="text" name="nninput" size="20" maxlength="10" required><br/><br/>
      <label for="password">PASSWORD&nbsp;</label>
      <input id="password" type="password" name="passwordinput" size="20" maxlength="20" required></br></br>
      <input id = "button" type="submit" value="submit">
    </center>
  </div>
  </section>
  <br/><h5>-----------------------</h>

<?php } ?>
 
</body>
</html>
