<?php
    if(isset($_POST['dangki']))
    {
        $username=$_POST['username'];
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $tele=$_POST['tele'];
        $sql_dangki = "insert into users(User_ID, User_Name, User_Password, User_Email, User_Address, User_Tele) value ('$username','$name','$pass','$email','$address','$tele')";
        $query_dangki=mysqli_query($conn,$sql_dangki);
        if($query_dangki )
        {
            header('location:index.php?quanli=thongbao');
        }
        else {
            header('location:index.php?quanli=dangki');
        }
    }
?>
<form action="index.php?quanli=dangki" method = "post" enctype = "multipart/form-data">
<table width="300" border="1">
  <tr>
    <td colspan="2" style="text-align:center;">Đăng ký thành viên</td>
  </tr>
  <tr>
    <td>Username: <strong style="color:red;"> (*)</strong></td>
    <td><input type="text" name="username"></td>
  </tr>
  <tr>
    <td>Your Name: <strong style="color:red;"> (*)</strong></td>
    <td><input type="text" name="name"></td>
  </tr>
  <tr>
    <td>Password: <strong style="color:red;"> (*)</strong></td>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td>Email: <strong style="color:red;"> (*)</strong></td>
    <td><input type="text" name="email"></td>
  </tr>
  <tr>
    <td>Address: <strong style="color:red;"> (*)</strong></td>
    <td><input type="text" name="address"></td>
  </tr>
  <tr>
    <td>Tele: <strong style="color:red;"> (*)</strong></td>
    <td><input type="text" name="tele"></td>
  </tr>
  <tr>
    <td colspan="2">
        <div align="center">
            <button name="dangki" value="Đăng Kí">Đăng Kí</button>
        </div>
    </td>
  </tr>
</table>
</form>