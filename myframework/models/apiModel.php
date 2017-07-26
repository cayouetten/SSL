<?php

class apiModel {
    public function __construct($parent) {
        require_once "./google-api-php-client/vendor/autoload.php";

        $this->db = $parent->db;
    }

    public function googleBooks($term="") {
        $client = new Google_Client();
        $client->setApplicationName("ssl-ncay");
        $client->setDeveloperKey("AIzaSyBWM0x5WJtkJRxmt-lc05i4YO-rpwyWbqA");

        $service = new Google_Service_Books($client);

        $optParams = array("filter"=>"free-ebooks");

        $result = $service->volumes->listVolumes($term, $optParams);

        return $result;
    }
}


?>