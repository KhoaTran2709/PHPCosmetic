<div class ="left">
    <?php
    if(isset($_GET['ac']))
    {
        $tam=$_GET['ac'];
    }else{
        $tam ='';
    }if($tam=='add')
    {
        include('modules/quanlinuochoa/add.php');
    }if($tam=='edit')
    {
        include('modules/quanlinuochoa/edit.php');
    }
    ?>
</div>
<div class ="right">
    <?php
    include('modules/quanlinuochoa/list.php');
    ?>
</div>