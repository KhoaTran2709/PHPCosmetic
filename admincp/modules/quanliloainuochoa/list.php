<?php
    
    $sql_list = "select `Type_ID`, `Type_Name`, `Type_Description` from perfume_type";
    $row_list = mysqli_query($conn,$sql_list);
?>
<table width ="auto" border ="2" align="right">
    <tr>
       <td>TypeID</td>
       <td>Type_Name</td>
       <td>Type_Description</td>
       <td colspan="2">Quản Lí</td>
    </tr>
    <?php
        
        while($dong=mysqli_fetch_array($row_list)) {
    ?>
    <tr>
        <td><?php echo $dong['Type_ID'] ?></td>
        <td><?php echo $dong['Type_Name'] ?></td>
        <td><?php echo $dong['Type_Description'] ?></td>
        <td><a href ="index.php?quanli=quanliloainuochoa&ac=edit&id =<?php echo $dong['Type_ID'] ?>">Sửa</a></td>
        <td><a href="modules/quanliloainuochoa/handle.php?id=<?php echo $dong['Type_ID'] ?>">Xóa</a></td>
    </tr>
    <?php
        
        }
    ?>
</table>