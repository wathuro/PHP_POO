<?php
class Rectangulo extends Poligono {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->lados = 4; //Atributo desde la clase padre Poligono
        $this->base = $base;
        $this->altura = $altura;
    }
    public function perimetro() {
        return ($this->base + $this->altura) * 2;
    }
    public function area() {
        return $this->base * $this->altura;
    }
    public function detalle_figura() {
        // La funcion get_called_class() imprime el nombre de la clase donde se encuetra.
        return 'El '. get_called_class() . ' tiene <b>'. $this->lados .' </b>lados '
                .'<em>( base = '. $this->base .', altura = '. $this->altura .')</em>';
    }
}