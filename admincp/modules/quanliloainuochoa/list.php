<?php
    
    $sql_list = "select `Type_ID`, `Type_Name`, `Type_Description` from perfume_type";
    $row_list = mysqli_query($conn,$sql_list);
?>
<table width ="100%" border ="2">
    <tr>
       <td>TypeID</td>
       <td>Type_Name</td>
       <td>Type_Description</td>
       <td colspan="1">Quản Lí</td>
    </tr>
    <?php
    
        while($dong=mysqli_fetch_array($row_list)) {
    ?>
    <tr>
        
        <td><?php echo $dong['Type_ID'] ?></td>
        <td><?php echo $dong['Type_Name'] ?></td>
        <td><?php echo $dong['Type_Description'] ?></td>
        <td><button>Sửa</button><button>Xóa</button></td>
    </tr>
    <?php
    
        }
    ?>
</table>