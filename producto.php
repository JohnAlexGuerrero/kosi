<?php
    class Producto{
        private $codigo_prod;
        private $descripcion_prod;
        private $marca_prod;
        private $cantidad_prod;
        private $unidad_prod;
        private $costo_prod;
        private $valor_prod_vnt;
//constructor
        function Producto($codigo,$nameprod,$marca){
            $this->$codigo_prod=$codigo;
            $this->$descripcion_prod=$nameprod;
            $this->$marca=$marca_prod;
            $this->$cantidad_prod=0;
        }
//metodos get-set del objeto producto    
        function (){

        }
    }
//instanciar objeto de tipo producto
    $iterm = new Producto();


//clase inventario que hereda de la clase producto

class Inventario extends Producto{
    private $existencia=0;
    private $total_prod_costo = 0;

    function Inventario(){

    }
}


?>