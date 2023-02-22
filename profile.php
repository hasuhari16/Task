<?php
require 'working.php';
if(isset($_SESSION["id"])){
  $id = $_SESSION["id"];
  $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id"));
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profile</title><link rel="stylesheet" href="./css/style.css">

  </head>
  <body>
    <label for="">DOB</label>
    <input type="date"> <br>
    <label for="">Age</label>
    <input type="number"><br>
    <button>Update</button><br><br>
    <a href="logout.php"><< Go Back...</a>
  </body>
</html>
