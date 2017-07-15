<?php

class profile extends AppController {
    public function __construct() {
        //Protected controller
        if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"] == 1) {

        } else {
            header("Location:/welcome");
        }
    }

    public function index() {
        $this->getView("header",array("pagename"=>"profile"));

        //This is a protected view
        $this->getView("profile");
    }
}

?>