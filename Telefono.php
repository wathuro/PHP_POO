<?php
// Clase padre Telefono
class Telefono {
    public $marca;
    public $modelo;
    protected $alambrico = true;
    protected $comunicacion;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->comunicacion = $this->alambrico ? 'Alámbrico' : 'Inalámbrico';
        
    }
    public function llamar() {
        return print('<p>Riiiiing Riiiiing!!!</p>');
    }
    public function detalle() {
        return print('<ul>
                <li>Marca: '. $this->marca .'</li>
                <li>Modelo: '. $this->modelo .'</li>
                <li>Comunicación: '. $this->comunicacion .'</li>
        </ul>');
    }
}
// Clase Celular HEREDA de Telefono
class Celular extends Telefono {
    protected $alambrico = false; //Reescribiendo el atributo $alambrico
    public function __construct($marca, $modelo) {
        parent::__construct($marca, $modelo);
    }
}
// Clase SmartPhone HEREDA de Celular, ademas es la clase final de la herencia
final class SmartPhone extends Celular {
    public $alambrico = false; //Reescribiendo el atributo $alambrico
    public $internet = true;

    public function __construct($marca, $modelo) {
        parent::__construct($marca, $modelo);
    }
    // POLIMORFISMO: Voya redefinir el metodo detalle(),
    // agregando el atributo $internet o un <li> más.
    public function detalle() {
        return print('<ul>
                <li>Marca: '. $this->marca .'</li>
                <li>Modelo: '. $this->modelo .'</li>
                <li>Comunicación: '. $this->comunicacion .'</li>
                <li>Tiene conexión a internet</li>
        </ul>');
    }


}

// Instanciando la clase Telefono
echo '<h1>Evolución del Teléfono</h1>';
echo '<h2>Teléfono</h2>';
$mi_telefono = new Telefono('Panasonic', 'ZT-4030');
$mi_telefono->llamar();
$mi_telefono->detalle();

// Instanciando la clase Celular
echo '<h2>Celular</h2>';
$mi_celular = new Celular('Nokia', '356A');
$mi_celular->llamar();
$mi_celular->detalle();

// Instanciando la clase SmartPhone
echo '<h2>SmartPhone</h2>';
$mi_smartphone = new SmartPhone('HTC', 'M8');
$mi_smartphone->llamar();
$mi_smartphone->detalle();