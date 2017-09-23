<?php
class Hexagono extends Poligono {
    private $lado;
    private $apotema;

    public function __construct($lado, $apotema) {
        $this->lados = 6; //Atributo desde la clase padre Poligono
        $this->lado = $lado;
        $this->apotema = $apotema;
    }
    public function perimetro() {
        return $this->lado * 6;
    }
    public function area() {
        return ( self::perimetro() * $this->apotema) / 2;
    }
    public function detalle_figura() {
        // La funcion get_called_class() imprime el nombre de la clase donde se encuetra.
        return 'El '. get_called_class() . ' tiene <b>'. $this->lados .' </b>lados '
                .'<em>( lado = '. $this->lado .', apotema = '. $this->apotema .')</em>';
    }
}