<?php
class Router {
    public $route;

    public function __construct($route) {
        $session_options = array(
            'use_only_cookies' => 1,
            // 'auto_start' => 1,
            'read_and_close' => true
        );

        if(!isset($_SESSION))  session_start($session_options);
        if(!isset($_SESSION['ok']))  $_SESSION['ok'] = false;

        if($_SESSION['ok']) {
            // Programacion de la App
        } 
        else {
            if(!isset($_POST['user']) && !isset($_POST['pass'])) {
                // Mostrar formulario de autenticacion
                $login_form = new ViewController();
                $login_form->load_view('login'); 
            }
            else {
                $user_session = new SessionController();
                $session = $user_session->login($_POST['user'], $_POST['pass']);
                
                if(empty($session)) {
                    echo 'Login Incorrecto';
                }
                else {
                    echo 'Login correcto';
                }
            }
        }
    }

    public function __destruct() {
        // unset($this);
    }
}