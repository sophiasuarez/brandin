<?php

$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="proyecto";

$conn = new mysqli($servidor, $usuario, $contra, $baseDeDatos);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$nombreproducto = $_POST['nombreproducto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$sql = "INSERT INTO productos (nombreproducto,descripcion,precio,stock) VALUES ('$nombreproducto', '$descripcion', '$precio', '$stock')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo producto creado exitosamente";
    header("Location: readproductos.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>