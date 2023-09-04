<?php

include("db.php");
include("models/Accrued.php");
include("models/Deductions.php");

if(isset($_POST['name'])){
    /*Get form data*/
    $first_name = $_POST['name'];
    $last_name = $_POST['lastName'];
    $centralCost = $_POST['centralCost'];
    $rol = $_POST['rol'];
    $id = $_POST['id'];
    $salary = $_POST['salary'];
    $daysWorked = $_POST['daysWorked'];
    $loanAmount = $_POST['loanAmount'];
    $numOfInstallmentsToRepayTheLoan = $_POST['numOfInstallmentsToRepayTheLoan'];
    $dateWhenLoanDisbursed = $_POST['dateWhenLoanDisbursed'];
    $nightTime = $_POST['nightTime'];
    $holidayHoursWorked = $_POST['holidayHoursWorked'];

    echo $dateWhenLoanDisbursed;

    /*Making Query to insert into employee*/
    $queryEmployee = "
    INSERT INTO employee(
                         identification, 
                         first_name, 
                         last_name, 
                         cost_center_id, 
                         role_id) VALUES (
                                          '$id', 
                                          '$first_name', 
                                          '$last_name', 
                                          '$centralCost', 
                                          '$rol')
    ";
    $resultEmployee = query($queryEmployee);

    /*Create obj Accrued*/
    $accrued = new Accrued($salary, $daysWorked, $nightTime, $holidayHoursWorked);
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

    /*Making query to insert into accrued*/
    $queryAccrued = "
        INSERT INTO accrued (
                             employee_id,
                             salary, 
                             worked_days,
                             salary_worked,
                             vacations_taken,transport_allowance,
                             incapacity_eps,
                             incapacity_arl,
                             night_surcharge,
                             sunday_hours,
                             alimentary_allowance
                             ) VALUES 
                                   (
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
                                    )
    ";
    $resultAccrued = query($queryAccrued);

    /*Create obj Deductions*/
    $deduction = new Deductions($salary, $loanAmount, $numOfInstallmentsToRepayTheLoan);
    $feeValue = $deduction->getFeeValue();

    /*Create query to insert loan*/

    echo "id: " . $id . "<br>";
    echo "dateWhenLoanDisbursed: " . $dateWhenLoanDisbursed . "<br>";
    echo "loanAmount: " . $loanAmount . "<br>";
    echo "numOfInstallmentsToRepayTheLoan: " . $numOfInstallmentsToRepayTheLoan . "<br>";
    echo "feeValue: " . $feeValue . "<br>";

    $timestamp = strtotime($dateWhenLoanDisbursed);
    $formattedDate = date('Y-m-d', $timestamp);

    $queryLoan = "
        INSERT INTO loan (
                          employee_id,
                          date,
                          value,
                          quotes,
                          quote_value
                          ) VALUES (
                                    '$id',
                                    '$formattedDate',
                                    '$loanAmount',
                                    '$numOfInstallmentsToRepayTheLoan',
                                    '$feeValue')
    ";
    $resultLoan = query($queryLoan);

    /*Create query to insert deduction*/
    $health = $deduction->getHealt();
    $pension = $deduction->getPension();
    $pensionSolidarity = $deduction->getSolidarityfound();

    $queryDeduction = "
        INSERT INTO deduction (
                               employee_id,
                               health,
                               pension,
                               pension_solidary
                               )VALUES(
                                       '$id', 
                                       '$health', 
                                       '$pension', 
                                       '$pensionSolidarity')
    ";
    $resultDeduction = query($queryDeduction);

    if (!$resultEmployee) {
        die("Employee query failed.");
    }

    if (!$resultAccrued) {
        die("Accrued query failed.");
    }

    if (!$resultLoan) {
        die("Loan query failed.");
    }

    if (!$resultDeduction) {
        die("Deduction query failed.");
    }

    header("location: ../index.php");
}

?>


