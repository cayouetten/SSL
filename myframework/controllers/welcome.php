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
            echo "email invalid";
        } else {
            echo "email valid";
        }

        if(!preg_match("/^a-zA-Z]*S/", $_POST["password"])) {
            echo "select different password";
        }

        $this->getView("footer");
    }

    public function ajaxPars() {
        //var_dump($_REQUEST);

        if(@$_REQUEST["email"] == "test@email.com") {
            echo "welcome";
        } else {
            echo "bad login";
        }
    }
}

?>