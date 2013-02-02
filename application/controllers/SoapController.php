<?php
require ('../core/db/DB_Query.php');
class SoapController extends Zend_Controller_Action {

    public function indexAction()
    {
        $sql = new DB_Query('select * from new_phrases');
        echo $sql->lol;
    }
    
    
}
