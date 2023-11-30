<?php 

require_once("Rechargeable.trait.php");
require_once("Validation.php");
require_once("Vehicule.php");
require_once("Moto.php");

$peugeot = new Moto(model:"Virago", brand:"Yamaha", power:151, wheel:2, registration:'AB-325-CD');
var_dump($peugeot);	
$peugeot->forward();
var_dump($peugeot);	