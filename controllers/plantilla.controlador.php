<?php
class PlantillaControlador{
    //absorver la plantilla de manera que se mantenga el navbar y los elementos fundamentales
    public function CargarPlantilla(){
        include "views/plantilla.php";
    }
}