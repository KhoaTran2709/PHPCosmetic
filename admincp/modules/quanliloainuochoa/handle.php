<?php
    include('../config.php');
    $id=$_GET['id'];
    $tenloainuochoa=$_POST['tenloainuochoa'];
    $motaloainuochoa=$_POST['motaloainuochoa'];
    if(isset($_POST['add']))
    {
        //thêm
        $sql_them= "insert into perfume_type(Type_Name,Type_Description) values ('$tenloainuochoa','$motaloainuochoa')";
        mysqli_query($conn,$sql_them);
        header('location:../../index.php?quanli=quanliloainuochoa&ac=add');
    }else if(isset($_POST['edit']))
    {
        //sua
        $sql_sua = "UPDATE `perfume_type` SET `Type_Name`='$tenloainuochoa',`Type_Description`='$motaloainuochoa' WHERE `Type_ID` = '$id'";
        mysqli_query($conn,$sql_xoa);
        header('location:../../index.php?quanli=quanliloainuochoa&ac=sua&id ='.$id);
    }else{
        //xoa
        $sql_xoa = "DELETE FROM `perfume_type` WHERE `Type_ID` = '$id'";
        mysqli_query($conn,$sql_xoa);
        header('location:../../index.php?quanli=quanliloainuochoa&ac=add');
    }
?>