<?php
class Perro {
    // Atributos
    public $nombre;
    public $raza;
    public $edad;
    public $sexo;
    public $adiestrado;
    public $foto;
    public $comida;
    private $pulgas; //Atributo privado
    public static $mejor_amigo = 'Hombre';
    const MEJOR_CUALIDAD = 'Fidelidad'; //constantes siempre se escribe en mayuscula y sin $.
    // Métodos
    public function __construct($n, $r, $e, $s, $a, $f, $p) {
        $this->nombre = $n;
        $this->raza = $r;
        $this->edad = $e.' años';
        $this->sexo = $s ? 'Macho' : 'Hembra';
        $this->adiestrado = $a ? 'Adiestrado' : 'No adiestrado';
        $this->foto = $f;
        $this->pulgas = $p ? 'Tiene pulgas' : 'No tiene pulgas';
        echo '<p><mark>Hola, soy el Costructor</mark></p>';
    }
    public function __destruct() {
        echo '<p><mark>Adiós, soy el Destructor</mark></p>';
    }
    public function ladrar() {
        echo '<p><b> Guaaaa Guaaaa!!! </b></p>';
    }
    public function comer($c) {
        $this->comida = $c;
        echo '<p><em>'.$this->nombre.' come '.$this->comida.'</em></p>';
    }
    public function aparecer() {
    echo '<img src="'.$this->foto.'">';
    }  
    // Método público, donde utilizo el atributo $pulgas(privado)
    public function tiene_pulgas() {
        echo '<p><u>'.$this->nombre.' '.$this->pulgas.'</u></p>';
    }
    // Uso de propiedades estático, constantes
    public function mas_conceptos() {
        echo '<hr>';
        // Para llamar a un metodo de la misma clase usamos: self:: ó nombre de la clase Perro::
        self::ladrar(); 
        //Segundaa forma
        Perro::comer('Huesos');
        // Usar propiedad estático, OJO: no funcionaría esto: $this->mejor_amigo
       echo '<p>El mejor amigo del perro es el <b>'.self::$mejor_amigo.'</b></p>';
       echo '<p>La mejor cualidad del perro es <b>'.self::MEJOR_CUALIDAD.'</b></p>';
    }
}
// Instanciar un objeto de la clase
$boby = new Perro('Boby', 'Danés', 5, true, true, 'http://www.lorempixel.com/200/200', false);

// var_dump($boby);
// print_r($boby);

//Imprimiendo las propiedades del objeto 
echo '<h1>'.$boby->nombre.'</h1>';
echo '<h2>'.$boby->raza.'</h2>';
echo '<h3>'.$boby->edad.'</h3>';
echo '<h4>'.$boby->sexo.'</h4>';
echo '<h5>'.$boby->adiestrado.'</h5>';
echo '<h6>'.$boby->foto.'</h6>';

$boby->ladrar();
$boby->comer('Galletas');
$boby->aparecer();
//Estoy accediendo a una propiedada privada(pulgas) mediante un método público.
$boby->tiene_pulgas();  
$boby->mas_conceptos();
