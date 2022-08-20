<?php

class PedidoCompra
{
    private $fecha;
    private $proveedor;
    private $fechaEntregaEstimada;
    private $costoTotal;
    private $pedidoCerrado;
    private $listLineasCompras = array();

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public function getProveedor()
    {
        return $this->proveedor;
    }

    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
    }

    public function getFechaEntregaEstimada()
    {
        return $this->fechaEntregaEstimada;
    }

    public function setFechaEntregaEstimada($fechaEntregaEstimada)
    {
        $this->fechaEntregaEstimada = $fechaEntregaEstimada;
    }

    public function getCostoTotal()
    {
        return $this->costoTotal;
    }

    public function setCostoTotal($costoTotal)
    {
        $this->costoTotal = $costoTotal;
    }

    public function getPedidoCerrado()
    {
        return $this->pedidoCerrado;
    }

    public function setPedidoCerrado($pedidoCerrado)
    {
        $this->pedidoCerrado = $pedidoCerrado;
    }

    public function getListLineasCompras()
    {
        return $this->listLineasCompras;
    }

    public function setLineaCompra($listLineasCompras)
    {
        $this->listLineasCompras[] = $listLineasCompras;

        return $this;
    }

    public function MostrarInformacion()
    {
        echo 'Fecha: ' . $this->getFecha() . '<br>';
        echo 'Proveedor: ' . $this->getProveedor()->getDescripcion() . '<br>';
        echo 'Fecha de entrega estimada: ' . $this->getFechaEntregaEstimada() . '<br>';
        echo 'Costo total: ' . $this->getCostoTotal() . '<br>';
        echo 'Pedido cerrado: ' . $this->getPedidoCerrado() . '<hr>';
        foreach ($this->getListLineasCompras() as $l) {
            echo 'Producto: ' . $l->getProducto()->getDescripcion() . '<br>';
            echo 'Cantidad: ' . $l->getCantidad() . '<br>';
            echo 'Costo unitario: ' . $l->getCostoUnitario() . '<br>';
            echo 'Fue entregado: ' . $l->getFueEntregado() . '<hr>';
        }
    }
}
