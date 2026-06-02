<?php

$servidor ="localhost";
$usuario ="root";
$contra ="";
$baseDeDatos ="Hidroponico";

$conn = new mysqli($Verdura, $Tiempo, $Metodo);

if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}

$Verdura = $_POST['verdura'];
$Tiempo = $_POST['tiempo'];
$Metodo = $_POST['metodo'];
$sql = "INSERT INTO Hidroponico.primero (Verdura,Tiempo,Metodo,) VALUES ('$Verdura', '$Tiempo', '$Metodo')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo producto creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>