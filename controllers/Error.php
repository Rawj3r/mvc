<?php

/**
 * Created by IntelliJ IDEA.
 * User: empirestate
 * Date: 3/13/16
 * Time: 9:14 PM
 */


class Error extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->msg = "Page doesn't exist";
        $this->view->render('error/index');
    }

}