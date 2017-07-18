<?php

class auth extends AppController {
    public function __construct() { }

    public function login() {
        if($_REQUEST["username"] && $_REQUEST["password"]) {
            //test
//            if($_REQUEST["username"] == "test@email.com" && $_REQUEST["password"] == "root") {
//                $_SESSION["loggedin"] = 1;
//                header("Location:/welcome");
//            }

            //.txt read test
            $loginCredentials = file("./assets/sources/loginTest.txt");
            $usern = $_REQUEST["username"];
            $descr = $_REQUEST["password"];

            $loginSuccess = false;
            foreach($loginCredentials as $cred) {
                $userCred = explode("|", $cred);
                if($userCred[0] == $usern && $userCred[1] == $descr) {
                    $loginSuccess = true;
                    $descr = $userCred[2];
                    break;
                }
            }

            if($loginSuccess) {
                $_SESSION["loggedin"] = 1;

                $this->getView("header", array("pagename" => "profile"));

                //This is a protected view
                $this->getView("profile", array("pagename" => "profile", "profileUsern" => $usern, "profileDescr" => $descr));
            } else {
                header("Location:/welcome?msg=Bad Login");
            }
        } else {
            header("Location:/welcome?msg=Bad Login");
        }
    }

    public function logout() {
        session_destroy();

        header("Location:/welcome");
    }
}

?>