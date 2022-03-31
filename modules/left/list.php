<?php 
    $sql_pertype = "SELECT * FROM `perfume_type`";
    $run_pertype = mysqli_query($conn,$sql_pertype);
?>

    <p style = "text-align:center; color:blue; border:1">Loại nước hoa</p>
    <div class="navi-loainuochoa">
        <ul>
            <?php
                while($dong_pertype=mysqli_fetch_array($run_pertype)){
            ?>
            <li>
                <a href="index.php?quanli=pertype?id=<?php echo $dong_pertype['Type_ID'] ?>"><?php echo $dong_pertype['Type_Name'] ?></a>
            </li>
            <?php
            }
            ?>
        </ul>
    </div> <!-- kết thúc navi-bar loại nước hoa -->