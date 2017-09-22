<?php
require 'Poligono.php';
require 'Triangulo.php';
require 'Cuadrado.php';
require 'Rectangulo.php';
require 'Hexagono.php';

echo '<h1>Perimetro y Área de las figuras</h1>';

echo '<h2>Triángulo</h2>';
$triangulo = new Triangulo(7, 5, 10, 6);
echo $triangulo->detalle_figura();
echo '<div>Perímetro: <b>'. $triangulo->perimetro() .' </b><em>(lado_a + lado_b + lado_c)</em></div>';
echo '<div>Área: <b>'. $triangulo->area() .' </b><em>(lado_b * altura)/2</em></div>';