<?php
class Login extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home"; // set the page title
        $this->view("login", $data); // call the view method


    }
}
