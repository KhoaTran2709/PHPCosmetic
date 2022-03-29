<?php
    include("controllers/c_perfumes.php");
    include("controllers/c_perfumes_type.php");
    $c_nuoc_hoa = new C_nuoc_hoa();
    $c_nuoc_hoa->Hien_thi_nuoc_hoa();
    //$readmore = '<a href="m_perfumes.php?id='.$row['id'].'"><br/>Đọc thêm...</a>';
    //echo "<p>".substr($row['Perfume_Description'], 0 , 150).$readmore."</p><br/>";
    $c_loai_nuoc_hoa = new C_loai_nuoc_hoa();
    $c_loai_nuoc_hoa->Hien_thi_loai_nuoc_hoa();
?>
