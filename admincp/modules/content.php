<div class = "content">
  <?php
    if(isset($_GET['quanli']))
    {
      $tam = $_GET['quanli'];
    }else{
      $tam='';
    }if($tam =='quanliloainuochoa')
    {
      include('modules/quanliloainuochoa/main.php');
    }if($tam == 'quanlinuochoa')
    {
      include('modules/quanlinuochoa/main.php');
    }
    
  ?>
    <div class ="clear"></div>