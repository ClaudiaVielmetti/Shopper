<?php
class Signup extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home"; // set the page title
        $this->view("signup", $data); // call the view method


    }
}
