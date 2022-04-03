<?php
    include('modules/config.php'); // Danh cung thich cmt cho nay
    session_start();
    if(isset($_POST['login'])){
        $ad_id = $_POST['ad_id'];
        $ad_pass = $_POST['ad_pass'];
        $sql = "SELECT * FROM `admins` WHERE `Ad_ID` = '$ad_id' AND `Ad_Password` = '$ad_pass' LIMIT 1";
        $query=mysqli_query($conn,$sql);
        $nums= mysqli_num_rows($query);
        if($nums > 0)
        {
            $_SESSION['dangnhap'] = $ad_id;
            header('location:index.php');
        }else{
            header('location:login.php');
        }
    }
?>
<form action="" method = "post" >
<center><table width="300" border="1" >
  <tr>
    <td colspan="2" style="text-align:center;font-size:30px;">Đăng Nhập AdminCP</td>
  </tr>
  <tr>
    <td>ID</td>
    <td><input type="text" name="ad_id" size="20"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="ad_pass"size="20"></td>
  </tr>
  <tr>
    <td colspan="2">
        <div align="center">
    <button type = "submit" name="login" value="Login">Login</button>
</div>
    </td>
  </tr>
</table></center></form>

