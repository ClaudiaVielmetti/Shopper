<?php
// Define a class named App
class App
{

    protected $controller = "home";    // Define a protected variable named "controller"
    protected $method = "index";    // Define a protected variable named "method"

    public function __construct()    // Constructor method definition
    {

        $url = $this->parseURL();    // assign the value of parseURL() function to url
        show($url);    // print the value of url

    }

    private function parseURL()    // Define a private function parseURL()

    {

        $url = isset($_GET['url']) ? $_GET['url'] : 'home';    // Check if url is set or not, if not then assign the value of url as "home"
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));    // Split the url into array and filter the url(Sanitize)
    }
}
