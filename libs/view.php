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

    public function render($name, $par = false){
        if($par == true){
            require 'views/' . $name . '.php';
        }
        require 'views/header.php';
        require 'views/' . $name . '.php';
        require 'views/footer.php';

    }

}