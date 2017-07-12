<?php

class Navigation extends AppController{
    public function __construct(){
        $labels = array("pageone"=>"#", "pagetwo"=>"#", "pagethree"=>"#");

        $this->getView("navigation", $labels);
    }
}

?>