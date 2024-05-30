<?php

require_once "view.php";

class clothesView extends view{

  function showClothes($clothes){ 

    $this->smarty->assign("clothes", $clothes);
    $this->smarty->display("htmlClothes.tpl");

}

}
