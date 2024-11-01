<?php 
    function connect(): mysqli{
        $db = mysqli_connect("localhost","root","","bienesRaices3");
        if($db){
            echo "Esta conectado";
        }else{
            echo "NO esta conectado";
        }
        return $db;
    }
?>