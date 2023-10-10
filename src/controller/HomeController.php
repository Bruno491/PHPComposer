<?php

    namespace Php\Biblioteca\Controller;

    class HomeController{

        //HTTP GET
        public function index($params){
            require '../src/View/Home/index.php';
        }
    }

?>