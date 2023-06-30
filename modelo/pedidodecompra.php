<?php

class pedidoCompra{
    public $Fecha;
    public $Proveedor;
    public $FechaEntrega;
    public $CostoTotal;
    public $PedidoCerrado;
    public $ListaLineasCompra = array();

    public function MostrarDatos(){
        echo '<hr>';
        echo 'Datos de pedido de compra <br>';
        echo '<hr>';
        echo 'Fecha: '. $this->Fecha.'<br>';
        echo '<hr>';
        echo 'Datos del proveedor';
        echo '<hr>';
        echo 'Id: '. $this->Proveedor->Id.'<br>';
        echo 'Descripcion: '. $this->Proveedor->Descripcion.'<br>';
        echo 'Fecha de entrega estimada: '. $this->FechaEntrega.'<br>';
        echo 'Costo Total: '. $this->CostoTotal.'<br>';
        echo 'Pedido cerrado: '. $this->PedidoCerrado.'<br>';
        echo '<hr>';
        echo 'Lista de linea de compra';
        echo '<hr>';
        foreach($this->ListaLineasCompra as $LLC){
            echo 'Cantidad: '.$LLC->Cantidad.'<br>';
            echo 'Costo unitario: '.$LLC->CostoUnitario.'<br>';
            echo 'Fue entregado?: '.$LLC->FueEntregado.'<br>';
            echo 'Datos del producto <br>';
            echo 'Codigo: '.$LLC->Producto->Codigo.'<br>';
            echo 'Descripcion: '.$LLC->Producto->Descripcion.'<br>';
            echo 'Precio de venta: '.$LLC->Producto->PrecioVenta.'<br>';
            echo '<hr>';
        }
    }
    
}