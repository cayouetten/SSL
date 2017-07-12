<?php

class About extends AppController{
    public function __construct(){
        $this->getView("header", array("pagename"=>"about"));

        $this->getView("navigation");

        $this->getView("about");

        $this->getView("footer");
    }
}

?>