<?php
    include("models/m_perfumes_type.php");

    class C_loai_nuoc_hoa{
        public function Hien_thi_loai_nuoc_hoa(){
            $m_loai_nuoc_hoa = new M_loai_nuoc_hoa();
            $loai_nuoc_hoas = $m_loai_nuoc_hoa->Doc_loai_nuoc_hoa();

            include 'views/v_perfumes_type.php';
        }
    }
?>

