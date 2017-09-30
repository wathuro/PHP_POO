<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form name="auth-frm" action="control.php" method="post">
    <?php 
        // Le decimos que nos muestre solo errores y no noticias (notice)
        error_reporting(E_ALL ^ E_NOTICE);
        if($_GET['error'] == 'si') {
            echo '<p class="error"> Verifica tus datos </p>';
        }
        else {
            echo '<p>Introduce tus datos</p>';
        }
    ?>
    <p><input type="text" name="user-txt" placeholder="User"></p>
    <p><input type="password" name="password-txt" placeholder="Password"></p>
        <input type="submit" name="btn-entrar" value="Entrar">
    </form>
</body>
</html>