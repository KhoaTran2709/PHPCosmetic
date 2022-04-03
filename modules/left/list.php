
<?php 
    $sql_pertype = "SELECT * FROM `perfume_type`";
    $run_pertype = mysqli_query($conn,$sql_pertype);
?>
<div class="box-list">
<div class="tieude">Loại Nước Hoa</div>
    
        <ul class = "list">
            <?php
                while($dong_pertype=mysqli_fetch_array($run_pertype)){
            ?>
            <li>
                <a href="index.php?quanli=loainuochoa&id=<?php echo $dong_pertype['Type_ID'] ?>"><?php echo $dong_pertype['Type_Name'] ?></a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div> <!-- kết thúc navi-bar loại nước hoa -->