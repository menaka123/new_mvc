<?php

use GuzzleHttp\Client;

class Home extends Controller{
    public function index(){

        $data = [];
        if(isset($_SESSION['step']))
        {

            if($_SESSION['step'] == 4){
                $_SESSION['step'] = 1;
                $_SESSION['id'] = 0;
            }


        }else {
            $_SESSION['step'] = 1;
            $_SESSION['id'] = 0;
        }


        $this->view('/home/index', $data);

    }

    public function save(){
        $data = [];

        if($_SESSION['step'] == 4) {

            $_SESSION['step'] = 1;
            $_SESSION['id'] = 0;



        } else {
                if(isset($_POST['first_name'])) {


                    if($_SESSION['id'] == 0) {

                    $cus = new Customer;


                }else {
                        $cus = Customer::find($_SESSION['id']);

                    }

                    $cus->first_name =  isset($_POST['first_name']) ? $_POST['first_name'] : '' ;
                    $cus->last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '' ;
                    $cus->telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
                    $cus->save();

                    $_SESSION['step'] = 2;
                    $_SESSION['id'] = $cus->id;




            }else {
                $cus = Customer::find($_SESSION['id']);


                if($_SESSION['step'] == 2) {

                    if(isset($_POST['street'])) {

                        $cus->street =  isset($_POST['street']) ? $_POST['street'] : '';
                        $cus->house_number =   isset($_POST['house_number']) ? $_POST['house_number'] : '';
                        $cus->zip = isset($_POST['zip']) ? $_POST['zip'] : '';
                        $cus->city = isset($_POST['city']) ? $_POST['city'] : '';


                        $_SESSION['step'] = 3;
                    }



                }

                else if($_SESSION['step'] == 3) {

                    $cus->account_number = isset($_POST['account_number']) ? $_POST['account_number'] : '';
                    $cus->iban = isset($_POST['iban']) ? $_POST['iban'] : '';


                    $body = array("customerId" => $cus->id, "iban" => $cus->iban, "owner" => $cus->first_name . ' '. $cus->last_name );

                    $client =
                        new GuzzleHttp\Client([
                            'base_uri' =>
                                'https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default']);

                    try {
                        $response =
                            $client->request('POST', '/wunderfleet-recruiting-backend-dev-save-payment-data', ['body' => json_encode($body) ]);



                    }
                    catch (GuzzleHttp\Exception\ClientException $e) {
                        $response = $e->getResponse();
                        $responseBodyAsString = $response->getBody()->getContents();

                        $data = ['error' => 'Error try again!'];
                    }

                    $_SESSION['step'] = 4;
                }
                $cus->save();





            }

        }



        $this->view('/home/index', $data);

    }


    public function back(){

        echo $_SESSION['step'] ;

        if($_SESSION['step']  > 1){
            $_SESSION['step'] = $_SESSION['step']  -1 ;
        } else {

            $_SESSION['step']  = 1;
        }

        echo '<br>';
        echo $_SESSION['step']  ;

        $cus = Customer::find($_SESSION['id']);


        $this->view('/home/index', $cus);
    }

}