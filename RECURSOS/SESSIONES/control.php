<?php
    if($_POST['user-txt'] == 'admin' && $_POST['password-txt'] == '123') {
        // Inicio de sesion
        session_start();

        // Declaro mis variables de sesion
        $_SESSION['autentificado'] = true;
        $_SESSION['usuario'] = $_POST['user-txt'];

        header('Location: fileProtect1.php');
    }
    else {
        header('Location: index.php?error=si');
    }
?>