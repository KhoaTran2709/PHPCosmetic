<?php
    $sql_chitietsp = "select * from perfume where Perfume_ID = '$_GET[id]'";
    $query_chitietsp = mysqli_query($conn,$sql_chitietsp);
    $dong_chitietsp = mysqli_fetch_array($query_chitietsp);
?>
<table width = "auto" border = "1" style = "border-collapse:collapse">
    <tr>
        <td colspan ="2"><div align = "center">Chi tiết nước hoa</div></td>
    </tr>
 
    <tr>
        <td rowspan = "2"><img src = "admincp/modules/quanlinuochoa/uploads/<?php echo $dong_chitietsp['Perfume_Image'] ?>" width = "200" height = "200"/></td>
        <td>Sản phẩm: <?php echo $dong_chitietsp['Perfume_Name'] ?></td>
    </tr>
    <tr>
        <td style="color:#F00" >Giá: <?php echo $dong_chitietsp['Perfume_Price']. ' VND' ?></td>
    </tr>
    <tr>
    <td colspan ="2"><div align = "center">Mô tả mùi hương</div></td>
    </tr>
    <tr>
        <td colspan = "2"><?php echo $dong_chitietsp['Perfume_Description'] ?></td>
    </tr>
    <tr>
    <td style = "border: 0"colspan = "2"><a href="index.php?quanli=giohang&add=<?php echo $dong_chitietsp['Perfume_ID'] ?>">
    <img src = "img/buynow.jpg" height = "150" width="150" style = "float:right" />
    </a>
    </td>
    </tr>
    
</table>