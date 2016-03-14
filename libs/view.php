<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/13/16
 * Time: 9:36 PM
 * This is a base view for all views
 */
class View{

    function __construct(){

    }

    public function render($name){
        require 'views/' . $name . '.php';
    }

}