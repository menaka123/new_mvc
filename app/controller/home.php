<?php

class Home extends Controller{
    public function index(){

        $data = [];
        if(isset($_SESSION['step']))
        {


        }else {
            $_SESSION['step'] = 1;
            $_SESSION['id'] = 0;
        }


        $this->view('/home/index', $data);

    }

    public function save(){

        if($_SESSION['id'] == 0) {

            $cus = new Customer;
            $cus->first_name = $_POST['first_name'];
            $cus->last_name = $_POST['last_name'];
            $cus->telephone = $_POST['telephone'];
            $rec =  $cus->save();


            echo $rec;

            $_SESSION['step'] = 1;
            $_SESSION['id'] = 0;



        }

        //$this->view('/home/index');

    }
}