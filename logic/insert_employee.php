<?php

include("db.php");
include("models/Accrued.php");

if(isset($_POST['name'])){
    $first_name = $_POST['name'];
    $last_name = $_POST['lastName'];
    $centralCost = $_POST['centralCost'];
    $rol = $_POST['rol'];
    $id = $_POST['id'];
    $salary = $_POST['salary'];
    $daysWorked = $_POST['daysWorked'];

    $queryEmployee = "INSERT INTO employee(identification, first_name, last_name, cost_center_id, role_id) VALUES ('$id', '$first_name', '$last_name', '$centralCost', '$rol')";
    $resultEmployee = query($queryEmployee);



    $accrued = new Accrued($salary, $daysWorked);

    $salary = $accrued->getSalary();
    $workedDays = $accrued->getWorkedDays();
    $salaryWorked = $accrued->getSalaryWorked();
    $vacationsTaken = $accrued->getVacationsTaken();
    $transportAllowance = $accrued->getTransportAllowance();
    $payEPS = $accrued->getPayEPS();
    $payARL = $accrued->getPayARL();
    $nightSurcharge = $accrued->getNigthSurcharge();
    $sundayHours = $accrued->getSundayHours();
    $alimentaryAllowance = $accrued->getAlimentaryAllowance();

    $queryAccrued = "
    INSERT INTO accrued (
                         employee_id,
                         salary,
                         worked_days,
                         salary_worked,
                         vacations_taken,
                         transport_allowance,
                         incapacity_eps,
                         incapacity_arl,
                         night_surcharge,
                         sunday_hours,
                         alimentary_allowance
                         ) VALUES (
                                   '$id',
                                   '$salary',
                                   '$workedDays',
                                   '$salaryWorked',
                                   '$vacationsTaken',
                                   '$transportAllowance',
                                   '$payEPS',
                                   '$payARL',
                                   '$nightSurcharge',
                                   '$sundayHours',
                                   '$alimentaryAllowance'
                         )";


    $resultAccrued = query($queryAccrued);



    if(!$resultAccrued || $resultAccrued){
        die("Could not");
    }

/*    header("location: ../index.php");*/
}

?>


