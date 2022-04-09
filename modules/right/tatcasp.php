
<?php
if(isset($_GET['trang']))
{
	$get_trang=$_GET['trang'];
}
else{
	$get_trang='';
}
if($get_trang==''||$get_trang ==1){
	$trang1=0;
}else{
	$trang1 = ($get_trang*4)-4;
}
    $sql_all= "select * from perfume limit $trang1,4";
    $query_all=mysqli_query($conn,$sql_all);
?>
    <div class="tieude">Nước Hoa</div>
	<div class ="product">
		<ul>
		<?php
			while($dong_all=mysqli_fetch_array($query_all)){
			?>
            <li><a href="index.php?quanli=chitietnuochoa&id=<?php echo $dong_all['Perfume_ID'] ?>">
            	<img src="admincp/modules/quanlinuochoa/uploads/<?php echo $dong_all['Perfume_Image'] ?>" width="150" height="150" />
                <p><?php echo $dong_all['Perfume_Name'] ?></p>
                <p><?php echo $dong_all['Perfume_Price'] ?></p>
                </a>
			</li>
       <?php
		}
		?>
		</ul>
	</div>
	<p style = "clear:both"></p>
	Trang:
	<?php
	$sql_phantrang = "select * from perfume";
	$sql_trang=mysqli_query($conn,$sql_phantrang);
	$count = mysqli_num_rows($sql_trang);
	$a = ceil($count/4);
	for($b=1;$b <= $a; $b++)
	{
		echo '<a href= "?trang='.$b.'" style="text-decoartion:none;">'.' '.$b.' '.'</a>';
	}
	?>