<?php
class Triangulo extends Poligono {
    private $lado_a;
    private $lado_b;
    private $lado_c;
    private $altura;

    public function __construct($lado_a, $lado_b, $lado_c, $altura) {
        $this->lados = 3; //Atributo desde la clase padre Poligono
        $this->lado_a = $lado_a;
        $this->lado_b = $lado_b;
        $this->lado_c = $lado_c;
        $this->altura = $altura;
    }
    public function perimetro() {
        return $this->lado_a + $this->lado_b + $this->lado_c;
    }
    public function area() {
        return ($this->lado_b * $this->altura) / 2;
    }
    public function detalle_figura() {
        // La funcion get_called_class() imprime el nombre de la clase donde se encuetra.
        return 'El '. get_called_class() . ' tiene <b>'. $this->lados .' </b>lados '
                .'<em>( lado_a = '. $this->lado_a .', lado_b = '. $this->lado_b 
                . ', lado_c = '. $this->lado_c .', altura = '. $this->altura .')</em>';
    }
}