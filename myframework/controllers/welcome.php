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
        //captcha
        $this->getView("header", array("pagename"=>"contact"));

        $random = substr( md5(rand()), 0, 7);

        $this->getView("contact",array("cap"=>$random));

        $this->getView("footer");
    }

    public function contactRecv() {
        $this->getView("header");
        //var_dump($_POST);

        //captcha
        if($_POST["captcha"] == $_SESSION[""]) {

            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
                echo "Please enter a valid email";
                echo "<br><a href='/welcome/contact'>Click here to go back</a>";
            } else {
                echo "Email valid";
            }

            if(!preg_match("/^a-zA-Z]*S/", $_POST["password"])) {
                echo "Please enter a valid password";
                echo "<br><a href='/welcome/contact'>Click here to go back</a>";
            } else {
                echo "Password valid";
            }

        } else {
            echo "Invalid captcha";
            echo "<br><a href='/welcome/contact'>Click here to go back</a>";
        }

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