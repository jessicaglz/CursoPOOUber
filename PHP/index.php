<?php
require_once("Car.php");
require_once("UberX.php");
require_once("Account.php");
require_once("UberPool.php");

$UberX = new UberX("CVB123", new account("Andres Herrera \n","AND456"),"Chevrolet","spark");
$UberX ->printDataCar(); 


$UberPool = new UberPool("TYU567", new account("Andrea Ferran","AND765"),"Dodge","Attitude");

$UberPool->printDataCar();