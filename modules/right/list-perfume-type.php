<?php
    $sql_per = "select * from perfume where Type_ID = `$_GET[id]`";
    $query_per= mysqli_query($conn,$sql_per);
?>
<div class="tieude"><?php echo $dong['Perfume_Name'] ?></div>
                	<ul class="product">
                     <?php
					 if($count>0){
						while($dong_per=mysql_fetch_array($num_per)){
						?>
                    	<li><a href="?quanli=pertype&id=<?php echo $dong_per['Type_ID'] ?>&id=<?php echo $dong_per['Type_Name'] ?>">
                       
                        	<img src="admincp/modules/quanlinuochoa/uploads/<?php echo $dong_per['hinhnuochoa'] ?>" width="150" height="150" />
                            <p><?php echo $dong_per['Perfume_Name'] ?></p>
                            <p><?php echo $dong_per['Perfume_Price'] ?></p>
                            
                        	<p>Chi tiết</p>
                        </a></li>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </ul>
                
            
            </div>