<?php

$sql = "SELECT * FROM `perfume` WHERE `Perfume_ID` = '$_GET[id]'";
//$sql ="select * from perfume where Perfume_ID = '$_GET[id]'";
$run = mysqli_query($conn, $sql);
$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlinuochoa/handle.php?id=<?php echo $dong['Perfume_ID'] ?>" method="post" enctype="multipart/form-data">
  <table width="50%" border="1">
    <tr>
      <td colspan="2" style="text-align:center;font-size:30px;">Sửa chi tiết sản phẩm</td>
    </tr>
    <tr>
      <td>Tên sản phẩm</td>
      <td><input type="text" name="tennuochoa" value="<?php echo $dong['Perfume_Name'] ?>"></td>
    </tr>
    <tr>
      <td>Giá sản phẩm</td>
      <td><input type="text" name="gianuochoa" value="<?php echo $dong['Perfume_Price'] ?>"></td>

    </tr>
    <tr>
      <td>Số lượng</td>
      <td><input type="text" name="soluongnuochoa" value="<?php echo $dong['Perfume_Quantity'] ?>"></td>

    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhnuochoa"><img src="modules/quanlinuochoa/uploads/<?php echo $dong['Perfume_Image'] ?>"></td>

    </tr>
    <tr>
      <td>Mô tả</td>
      <td><textarea name="motanuochoa" cols="35" rows="12" value="<?php echo $dong['Perfume_Description'] ?>"></textarea></td>
    </tr>
    </tr>
    <?php
    $sql = "select * from perfume_type";
    $run = mysqli_query($conn, $sql);
    ?>
    <tr>
      <td>Loại sản phẩm</td>
      <td>
        <select name="loainuochoa">
          <?php
          while ($dong = mysqli_fetch_array($run)) {
          ?>
            <option selected="selected" value="<?php echo $dong['Type_ID'] ?>"> <?php echo $dong['Type_Name'] ?></option>
          <?php
          }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <button name="edit" value="Sửa chi tiết sản phẩm">Sửa chi tiết Sản Phẩm</button>
        </div>
      </td>
    </tr>
  </table>
</form>