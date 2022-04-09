<?php
	@session_start();
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
        $sql_login = "select * from users where User_Email='$email' and User_Password='$pass' limit 1";
		$sql=mysqli_query($conn,$sql_login);
		$count=mysqli_num_rows($sql);
		if($count>0){
			$tendangnhap=$_SESSION['dangnhap']=$email;
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			echo '<a href="index.php?quanli=giohang" style="font-size:20px;">Quay lại để thanh toán</a>';
		}else{
			echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Email và Tài khoản bị sai</p>';
		}
	}
?>
<div class="tieude">
	CHÀO MỪNG BẠN ĐÃ ĐẾN VỚI WEBSITE CỦA CHÚNG TÔI 
</div>
<div class="dangkI">
  <p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác </p>
  <form action="" method="post" enctype="multipart/form-data">
	<table width="auto" border="1" style="border-collapse:collapse;">
  <tr>
    <td width="40%">Email : <strong style="color:red;"> (*)</strong></td>
    <td width="60%"><input type="text" name="email" size="50"></td>
  </tr>
    <td>Mật khẩu : <strong style="color:red;"> (*)</strong></td>
   <td width="60%"><input type="password" name="pass" size="50"></td>
  </tr>
  <tr>
    <td colspan="2">
    	 
           <p><input type="submit" name="login" value="Gửi thông tin" /></p>
         
    </td>
    </tr>
</table>
</form>

</div>

	<h3><a href="?quanli=dangki" style="text-decoration:none;color:#FFF;margin:10px;border-radius:10px;padding:5px;;background:#F00;float:right;" >Đăng ký tài khoản để mua hàng.</a></h3>

