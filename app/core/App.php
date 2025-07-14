<?php

class App {
    public function __construct()
    {
        $url = $this->parseurl();
        var_dump($url);
    }

    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            $url = $_GET['url'];
            return $url;
        }
    }
}