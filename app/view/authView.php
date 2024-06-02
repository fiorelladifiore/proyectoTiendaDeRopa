<?php

require_once "view.php";

class authView extends view
{

  function showLogin($msg = null)
  {
    $this->smarty->assign("msg", $msg);
    $this->smarty->display('htmlLogin.tpl');

  }
}