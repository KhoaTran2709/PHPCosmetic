<?php
  $sql = "select * from perfume, perfume_type where perfume_type.Type_ID = perfume.Type_ID";
  $run = mysqli_query($conn,$sql);
?>
<table width="auto" border="1">
  <tr>
    <td>ID</td>
    <td>Name</td>
    <td>Price</td>
    <td>Quantity</td>
    <td>Image</td>
    <td>Description</td>
    <td>Type</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
    while($dong=mysqli_fetch_array($run)){
  ?>
  <tr>
  <td><?php echo $dong['Perfume_ID'];?></td>
  <td><?php echo $dong['Perfume_Name'];?></td>
  <td><?php echo $dong['Perfume_Price'];?></td>
  <td align="center"><?php echo $dong['Perfume_Quantity'];?></td>
  <td><img src="modules/quanlinuochoa/uploads"<?php echo $dong['Perfume_Image'] ?> width="70" height="70"></td>
  <td><?php echo $dong['Perfume_Description'];?></td>
  <td align="center"><?php echo $dong['Type_Name'];?></td>
  <td><a href ="index.php?quanli=quanlinuochoa&ac=edit&id =<?php echo $dong['Type_ID']; ?>">Sửa</a></td>
  <td><a href="modules/quanlinuochoa/handle.php?id=<?php echo $dong['Perfume_ID']; ?>">Xóa</a></td>
  </tr>
  <?php
    }
  ?>
    
</table>
</div>