<?php

class Welcome extends AppController{
    public function __construct(){
        $this->getView("header",array("pagename"=>"welcome"));

        $this->getView("welcome");

        //$this->getView("navigation");
    }
}

?>