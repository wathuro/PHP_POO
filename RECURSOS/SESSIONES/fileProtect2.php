<?php include 'session.php' ?>
Bienvenido:
<?php echo $_SESSION['usuario'] ?>
<p>Estas otra página segura con sesiones en PHP</p>
<p>
    <a href="fileProtect2.php">Ir a otra página segura</a>
</p>
<p>
    <a href="exit.php">Salir</a>
</p>