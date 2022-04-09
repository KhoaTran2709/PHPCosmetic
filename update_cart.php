<?php
	session_start();
	include('admincp/modules/config.php');
	//
	if(isset($_GET['thoat'])&&$_GET['thoat']==1){
		unset($_SESSION['dangnhap']);
		header('location:index.php?quanli=giohang');
	}
	//tru sp
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['Perfume_ID']){
				
				$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$cart_item['Perfume_Quantity'],'Perfume_Price'=>$cart_item['Perfume_Price']);
				$_SESSION['product']=$product;
			}else{
				$giam=$cart_item['Perfume_Quantity']-1;
				if($cart_item['Perfume_Quantity']>1){
				$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$giam,'Perfume_Price'=>$cart_item['Perfume_Price']);
				
				}else{
					$giam=1;
					$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$giam,'Perfume_Price'=>$cart_item['Perfume_Price']);
				}
				$_SESSION['product']=$product;
			}

			header('location:index.php?quanli=giohang');
		}
		
	}
	//cong them sp
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['product'] as $cart_item){
			if($id!=$cart_item['Perfume_ID']){
				
				$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$cart_item['Perfume_Quantity'],'Perfume_Price'=>$cart_item['Perfume_Price']);
				$_SESSION['product']=$product;
			}else{
				$tang=$cart_item['Perfume_Quantity']+1;
				if($cart_item['Perfume_Quantity']<9){
				
				$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$tang,'Perfume_Price'=>$cart_item['Perfume_Price']);
				
			}else{
				
				$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['idPerfume_ID'],'Perfume_Quantity'=>$cart_item['Perfume_Quantity'],'Perfume_Price'=>$cart_item['Perfume_Priceia']);
			}
				$_SESSION['product']=$product;
			}

			header('location:index.php?quanli=giohang');
		}
		
	}
	//xoa san pham
	if(isset($_SESSION['product'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['product'] as $cart_item){
			if($cart_item['Perfume_ID']!= $id){
				$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$cart_item['Perfume_Quantity'],'Perfume_Price'=>$cart_item['Perfume_Price']);
			}
		$_SESSION['product']=$product;
		header('location:index.php?quanli=giohang');
		}
	}
	//xoa toan bo giohang
	if(isset($_GET['xoatoanbo'])&&$_GET['xoatoanbo']==1){
		session_destroy();
		header('location:index.php?quanli=giohang');
	}
	//them giohang
	if(isset($_POST['add_to_cart'])){
		$id=$_GET['id'];
		$soluong=$_POST['soluong'];
		$sql="select * from perfume where Perfume_ID='$id' limit 1";
		$row=mysqli_query($conn,$sql);
		$dong=mysqli_fetch_array($row);
		if($dong){
			$new_product=array(array('Perfume_Name'=>$dong['Perfume_Name'],'Perfume_ID'=>$id,'Perfume_Quantity'=>$soluong,'Perfume_Price'=>$dong['Perfume_Price']));
			if(isset($_SESSION['product'])){
				$found=false;
				foreach($_SESSION['product'] as $cart_item){
					if($cart_item['Perfume_ID'] == $id){
						$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$soluong,'Perfume_Price'=>$cart_item['Perfume_Price']);
						$found=true;
					}else{
						$product[]=array('Perfume_Name'=>$cart_item['Perfume_Name'],'Perfume_ID'=>$cart_item['Perfume_ID'],'Perfume_Quantity'=>$cart_item['Perfume_Quantity'],'Perfume_Price'=>$cart_item['Perfume_Price']);
					}
					
				}if($found==false){
					$_SESSION['product']=array_merge($product,$new_product);
				}else{
					$_SESSION['product']=$product;
				}
			}else{
				$_SESSION['product']=$new_product;
			}
		}
		header('location:index.php?quanly=dathang');
	}
?>

