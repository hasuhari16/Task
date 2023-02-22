<?php
require 'working.php';
if(isset($_SESSION["id"])){
  header("Location: profile.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register</title> <link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <h1>Register</h1>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Name</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Register</button>
    </form>
    <br>
    <a href="login.php">Already Have a Account? <b>(Login)</b></a>
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
