<?php

require_once "view.php";

class productsView extends view{

  function showProducts($stores, $products){ 

    $this->smarty->assign("products", $products);
    $this->smarty->assign("stores", $stores);
    $this->smarty->display("htmlAllProducts.tpl");
}

function showStoreProd($storePS){
  $this->smarty->assign("storePS", $storePS);
  $this->smarty->display("htmlStoreProducts.tpl");
}

  function showProduct($product){
    $this->smarty->assign("product", $product);
    $this->smarty->display("htmlProduct.tpl");
}

function showStoresOnAddForm($stores){
  $this->smarty->assign("stores", $stores);
  $this->smarty->display("htmlAddProdForm.tpl");
}

function showEditFormProduct($prod){
  $this->smarty->assign("prod", $prod);
  $this->smarty->display("htmlEditProductForm.tpl");
}

}
