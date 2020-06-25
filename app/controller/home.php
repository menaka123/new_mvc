<?php

class Home extends Controller{

    function __construct() {
        if (!isset($_SESSION['user']))
        {
            header("Location: /new_mvc/public"); 
            exit();
        }
    }


    public function dashboard () {

        $data = Attribute::where('user_id', '=', $_SESSION['user'])->get();

        $this->view('/home/dashboard', $data); 
    }

    public function new () {

        $new = new Attribute;
        $new->user_id = $_SESSION['user'];
        $new->name = $_POST['name'];
        $new->value = $_POST['value'];
        $new->save();

        header("Location: /new_mvc/public/home/dashboard"); 
        exit();

    }

}