<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/13/16
 * Time: 8:15 PM
 */

require 'libs/controller.php';


class Index extends Controller{

    function __construct(){
        parent::__construct();
        echo "We are in controller index";
    }
}