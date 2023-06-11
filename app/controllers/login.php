<?php
class Login extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home"; // set the page title
        if ($_SERVER['REQUEST_METHOD'] == "POST") {


            $User = $this->load_model("User");
            $User->login($_POST);
        }


        $this->view("login", $data); // call the view method


    }
}
