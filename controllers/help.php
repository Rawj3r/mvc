<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/13/16
 * Time: 8:28 PM
 */



class Help extends Controller{

    function __construct(){
        parent::__construct();

        $this->view->render('help/index');
    }

    public function move($name = false){
        echo "We are moving";
        echo "Name: $name";

        require 'models/help.model.php';
        new HelpModel();
    }


}