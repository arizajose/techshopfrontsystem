<?php


class ProductosControlador{

    static public function ctrCargaMasivaProductos($fileProductos){
        
        $respuesta = ProductosModelo::mdlCargaMasivaProductos($fileProductos);
        
        return $respuesta;
    }

    static public function ctrListarProductos(){
        
        $productos = ProductosModelo::mdlListarProductos();
        
        return $productos;
    }

    static public function ctrRegistrarProducto($codigo_producto,   $id_categoria_producto, $descripcion_producto, $precio_compra_producto, $precio_venta_producto, $stock_producto,$ventas_producto){

        $registroProducto = ProductosModelo::mdlRegistrarProducto($codigo_producto,   $id_categoria_producto, $descripcion_producto, $precio_compra_producto, $precio_venta_producto, $stock_producto,$ventas_producto);

        return $registroProducto;
    }

    static public function ctrEliminarProducto($table, $id, $nameId){
        $respuesta = ProductosModelo::mdlEliminarInformacion($table, $id, $nameId);
        return $respuesta;
    }

}