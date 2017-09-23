<?php
interface Ingredientes {
    public function establecer_ingredientes($lista);
    public function obtener_ingredientes();
}
interface Receta {
    public function establecer_receta($receta);
    public function obtener_receta();
}

class Postre implements Ingredientes, Receta {
    private $ingredientes;
    private $receta;

    public function establecer_ingredientes($lista) {
        // explode() construye un array a partir de un string envase a un delimitador.
        $this->ingredientes = explode(',' , $lista);
    }
    public function obtener_ingredientes() {
        // count() calcula la longitud del array (length:js)
        $num_receta = count($this->ingredientes);
        $html = '<ul>';
        for($i = 0; $i < $num_receta; $i++) {
            $html .= '<li>'. $this->ingredientes[$i] .'</li>'; 
        }
        $html .= '</ul>';
        return print($html);
        
    }
    public function establecer_receta($receta) {
        $this->receta = explode('|' , $receta);
    }
    public function obtener_receta() {
        $num_receta = count($this->receta);
        $html = '<ul>';
        for($i = 0; $i < $num_receta; $i++) {
            $html .= '<li>'. $this->receta[$i] .'</li>'; 
        }
        $html .= '</ul>';
        return print($html);
    }
    
}