<?php 
    /** */
    class Producto{
        private $codigo;
        private $nameprod;
        private $marca;
        
        function __construct($codigo,$nameprod,$marca){
            $this->selCodigo($codigo);
            $this->selNameprod($nameprod);
            $this->selMarca($marca);
        }

        public function getCodigo(){
            return $this->Codigo;
        }
        public function setCodigo($codigo){
            return $this->codigo=$Codigo;
        }
        public function getNameprod(){
            return $this->nameprod;
        }
        public function setCodigo($nameprod){
            return $this->nameprod=$nameprod;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function setMarca($marca){
            return $this->marca=$marca;
        }
        public static function save($producto){
            $db=Db::getConnect();
        }
    }


?>