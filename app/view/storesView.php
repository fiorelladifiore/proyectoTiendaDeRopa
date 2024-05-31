<?php

require_once "view.php";


class storesView extends view{


    function showStores($stores){
        
        $this->smarty->assign("stores", $stores);
        $this->smarty->display("htmlStores.tpl");
    }

    // function showFormAddStores(){
    //     $this->smarty->display("htmlFormAddStores.tpl");
    // }

}