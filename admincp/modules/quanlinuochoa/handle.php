<?php
    include('../config.php');
    $id=$_GET['id'];
    $tennuochoa=$_POST['tennuochoa'];
    $gianuochoa=$_POST['gianuochoa'];
    $soluongnuochoa=$_POST['soluongnuochoa'];
    $hinhnuochoa=$_FILES['hinhnuochoa']['name'];
    $hinhnuochoa_tmp=$_FILES['hinhnuochoa']['tmp_name'];
    move_uploaded_file($hinhnuochoa_tmp,'uploads/'.$hinhnuochoa);
    $motanuochoa=$_POST['motanuochoa'];
    $loainuochoa=$_POST['loainuochoa'];
    
    if(isset($_POST['add']))
    {
        //thêm
        $sql_them= "INSERT INTO `perfume`(`Perfume_Name`, `Perfume_Price`, `Perfume_Quantity`, `Perfume_Image`, `Perfume_Description`, `Type_ID`) VALUES ('$tennuochoa','$gianuochoa','$soluongnuochoa','$hinhnuochoa','$motanuochoa','$loainuochoa')";
        mysqli_query($conn,$sql_them);
        header('location:../../index.php?quanli=quanlinuochoa&ac=add');
    }else if(isset($_POST['edit']))
    {
        //sua
        if($hinhnuochoa!=''){
        $sql_sua = "UPDATE `perfume` SET `Perfume_Name`='$tennuochoa',`Perfume_Price`='$gianuochoa',`Perfume_Quantity`='$soluongnuochoa',`Perfume_Image`='$hinhnuochoa',`Perfume_Description`='$motanuochoa',`Type_ID`='$loainuochoa' WHERE `Perfume_ID`='$_GET[id]'";
        }else{
            $sql_sua="UPDATE `perfume` SET `Perfume_Name`='$tennuochoa',`Perfume_Price`='$gianuochoa',`Perfume_Quantity`='$soluongnuochoa',`Perfume_Description`='$motanuochoa',`Type_ID`='$loainuochoa' WHERE `Perfume_ID`='$_GET[id]'";
        }
        mysqli_query($conn,$sql_sua);
        header('location:../../index.php?quanli=quanlinuochoa&ac=edit&id='.$_GET['id']);
    }else{
        //xoa
        $sql_xoa = "DELETE FROM `perfume` WHERE `Perfume_ID` = '$id'";
        mysqli_query($conn,$sql_xoa);
        header('location:../../index.php?quanli=quanlinuochoa&ac=add');
    }
?>