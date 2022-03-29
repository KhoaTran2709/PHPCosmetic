<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h3 class="title">Nước Hoa</h3>
        <div class="small_container">
            <div class="row">
                <ul class="perfume_item">
        <?php
            foreach($nuoc_hoas as $perfume){           
        ?>
            
            <li>
                <a href="#">
                    <img src="img/hinh_nuoc_hoa/<?php echo $perfume->Perfume_Image?>" width="150px"; height="120px">
                    <h4>Name: <?php echo $perfume->Perfume_Name?> </h4>
                    
                    Price: <?php echo $perfume->Perfume_Price?>               
               </a>
               <input type="submit" value="Chi Tiết" class="btnCT"></input>
           </li> 
                    
        <?php
        }   
        ?>
                </ul>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>