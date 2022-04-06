<?php

require('../BD.php');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');



$bd = BD::getConexion();
$sql = "select numero from numeros where id = 1";

$stmt = $bd->prepare($sql);
$stmt->execute();
$result = $stmt->fetch();
var_dump( $result);
echo json_encode($result);
