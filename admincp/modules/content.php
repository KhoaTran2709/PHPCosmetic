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
    }
  ?>
    <div class ="clear"></div>