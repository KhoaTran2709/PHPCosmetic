<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/css.css" />
  <title>Trang AdminCP</title>
</head>

<?php
session_start();
  if(!isset($_SESSION['dangnhap']))
  {
    header('location:login.php');
  }
?>
<body>
  <div class ="wrapper">
  <?php
    include('modules/config.php');
    include('modules/header.php');
    include('modules/menu.php');
    include('modules/content.php');
    include('modules/footer.php');
  ?>

</body>
</html>