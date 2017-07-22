<?php

class Welcome extends AppController{
    public function __construct(){

    }

    public function index() {
        $this->getView("header",array("pagename"=>"home"));

        $this->getView("welcome");
    }

    public function about() {
        $this->getView("header",array("pagename"=>"about"));

        $this->getView("about");
    }

    public function contact() {
        //captcha
        $this->getView("header", array("pagename"=>"contact"));

        $random = substr( md5(rand()), 0, 7);

        $this->getView("contact",array("cap"=>$random));
    }

    public function contactRecv() {
        $this->getView("header");
        //var_dump($_POST);

        //captcha
//        if($_POST["captcha"] == $_SESSION["captchaImg"]) {
//
//            if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
//                echo "Please enter a valid email";
//                echo "<br><a href='/welcome/contact'>Click here to go back</a>";
//            } else {
//                echo "Email valid";
//            }
//            if(!preg_match("/^[0-9a-zA-Z]+$/", $_POST["password"])) {
//                echo "Password invalid. No special characters.";
//                echo "<br><a href='/welcome/contact'>Click here to go back</a>";
//            } else {
//                echo "Password valid";
//            }
//        } else {
//            echo "Invalid captcha";
//            echo "<br><a href='/welcome/contact'>Click here to go back</a>";
//        }
    }

    public function ajaxPars() {
        //var_dump($_REQUEST);

        //captcha
        if(@$_REQUEST["captcha"] == $_SESSION["captchaImg"]) {
            if(filter_var(@$_REQUEST["email"],FILTER_VALIDATE_EMAIL)) {
                if(preg_match("/^[0-9a-zA-Z]+$/", @$_REQUEST["password"])) {
                    echo "welcome";
                } else {
                    echo "passwordErr";
                }
            } else {
                echo "emailErr";
            }
        } else {
            echo "captchaErr";
        }
    }
}

?>