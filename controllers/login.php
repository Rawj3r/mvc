<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/14/16
 * Time: 8:39 AM
 */

class Login extends Controller{

    function __construct(){
        parent::__construct();

        $this->view->render('login/index');
    }
}