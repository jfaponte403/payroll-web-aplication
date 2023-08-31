<?php

include("db.php");

if(isset($_POST['name'])){
    $first_name = $_POST['name'];
    $last_name = $_POST['lastName'];
    $centralCost = $_POST['centralCost'];
    $rol = $_POST['rol'];
    $id = $_POST['id'];
    $salary = $_POST['salary'];
    $daysWorked = $_POST['daysWorked'];

    $query = "INSERT INTO employee(identification, first_name, last_name, cost_center_id, role_id) VALUES ('$id', '$first_name', '$last_name', '$centralCost', '$rol')";
    $result = query($query);

    if(!$result){
        die("Could not");
    }

    header("location: ../index.php");
}

?>


