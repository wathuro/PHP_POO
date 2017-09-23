<?php
class Cuadrado extends Poligono {
    private $lado;

    public function __construct($lado) {
        $this->lados = 4; //Atributo desde la clase padre Poligono
        $this->lado = $lado;
    }
    public function perimetro() {
        return $this->lado * 4;
    }
    public function area() {
        return pow($this->lado, 2); //Funcion para exponentes
    }
    public function detalle_figura() {
        // La funcion get_called_class() imprime el nombre de la clase donde se encuetra.
        return 'El '. get_called_class() . ' tiene <b>'. $this->lados .' </b>lados '
                .'<em>( lado = '. $this->lado .')</em>';
    }
}