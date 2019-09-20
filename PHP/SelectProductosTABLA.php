<?php
header ("Content-type: application/json");
require_once("conexion.php");
$mysqli=$conn;
$query= "SELECT * FROM inventario ORDER BY id_producto ASC" ;
$result = $mysqli->query($query);
$json=array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $json[]= array( 
        'id_producto' =>$row['id_producto'],
        'nombre_producto' =>utf8_encode($row['nombre_producto']),
        'descripcion' =>utf8_encode($row['descripcion']),
        'precio' =>$row['precio'],
        'oferta' =>$row['oferta'],
        'url' =>utf8_encode($row['url']),
    );
}

$json_string= json_encode($json);

echo $json_string;
?>