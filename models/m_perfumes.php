<?php
    require_once("database.php");

    class M_nuoc_hoa extends database{
        public function Doc_nuoc_hoa(){
            $sql = "select * from perfume";
            $this->setQuery($sql);
            return $this->loadAllRows();
        }
        
    }
    
?>

