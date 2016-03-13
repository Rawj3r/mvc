<?php

/**
 * Created by IntelliJ IDEA.
 * User: empirestate
 * Date: 3/13/16
 * Time: 9:27 PM
 * This is our base controller, all controllers have to inherit this class
 */
class Controller{

    function __construct(){
        echo "Main controller";
        $this->view = new View();

    }

}