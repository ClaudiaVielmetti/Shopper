<?php
// Define a class named App
class App
{

    protected $controller = "home";    // Define a protected variable named "controller"
    protected $method = "index";    // Define a protected variable named "method"
    protected $params = [];    // Define a protected variable named "params"

    public function __construct()    // Constructor method definition
    {

        $url = $this->parseURL();    // assign the value of parseURL() function to url
  

        if(file_exists("../app/controllers/" . strtolower( $url[0]) . ".php"))    // Check if the file exists in the controllers folder
        {
            $this->controller = strtolower($url[0]);    // assign the value of parseURL() function to controller
            unset($url[0]);    // unset the value of url

        }

        require "../app/controllers/" . $this->controller . ".php";    // require the controller
        $this->controller = new $this->controller;    // assign the value of parseURL() function to controller


        if(isset($url[1]))
        {
            $url[1] = strtolower($url[1]);    // assign the value of parseURL() function to method
            if(method_exists($this->controller, $url[1]))    // Check if the method exists in the controller
            {
                
                $this->method = $url[1];    // assign the value of parseURL() function to method
                unset($url[1]);    // unset the value of url
            }
        }

        $this->params = (count($url) > 0) ? $url : ["home"];    // assign the value of parseURL() function to params

        call_user_func_array([$this->controller, $this->method], $this->params);    // call the method in the controller
       
    }

    private function parseURL()    // Define a private function parseURL()

    {

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';    // Check if url is set or not, if not then assign the value of url as "home"
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));    // Split the url into array and filter the url(Sanitize)
    }
}
