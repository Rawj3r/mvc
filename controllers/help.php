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

    }

    function index(){
        $this->view->render('help/index');
    }

    public function move($name = false){

        require 'models/help.model.php';
        $model = new HelpModel();
        $this->view->contact = $model->contact();
    }


}