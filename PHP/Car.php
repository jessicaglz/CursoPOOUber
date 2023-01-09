<?php
require_once('Driver.php');
class Car{
    protected $id;
    protected $license;
    protected $driver;
    protected $passengers;

    public function __construct($license, $driver)
    {
        $this->license = $license;
        $this->driver = $driver;
    }
    // MÉTODO
    

    public function getId() {
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getLicense() {
        return $this->license;
    }
    public function setLicense($license){
        $this->license = $license;
    }

    public function getDriver() {
        return $this->driver;
    }
    public function setDriver($driver){
        $this->driver = $driver;
    }

    public function getPassenger() {
        return $this->passengers;
    }

    public function setPassenger($passengers) {
        
        if ($passengers == 4) {
            $this->passenger = $passenger;
        }
        else {
            echo "Necesitas asignar 4 pasajeros <br>";
        }
    
    }

    public function printDataCar() {
        echo "
            Licencia: $this->license 
            Driver: {$this->driver->name} 
            Document: {$this->driver->document}
            Número de pasajeros: $this->passengers
            <br>
        ";
    }
}