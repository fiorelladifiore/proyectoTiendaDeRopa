<?php

require_once "view.php";

class errView extends view{

    function showErr($msg){
        $this->smarty->assign("msg", $msg);
        $this->smarty->display("htmlErr.tpl");
    }
}