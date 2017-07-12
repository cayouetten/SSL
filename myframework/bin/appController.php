<?php

class AppController{
    public function __construct($urlPathParts, $config){
        //db info

        $this->urlPathParts = $urlPathParts;

        if($urlPathParts[0]){
            include './controllers/'. $urlPathParts[0] . ".php";

            $appcon = new $urlPathParts[1]($this);

            if(isset($urlPathParts[1])){
                $appcon->$urlPathParts[1]();
            }



            echo "AppCont: const if<br>";
        } else {
            include './controllers/' . $config["defaultController"] . ".php";

            $appcon = new $config["defaultController"]($this);

            if (isset($urlPathParts[1])) {
                $appcon->config["defaultController"][1]();
            }
        }
    }

    public function getView($page, $data=array()){
        require_once './views/'.$page.".php";
    }

    public function getModel(){
        //later
        //get page then pass data to that page(view)
    }
}



?>