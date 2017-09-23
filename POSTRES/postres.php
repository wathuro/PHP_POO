<?php
require 'interfaces.php';

echo '<h1>Postres</h1>';
echo '<h2>Arroz con leche</h2>';
$arroz_con_leche = new Postre();
$arroz_con_leche->establecer_ingredientes('1 taza de arroz,1 leche,1/2 cucharada de azucar,Canela');
echo '<h3>Ingredientes</h3>';
$arroz_con_leche->obtener_ingredientes();
echo '<h3>Receta</h3>';
$arroz_con_leche->establecer_receta('Hervir 2 tazas de agua|Echar la taza de arroz|Agregar azucar y canela');
$arroz_con_leche->obtener_receta();

echo '<h2>Mazamorra morada</h2>';
$mazamorra_morada = new Postre();
$mazamorra_morada->establecer_ingredientes('1 mazamorra negrita,Harina de chuño,1/2 cucharada de azucar,Canela');
echo '<h3>Ingredientes</h3>';
$mazamorra_morada->obtener_ingredientes();
echo '<h3>Receta</h3>';
$mazamorra_morada->establecer_receta('Hervir 1 taza de agua|Disolver la mazamorra en agua|Echar la mazarra a la olla|Agregar azucar y canela');
$mazamorra_morada->obtener_receta();
