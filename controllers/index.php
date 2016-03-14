<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/13/16
 * Time: 8:15 PM
 */


class Index extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){
        $this->view->render('index/index');
    }
}