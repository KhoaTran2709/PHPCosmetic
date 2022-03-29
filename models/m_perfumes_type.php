<?php
    require_once("database.php");

    class M_loai_nuoc_hoa extends database{
        public function Doc_loai_nuoc_hoa(){
            $sql = "select * from perfume_type";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
    }
?>

