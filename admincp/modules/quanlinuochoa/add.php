<form action="modules/quanlinuochoa/handle.php" method ="POST" enctype="multipart/form-data">
<table width="50%" border="1" >
  <tr>
    <td colspan="2" style="text-align:center;font-size:30px;">Thêm  sản phẩm</td>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input type="text" name="tennuochoa"></td>
  </tr>
  <tr>
    <td>Giá sản phẩm</td>
    <td><input type="text" name="gianuochoa"></td>
    
  </tr>
  <tr>
    <td>Số lượng</td>
    <td><input type="text" name="soluongnuochoa"></td>
    
  </tr>
  <tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhnuochoa"></td>
        
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name="motanuochoa" cols="35" rows="12"></textarea></td>
        
  </tr>
  <?php
    $sql="select * from perfume_type";
    $run = mysqli_query($conn,$sql);
  ?>
  <tr>
    <td>Loại sản phẩm</td>
    <td>
        <select name="loainuochoa">
          <?php
            while($dong=mysqli_fetch_array($run)){
          ?>
            <option value = "<?php echo $dong['Type_ID'] ?>"> <?php echo $dong['Type_Name']?></option>
            <?php
            }
            ?>
        </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    <button name="add" value="Thêm sản phẩm">Thêm Sản Phẩm</button>
    </div>
    </td>
  </tr>
</table>
</form>

