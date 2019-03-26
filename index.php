<?php
    require_once('connection.php');
    if(isset($_GET['controller'])&&isset($_GET['action'])){
        $controller=$_GET['controller'];
        $action=$_GET['action'];
    }else{
        $controller=$_GET['controller'];
        $action='index';
    }

    require_once('view/Layout/layout.php');
?>