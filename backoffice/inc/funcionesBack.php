<?php
require('../../BD.php');

$state = $_GET['state'];
// Recuperacion de los  numeros de la base de datos
if ($state == 'getNumbers') {
     function getNumber()
    {
    
        $bd = BD::getConexion();
        $sql = "select numero from numeros where id = 1";
    
        $stmt = $bd->prepare($sql);
         $stmt->execute();
         $result = $stmt->fetch();
    
        echo json_encode($result);
    };
    getNumber();
}

//Incremento de los numeros
if ($state == 'increment') {

    function increment()
    {
        $bd = BD::getConexion();
        $sql = "update numeros set numero = numero + 1 where id = 1";
        $stmt = $bd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        echo json_encode($result);
    };
    increment();
    
}
//Decremento de los numeros
if ($state == 'decrement') {

    function decrement()
    {
        $bd = BD::getConexion();
        $sql = "update numeros set numero = numero - 1 where id = 1";
        $stmt = $bd->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        echo json_encode($result);
    };
    decrement();
    
}

  
    



