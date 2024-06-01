<?php
require_once "libs/Smarty.class.php";
require_once "helpers/authHelpers.php";

class view{
    protected $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("base", BASE_URL);
        $this->smarty->assign("logged", authHelpers::isLogged());
        $this->smarty->assign("admin", authHelpers::isAdmin());

    }
}