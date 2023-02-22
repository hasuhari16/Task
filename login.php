<?php
require 'working.php';
if(isset($_SESSION["id"])){
  header("Location: profile.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title> <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <h2>Login</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Login</button>
    </form>
    <br>
    <a href="register.php">Register for New..!</a>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(){
    $(document).ready(function(){
      var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        action: $("#action").val(),
      };

      $.ajax({
        url: 'working.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
    });
  }
</script>

  </body>
</html>
