<?php
include_once "config.php";
$query = "SELECT * FROM tabla";
$stmt = $conn->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    echo $row['nombre'] . " " . $row['fecha'] . "<br>";
}