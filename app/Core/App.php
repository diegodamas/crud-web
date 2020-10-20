<?php


    class App{

        protected $controller = 'HomeController';
        protected $method = 'index';
        protected $params = [];

        public function __construct(){

            if(isset($_GET['page'])){

                $this->controller = ucfirst($this->parsePageURL().'Controller');

                if(!class_exists($this->controller)){
                    $this->controller = 'ErroController';
                }
            }

            if(isset($_GET['method'])){
                if(method_exists($this->controller, $this->parseMethodURL())){
                    $this->method = $this->parseMethodURL();
                }
            }

            if(!empty($_GET)) {
                $this->params = array_values($_GET);
            }

            call_user_func_array(array(new $this->controller, $this->method), $this->params);
        
        }

        public function parsePageURL(){

            $url = rtrim($_GET['page']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return $url; 
        }

        public function parseMethodURL(){

            $url = rtrim($_GET['method']);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return $url; 
        }

        
    }