<?php
class Signup extends Controller
{
    public function index()
    {
        $data['page_title'] = "Home"; // set the page title

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
           show($_POST);

            $User = $this->load_model("User");
            $User->signup($_POST);
        }

        $this->view("signup", $data); // call the view method


    }
}
