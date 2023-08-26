<?php
require('./db.php');

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$centralCost = $_POST['centralCost'];
$rol = $_POST['rol'];
$id = $_POST['id'];
$salary = $_POST['salary'];
$daysWorked = $_POST['daysWorked'];

$test = query("SELECT '$name'");

if ($test) {
    $fila = mysqli_fetch_row($test);
    echo "result in SQL: " . $fila[0];
} else {
    echo "Error en la consulta: " . mysqli_error($test);
}

echo "<br>name: " . $name
. "<br>lastName: ". $lastName
. "<br>centralCost: ". $centralCost
. "<br>rol: ". $rol
. "<br>id: ". $id
. "<br>salary: ". $salary
. "<br>daysWorked: ". $daysWorked;


