<?php
require_once "libs/Smarty.class.php";

class view{
    protected $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign("base", BASE_URL);
    }
}