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
        $codigo_prod=$codigo;
        $descripcion_prod=$nameprod;
        $marca_prod=$marca;
        $cantidad_prod=0;
    }
//metodos get-set del objeto producto    
    function showProduct(){
        echo "Producto: " . $descripcion_prod . "<br>";
        echo "Codigo: " . $codigo_prod . "<br>";
        echo "Marca: " . $marca_prod . "<br>";
    }
}

    $descripcion_pro =$_POST['descripcion_producto'];
    $codigo_pro =$_POST['codigo_producto'];
    $marca_pro =$_POST['marca_producto'];

    //instanciar objeto de tipo producto
    $producto = new Producto($codigo_pro,$descripcion_pro,$marca_pro);
    $producto->showProduct();

    


//clase inventario que hereda de la clase producto

class Inventario extends Producto{
    private $existencia=0;
    private $total_prod_costo = 0;

    function Inventario(){

    }
}


?>