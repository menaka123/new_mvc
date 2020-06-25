<?php

class Auth extends Controller {

    public function index() {
        $this->view('/auth/index');
    }

    public function signup() {

        $user = User::where('email', '=', $_POST['email'])->first();

        if ($user) {
            $error = [
                'page' => 'left',
                'msg' => 'user already exist'
            ];

            $this->view('/auth/index', $error);
        } else {

            $user = new User;
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user->save();

            $_SESSION['user'] = $user['id'];

            header("Location: /new_mvc/public/home/dashboard");
            exit();
        }

    }

    public function login () {
        $user = User::where('email', '=', $_POST['email'])->first();

        if ($user && password_verify($_POST['password'], $user->password )) {
            $_SESSION['user'] = $user['id'];

            header("Location: /new_mvc/public/home/dashboard"); 
            exit();
        } else {
            $error = [
                'page' => 'right',
                'msg' => 'Incorrect email or password'
            ];

            $this->view('/auth/index', $error);
        }
    }
}