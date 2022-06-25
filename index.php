<?php

require_once "modelo/propiedadinmobiliaria.php";

$prop = new PropiedadInmobiliaria(1, 'San Juan 325', '100m2', 'Rosario', '$1.500.000.-');

$prop->MostrasDatos();
