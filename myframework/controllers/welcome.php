<?php

class Welcome extends AppController{
    public function __construct(){

    }

    public function index() {
        $this->getView("header",array("pagename"=>"home"));

        $this->getView("welcome");

        $this->getView("footer");
    }

    public function about() {
        $this->getView("header",array("pagename"=>"about"));

        $this->getView("about");

        $this->getView("footer");
    }

    public function contact() {
        $this->getView("header",array("pagename"=>"contact"));

        $this->getView("contact");

        $this->getView("footer");
    }

    public function contactRecv() {
        $this->getView("header");

        //var_dump($_POST);

        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo "Please enter a valid email";
        } else { }

        if(!preg_match("/^a-zA-Z]*S/", $_POST["password"])) {
            echo "Please enter a valid password";
        } else { }

        $this->getView("footer");
    }

    public function ajaxPars() {
        //var_dump($_REQUEST);

        if(@$_REQUEST["email"] == "test@email.com") {
            //success
        }

        if(@$_REQUEST["password"] == "root") {
            //success
        }
    }
}

?>