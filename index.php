<?php
require_once 'modelo/proveedor.php';
require_once 'modelo/producto.php';
require_once 'modelo/pedidoCompra.php';
require_once 'modelo/lineaCompra.php';

$p = new Proveedor();
$p->setId(1);
$p->setDescripcion('Miguel');

$prod = new Producto();
$prod->setCodigo(6654321);
$prod->setDescripcion('9 de oro');
$prod->setPrecioVenta('$90');

$prod2 = new Producto();
$prod2->setCodigo(669801);
$prod2->setDescripcion('Pepsi');
$prod2->setPrecioVenta('$250');

$lc = new LineaCompra();
$lc->setProducto($prod);
$lc->setCantidad(3);
$lc->setCostoUnitario('$200');
$lc->setFueEntregado(True);

$lc2 = new LineaCompra();
$lc2->setProducto($prod2);
$lc2->setCantidad(4);
$lc2->setCostoUnitario('$260');
$lc2->setFueEntregado(True);

$pc = new PedidoCompra();
$pc->setFecha('19/08/22');
$pc->setProveedor($p);
$pc->setFechaEntregaEstimada('22/08/22');
$pc->setCostoTotal('$600');
$pc->setPedidoCerrado(true);
$pc->setLineaCompra($lc);
$pc->setLineaCompra($lc2);
$pc->MostrarInformacion();
