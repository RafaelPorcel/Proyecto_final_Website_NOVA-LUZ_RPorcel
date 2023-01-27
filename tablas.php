<?php
require_once 'conn.php';

// Seleccionar nombres de tablas
$sql = "SHOW TABLES";
$result = $conn->query($sql);

$tables = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $tables[] = $row["Tables_in_productos"];
    }
}

$select_options = "";
foreach($tables as $table) {
    $select_options .= "<option value='$table'>$table</option>";
}

$conn->close();
echo $select_options;
?>