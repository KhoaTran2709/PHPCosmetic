<?php
    include('../config.php');
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
    }else{
        //xoa
    }
?>