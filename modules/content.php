<div class="content">
        	<div class="content_left">
            	<?php
					include('modules/left/list.php');
				?>
            </div>
            <div class="content_right">
            <?php
				if(isset($_GET['quanli'])&&($_GET['quanli'])!=''){
					$tam= $_GET['quanli'];
				}else{
					$tam ='';
				}if($tam == 'detail'){
					include('modules/right/detail.php');
				}elseif($tam == 'pertype'){
					include('modules/right/list-perfume-type.php');
				
				
				}else{
					//include('modules/right/spmoi.php');
				}
			?>
        </div>
        <div class="clear"></div>