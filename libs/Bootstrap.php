<?php

/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/13/16
 * Time: 8:58 PM
 */

class Bootstrap{

    function __construct(){

        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //print_r($url);

        // check if file exist before requiring it
        $file = 'controllers/' . $url[0] . '.php';
        if(file_exists($file)){
            require $file;
        }else{
           require 'controllers/Error.php';
            $controller = new Error();
            return false;
        }

        $controller = new $url[0];

        if(isset($url[2])) {
            $controller->{$url[1]}($url[2]);
        }else{
            if(isset($url[1])) {
                $controller->{$url[1]}();
            }
        }

    }
}