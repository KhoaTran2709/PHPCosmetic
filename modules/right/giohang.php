<?php
    session_start();
    //session_destroy();
?>

<h1>Giỏ hàng của bạn</h1><h3 style = "float:right; padding-right:5px">
    <?php
        if(isset($_SESSION['login']))
     {
            echo 'Xin chào: '.$_SESSION['login'];
     }
    ?>
</h3>
<?php
    
    //session_destroy();
    //them san pham vao gio
    if(isset($_GET['add']) && !empty($_GET['add']))
    {
        $id = $_GET['add'];
        @$_SESSION['giohang_'.$id]+=1;
        header('location:index.php?quanli=giohang');
    }
    //cong san pham
    if(isset($_GET['them']))
    {
        
        $_SESSION['giohang_'.$_GET['them']]+=1;
        header('location:index.php?quanli=giohang');
    }
    //tru san pham
    if(isset($_GET['tru']))
    {
        
        $_SESSION['giohang_'.$_GET['tru']]-=1;
        header('location:index.php?quanli=giohang');
    }
    //delete san pham trong gio
    if(isset($_GET['delete']))
    {
        
        $_SESSION['giohang_'.$_GET['delete']]=0;
        header('location:index.php?quanli=giohang');
    }
    //hien thi san pham da them vao trong gio
    $thanhtien = 0;
    foreach($_SESSION as $name => $value)
    {
        if($value > 0)
        {
            if(substr($name,0,8)=='giohang_')
            {
                $id  = substr($name,8,strlen($name-8));
                $sql = "select * from perfume where Perfume_ID= '".$id."'";
                $query = mysqli_query($conn,$sql);
                
                while($dong = mysqli_fetch_array($query))
                {
                    $tongtien = $dong['Perfume_Price']*$value;
                    echo $dong['Perfume_Name']. ' x '.$value. ' @ '.$dong['Perfume_Price'] . " = ".$tongtien.' VND'. '<a href = "index.php?quanli=giohang&them='.$id.'">[+]</a><a href = "index.php?quanli=giohang&tru='.$id.'">[-]</a><a href = "index.php?quanli=giohang&delete='.$id.'">[Delete]</a><br/><br/><br/>';
                }
                
            }
            $thanhtien += $tongtien;
        }
    }
    if($thanhtien ==0)
    {
        echo "Giỏ hàng trống";
    }
    else{
        echo "Tổng tiền thanh toán = ".$thanhtien. ' VND ';
    }
?>
<p style = "float:right"><a href = "index.php?quanli=thanhtoan">Thanh toán</a></p>
