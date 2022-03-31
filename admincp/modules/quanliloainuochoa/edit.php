<?php 
    $id = (isset($_POST['id']) ? $HTTP_RAW_POST_DATA['id'] : '');
    $sql ="SELECT * FROM `perfume_type` WHERE `Type_ID` = `$id`";
    $run_edit=mysqli_query($conn,$sql);
    $dong = mysqli_fetch_array($run_edit); 
    
?>
<form action="modules/quanliloainuochoa/handle.php?id=<?php echo $dong['Type_ID']?>" method="post" enctype="multipart/form-data">
<table width ="50%" border ="1">
    <tr>
        <td colspan="2"><div align="center">Sửa loại nước hoa</div></td>
    </tr>
    <tr>
        <td> Tên Loại</td>
        <td><input type="text" name="tenloainuochoa" value="<?php echo $dong['Type_Name'] ?>"></td>
    </tr>
    <tr>
        <td> Mô Tả</td>
        <td><input type="text" name="motaloainuochoa"value="<?php echo $dong['Type_Description']?>"></td>
    </tr>
    <tr>
        <td colspan ="2"><div align="center">
            <input type ="submit" name="edit" id="edit" value="Edit"></td>
    </tr>
</table>
</form>