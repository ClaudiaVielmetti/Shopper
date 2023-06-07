<?php
class Home extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home"; // set the page title
        $this->view("index", $data); // call the view method


    }
}
