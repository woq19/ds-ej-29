<?php

require_once 'modelo/lineacompra.php';
require_once 'modelo/pedidodecompra.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$Pv = new Proveedor;
$Pv->Id=1;
$Pv->Descripcion='Arcor';

$Pr1 = new Producto;
$Pr1->Codigo=7798445622587;
$Pr1->Descripcion='Chocolatin Arcor';
$Pr1->PrecioVenta='$144.00';

$Pr2 = new Producto;
$Pr2->Codigo=7798445622562;
$Pr2->Descripcion='Chupetines Arcor';
$Pr2->PrecioVenta='$42.00';

$Lc1 = new LineaCompra;
$Lc1->Producto=$Pr1;
$Lc1->Cantidad=2;
$Lc1->CostoUnitario='$144.00';
$Lc1->FueEntregado=True;

$Lc2 = new LineaCompra;
$Lc2->Producto=$Pr2;
$Lc2->Cantidad=5;
$Lc2->CostoUnitario='$42.00';
$Lc2->FueEntregado=True;

$Pc = new PedidoCompra;
$Pc->Fecha='25/2/2015';
$Pc->Proveedor=$Pv;
$Pc->FechaEntrega='7/7/2015';
$Pc->CostoTotal='$500.00';
$Pc->PedidoCerrado=True;

$Pc->ListaLineasCompra[]=$Lc1;
$Pc->ListaLineasCompra[]=$Lc2;

$Pc->MostrarDatos();