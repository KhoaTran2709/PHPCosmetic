<div class ="left">
    <?php
    if(isset($_GET['ac']))
    {
        $tam=$_GET['ac'];
    }else{
        $tam ='';
    }if($tam=='add')
    {
        include('modules/quanliloainuochoa/add.php');
    }if($tam =='edit')
    {
        include('modules/quanliloainuochoa/edit.php');
    }
    ?>
</div>
<div class ="right">
    <?php
    include('modules/quanliloainuochoa/list.php');
    ?>
</div>