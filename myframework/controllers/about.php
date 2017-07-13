<?php

class About extends AppController{
    public function __construct(){

    }

    public function index() {
        $this->getView("header", array("pagename"=>"about"));

        $this->getView("about");

        $this->getView("footer");
    }
}

?>