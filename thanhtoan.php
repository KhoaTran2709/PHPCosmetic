<?php
	@session_start();
	include('admincp/modules/config.php');

		$name=$_SESSION['dangnhap'];	
        $date.date('Y-M-d');
        $admin = "admin";
        $status = "0";
		$insert_cart="INSERT INTO `order`( `Order_Status`, `User_ID`, `Ad_ID`) VALUES ('".$status."','".$name."','".$admin."')";
        
		$ketqua=mysqli_query($conn,$insert_cart);
		if($ketqua){
			for($i=0;$i<count($_SESSION['product']);$i++){
                $sql = "select max(Order_ID) from order";
			$max=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($max);
			
			$cart_id=$row[0];
			$product_id=$_SESSION['product'][$i]['Perfume_ID'];
			$quantity=$_SESSION['product'][$i]['Perfume_Quantity'];
			
			$price=$_SESSION['product'][$i]['Perfume_Price'];
			
			 $insert_cart_detail="insert into order_detail (Order_ID,Perfume_ID,Detail_Price,Detail_Quantity) values('".$cart_id."','".$product_id."','".$price."','".$quantity."');";
			 $cart_detail=mysqli_query($conn,$insert_cart_detail);

		}
		
	}	
		unset($_SESSION['product']);
		
		header('location:index.php?quanli=camon');
	
?>