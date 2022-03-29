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
        <h3 class="title">Loại Nước Hoa</h3>
        <div class="small_container">
            <div class="row">
                
                <ul class="perfumetype_item">
        <?php
            foreach($loai_nuoc_hoas as $perfumetype){           
        ?>
            
            <li>
                <a href = "#"
                    <h4><?php echo $perfumetype->Type_Name?> </h4>
            </a>
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