<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nkosi RN
 * Date: 3/14/16
 * Time: 8:55 AM
 */

class Messaging extends Controller{

    function __construct(){
        parent::__construct();

        $this->view->render('messaging/index');
    }

}