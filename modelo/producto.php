<?php

class Producto
{
    private $codigo;
    private $descripcion;
    private $precioVenta;

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }

    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;
    }
}
