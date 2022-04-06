
<?php
if(isset($_POST['search']))
{
    $search = $_POST['searchtext'];
    $sql_search = "select * from perfume where Perfume_Name LIKE '%$search%'";
    $query_search = mysqli_query($conn,$sql_search);
}
?>
    <p style = "text-align:center; color:red;padding:10px"> Sản phẩm tìm thấy</p>
	<div class ="product">
        <?php
            if($count = mysqli_num_rows($query_search)==0) {?>
            <p>Không tìm thấy sản phẩm !</p>
            
        <?php
            }else{
        ?>
		<ul>
		<?php
			while($dong_search=mysqli_fetch_array($query_search)){
			?>
            <li><a href="index.php?quanli=chitietnuochoa&id=<?php echo $dong_search['Perfume_ID'] ?>">
            	<img src="admincp/modules/quanlinuochoa/uploads/<?php echo $dong_search['Perfume_Image'] ?>" width="150" height="150" />
                <p><?php echo $dong_search['Perfume_Name'] ?></p>
                <p><?php echo $dong_search['Perfume_Price'] ?></p>

                </a>
			</li>
       <?php
		}
    }
		?>
		</ul>
	</div>