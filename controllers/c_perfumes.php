<?php
    include("models/m_perfumes.php");

    class C_nuoc_hoa{
        public function Hien_thi_nuoc_hoa(){
            $m_nuoc_hoa = new M_nuoc_hoa();
            $nuoc_hoas = $m_nuoc_hoa->Doc_nuoc_hoa();

            include 'views/v_perfumes.php';
        }
        
    }
    
?>

