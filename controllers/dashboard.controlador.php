<?php

class DashboardControlador{
    static public function ctrGetDatosDashboard(){
        //pedido al modelo
        $datos = DashboardModelo::mdlGetDatosDashboard();
        //retornamos al archivo ajax
        return $datos;
    }

    static public function ctrGetVentasMesActual(){
        //pedido al modelo
        $ventasMesActual = DashboardModelo::mdlGetVentasMesActual();
        //retornamos al archivo ajax
        return $ventasMesActual;
    }

    static public function ctrGetProductosMasVendidos(){
        //pedido al modelo
        $productosMasVendidos = DashboardModelo::mdlGetProductosMasVendidos();
        //retornamos al archivo ajax
        return $productosMasVendidos;
    }
}