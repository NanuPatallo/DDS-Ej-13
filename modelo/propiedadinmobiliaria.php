<?php

class PropiedadInmobiliaria
{
    public $id;
    public $direccion;
    public $metrosCuadrados;
    public $ciudad;
    public $valor;

    public function __construct($id, $direccion, $metrosCuadrados, $ciudad, $valor)
    {
        $this->id = $id;
        $this->direccion = $direccion;
        $this->metrosCuadrados = $metrosCuadrados;
        $this->ciudad = $ciudad;
        $this->valor = $valor;
    }

    public function MostrasDatos()
    {
        echo 'Id: ' . $this->id . '<hr>';
        echo 'Direccion: ' . $this->direccion . '<hr>';
        echo 'Metros Cuadrados: ' . $this->metrosCuadrados . '<hr>';
        echo 'Ciudad: ' . $this->ciudad . '<hr>';
        echo 'Valor: ' . $this->valor . '<hr>';
    }
}
