<?php
$arrayClientes = [];

class Clientes {
    private $nombre;
    private $apellido;
    private $cuit;
    private $telefono;
    private $direccion;
    private $iva;
    private $localidad;

    public function __construct($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cuit = $cuit;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->iva = $iva;
        $this->localidad = $localidad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }
    public function getCuit(){
            return $this->cuit; 
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getIva(){
            return $this->iva;
        }

        public function getLocalidad(){
            return $this->localidad;
        }

}
function agregarClientes() {
    global $arrayClientes;

    do {
        echo "Ingrese el nombre del cliente para ser agregado: ";
        $nombre = readline();
        echo "Ingrese el apellido: ";
        $apellido = readline();
        echo "Ingrese el cuit: ";
        $cuit = readline();
        echo "Ingrese el telefono: ";
        $telefono = readline();
        echo "Ingrese dirección: ";
        $direccion = readline();
        echo "Ingrese el iva: ";
        $iva = readline();
        echo "Ingrese la localidad: ";
        $localidad = readline();

        $arrayClientes[] = new Clientes($nombre, $apellido, $cuit, $telefono, $direccion, $iva, $localidad);

        echo "¿Desea agregar un nuevo cliente? (S/N): ";
        $continuar = readline();
    } while (strtolower($continuar) === 's');

    // Mostrar detalles del último cliente agregado
    $ultimoCliente = end($arrayClientes);
    echo "Nombre: " . $ultimoCliente->getNombre() . "\n";
    echo "Apellido: " . $ultimoCliente->getApellido() . "\n";
    echo "cuit".$ultimoCliente-> getCuit(). "\n";
    echo"telefono:". $ultimoCliente->getTelefono() . "\n";
    echo"direccion:".$ultimoCliente->getTelefono() . "\n";
    echo"iva:" . $ultimoCliente->getIva() ."\n";
    echo"localidad:" .$ultimoCliente->getIva() . "\n";
    echo "El cliente fue cargado con éxito.\n";
}




