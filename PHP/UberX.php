<?php
    require_once('Car.php');
    class uberX extends Car{
        public $brand;
        public $model;

        public function __construct($license, $driver, $brand, $model)
        {
            // siempre es necesario pasarle los parametros a la clase
            // padre a la clase padre
            parent::__construct($license,$driver);
            $this->brand = $brand;
            $this->model = $model;
        }

        public function printDataCar() {
            echo "
                Licencia: $this->license 
                Driver: {$this->driver->name} 
                Document: {$this->driver->document}
                Número de pasajeros: $this->passengers
                Modelo: $this->model
                Marca: $this->brand
                <br>
            ";
        }
        
    
    }
?>