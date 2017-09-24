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
echo '<div>Área: <b>'. $triangulo->area() .' </b><em>(lado_b * altura) / 2</em></div>';

echo '<h2>Cuadrado</h2>';
$cuadrado = new Cuadrado(6);
echo $cuadrado->detalle_figura();
echo '<div>Perímetro: <b>'. $cuadrado->perimetro() .' </b><em>(lado * 4)</em></div>';
echo '<div>Área: <b>'. $cuadrado->area() .' </b><em>(lado ^ 2)</em></div>';

echo '<h2>Rectangulo</h2>';
$rectangulo = new Rectangulo(5, 8);
echo $rectangulo->detalle_figura();
echo '<div>Perímetro: <b>'. $rectangulo->perimetro() .' </b><em>(lado + altura) * 2</em></div>';
echo '<div>Área: <b>'. $rectangulo->area() .' </b><em>(lado * altura)</em></div>';

echo '<h2>Hexagono</h2>';
$hexagono = new Hexagono(2, 3);
echo $hexagono->detalle_figura();
echo '<div>Perímetro: <b>'. $hexagono->perimetro() .' </b><em>(lado * 6)</em></div>';
echo '<div>Área: <b>'. $hexagono->area() .' </b><em>(perimetro * apotema) / 2</em></div>';