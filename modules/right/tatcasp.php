
<?php
    $sql_all= "select * from perfume";
    $query_all=mysqli_query($conn,$sql_all);
?>
    <div class="tieude">Nước Hoa</div>
	<div class ="product">
		<ul>
		<?php
			while($dong_all=mysqli_fetch_array($query_all)){
			?>
            <li><a href="index.php?quanli=pertype&id=<?php echo $dong_per['Type_ID'] ?>">
            	<img src="admincp/modules/quanlinuochoa/uploads/<?php echo $dong_all['Perfume_Image'] ?>" width="150" height="150" />
                <p><?php echo $dong_all['Perfume_Name'] ?></p>
                <p><?php echo $dong_all['Perfume_Price'] ?></p>
                            
                <p>Chi tiết</p>
                </a>
			</li>
       <?php
		}
		?>
		</ul>
	</div>