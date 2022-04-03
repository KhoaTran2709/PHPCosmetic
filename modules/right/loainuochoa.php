<?php
    $sql_chitiet = "select * from perfume WHERE perfume.Type_ID = '$_GET[id]'";
    $query_chitiet= mysqli_query($conn,$sql_chitiet);
    //$count=mysql_num_rows($query_chitiet);
?>
<?php
    $sql_tenloainh = "select Type_Name from perfume_type WHERE Type_ID = '$_GET[id]'";
    $row= mysqli_query($conn,$sql_tenloainh);
    $dong=mysqli_fetch_array($row);
?>
<div class="tieude"><?php echo $dong['Type_Name'] ?></div>
		<ul class ="product">
		<?php
        //if($count>0){
			while($dong_chitiet=mysqli_fetch_array($query_chitiet)){
			?>
            <li><a href="?quanli=chitietnuochoa&Type_ID=<?php echo $dong_chitiet['perfume'] ?>">
            	<img src="admincp/modules/quanlinuochoa/uploads/<?php echo $dong_chitiet['Perfume_Image'] ?>" width="150" height="150" />
                <p><?php echo $dong_chitiet['Perfume_Name'] ?></p>
                <p><?php echo $dong_chitiet['Perfume_Price'] ?></p>
                            
                <p>Chi tiết</p>
                </a>
			</li>
       <?php
		
    }/*else{
		echo 'Hiện chưa có sản phẩm...';
	}*/
		?>
		</ul>
	</div>