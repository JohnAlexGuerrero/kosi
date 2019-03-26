<?php
    $controller=array('item'=>['index','register','save','show','updateshow','update','delete','search','error']);
    if(array_key_exists($controller,$controller)){
        if(in_array($action,$controller[$controller])){
            call($controller,$action);
        }else{
            call('producto','error');
        }else{
            call('producto','error');
        }

        function call($controller,$action){
            require_once('controller/'.$controller.'Controller.php');

            switch($controller){
                case 'producto': require_once('model/ Producto.php');
                $controller=new UsuarioController();
                break;
                
                default:
                #code... 
                break;
            }
        }
        $controller->{$action}();
    }
?>