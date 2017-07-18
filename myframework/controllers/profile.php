<?php

class profile extends AppController
{
    public function __construct()
    {
        //Protected controller
        if (@$_SESSION["loggedin"] && @$_SESSION["loggedin"] == 1) {

        } else {
            header("Location:/welcome");
        }
    }

    public function index()
    {
        $this->getView("header", array("pagename" => "profile"));

        //This is a protected view
        $this->getView("profile", array("pagename" => "profile"));
    }

    public function update()
    {
        if ($_FILES["img"]["name"] != "") {
            $imageFileType = pathinfo("../assets/images/" . $_FILES["img"]["name"], PATHINFO_EXTENSION);

            if (file_exists("../assets/images/" . $_FILES["img"]["name"])) {
                header("Location:/profile?msg=File already exists");
            } else {
                if ($imageFileType != "jpg" && $imageFileType != "png") {
                    header("Location:/profile?msg=File type not allowed");
                } else {
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], "./assets/images/" . $_FILES["img"]["name"])) {
                        //update img on view
                        $this->getView("header", array("pagename" => "profile"));
                        $this->getView("profile", array("pagename" => "profile", "profileImg" => $_FILES["img"]["name"]));
                    } else {
                        header("Location:/profile?msg=Could not upload file");
                    }
                }
            }
        }
    }
}
?>