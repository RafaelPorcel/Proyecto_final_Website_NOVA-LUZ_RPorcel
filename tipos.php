<?php
require_once 'conn.php';

// Obtener tabla seleccionada
$selectedTable = $_GET['eleccion'];

// Seleccionar valores del campo "tipo" de la tabla seleccionada
$sql = "SELECT DISTINCT tipo FROM $selectedTable";
$result = $conn->query($sql);

$tipos = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tipos[] = $row["tipo"];
    }
}

$conn->close();
echo json_encode($tipos);
?>
