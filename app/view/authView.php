<?php

require_once "view.php";

class authView extends view
{

  function showLogin($msj = null)
  {
    $this->smarty->assign("msj", $msj);
    $this->smarty->display('htmlLogin.tpl');

  }
}