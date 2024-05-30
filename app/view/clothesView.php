<?php

require_once "view.php";

class clothesView extends view{

  function showClothes($clothes){ 

    $this->smarty->assign("clothes", $clothes);
    $this->smarty->display("htmlClothes.tpl");

}

  function showStoreProd($storePS){
    $this->smarty->assign("storePS", $storePS);
    $this->smarty->display("htmlStoreProducts.tpl");
  }
}
