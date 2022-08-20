<?php

class LineaCompra
{
    private $producto;
    private $cantidad;
    private $costoUnitario;
    private $fueEntregado;

    public function getProducto()
    {
        return $this->producto;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }

    public function getCantidad()
    {
        return $this->cantidad;
    }

    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    public function getCostoUnitario()
    {
        return $this->costoUnitario;
    }

    public function setCostoUnitario($costoUnitario)
    {
        $this->costoUnitario = $costoUnitario;
    }

    public function getFueEntregado()
    {
        return $this->fueEntregado;
    }

    public function setFueEntregado($fueEntregado)
    {
        $this->fueEntregado = $fueEntregado;
    }
}
