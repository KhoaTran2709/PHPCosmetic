<?php
  if(isset($_GET['ac'])&&$_GET['ac']=='logout')
  {
    unset($_SESSION['dangnhap']);
    //session_destroy()
    header('location:login.php'); 
  }
?>
<div class = "menu" >
      <ul>
        <li><a href = "index.php">Trang chủ</a></li>
        <li><a href = "index.php?quanli=quanliloainuochoa&ac=add">Quản lí loại nước hoa</a></li>
        <li><a href = "index.php?quanli=quanlinuochoa&ac=add">Quản lí sản phẩm</a></li>
        <li><a href = "index.php?ac=logout">Đăng xuất</a></li>
      </ul>
    </div>