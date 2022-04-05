<?php
    session_start();
    //session_destroy();
    if(isset($_POST['login']))
    {
        $tentaikhoan = $_POST['tentaikhoan'];
        $matkhau = $_POST['matkhau'];
        $sql_dangnhap = "SELECT * FROM `users` WHERE `User_ID` = '$tentaikhoan' AND `User_Password` = '$matkhau' LIMIT 1";
        $query_dangnhap = mysqli_query($conn,$sql_dangnhap);
        $count_dangnhap = mysqli_num_rows($query_dangnhap);
        if($count_dangnhap == 0)
        {
            header('location:index.php');
            
            //header('location:login.php');
        }else{
            $_SESSION['login'] = $tentaikhoan;
            header('location:index.php?quanli=giohang');
        }
    }
?>
<form action =  "" method = "post" enctype = "multipart/form-data">
<table width = "150" border = "1">

<tr>
    <td colspan = "2"><div align = "center">Đăng nhập thành viên</div></td>
</tr>
<tr>
    <td>Tên tài khoản</td>
    <td><input type="text" name="tentaikhoan" size = "30"></td>
</tr>
<tr>
    <td>Mật khẩu</td>
    <td><input type="password" name="matkhau" size = "30"></td>
</tr>
<tr>
    <td colspan = "2"><div align = "center">
        <button type = "submit" name = "login" value = "Đăng Nhập">Đăng nhập</button>
    </div></td>
</tr>

</table>
</form>