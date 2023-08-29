<?php
  function calcSalaryWorked($salary, $workedDays) {
    return ($salary/30) * $workedDays;
  }

  function calcVacationsTaken($salary) {
    return ($salary/30) * 21;
  }

  function calcTransportAllowance($workedDays) {
    return (97032/30) * $workedDays;
  }

  function calcPayEPS($salary) {
    return ($salary/30) * 0.66;
  }

  function calcPayARL($salary) {
    return ($salary/30) * 4;
  }

  function calcNightSurcharge() {}

  function calcSundayHours() {}

  function calcAlimentaryAllowance($workedDays) {
    return (150000/30) * $workedDays;
  }

  class Accrued {
    private $salary;
    private $workedDays;
    private $salaryWorked;
    private $vacationsTaken;
    private $transportAllowance;
    private $payEPS;
    private $payARL;
    private $nigthSurcharge;
    private $sundayHours;
    private $alimentaryAllowance;

    function __construct($salary, $workedDays) {
      $this->salary = $salary;
      $this->workedDays = $workedDays;
      $this->salaryWorked = calcSalaryWorked($salary, $workedDays);
      $this->vacationsTaken = calcVacationsTaken($salary);
      $this->transportAllowance = calcTransportAllowance($workedDays);
      $this->transportAllowance = calcTransportAllowance($workedDays);
      $this->payARL = calcPayARL($salary);
      $this->nigthSurcharge = calcNightSurcharge();
      $this->sundayHours = calcNightSurcharge();
      $this->alimentaryAllowance = calcAlimentaryAllowance($workedDays);
    }

    public function getSalary(){
      return $this->salary;
    }
  
    public function setSalary($salary){
      $this->salary = $salary;
    }
  
    public function getWorkedDays(){
      return $this->workedDays;
    }
  
    public function setWorkedDays($workedDays){
      $this->workedDays = $workedDays;
    }
  
    public function getSalaryWorked(){
      return $this->salaryWorked;
    }
  
    public function setSalaryWorked($salaryWorked){
      $this->salaryWorked = $salaryWorked;
    }
  
    public function getVacationsTaken(){
      return $this->vacationsTaken;
    }
  
    public function setVacationsTaken($vacationsTaken){
      $this->vacationsTaken = $vacationsTaken;
    }
  
    public function getTransportAllowance(){
      return $this->transportAllowance;
    }
  
    public function setTransportAllowance($transportAllowance){
      $this->transportAllowance = $transportAllowance;
    }
  
    public function getPayEPS(){
      return $this->payEPS;
    }
  
    public function setPayEPS($payEPS){
      $this->payEPS = $payEPS;
    }
  
    public function getPayARL(){
      return $this->payARL;
    }
  
    public function setPayARL($payARL){
      $this->payARL = $payARL;
    }
  
    public function getNigthSurcharge(){
      return $this->nigthSurcharge;
    }
  
    public function setNigthSurcharge($nigthSurcharge){
      $this->nigthSurcharge = $nigthSurcharge;
    }
  
    public function getSundayHours(){
      return $this->sundayHours;
    }
  
    public function setSundayHours($sundayHours){
      $this->sundayHours = $sundayHours;
    }
  
    public function getAlimentaryAllowance(){
      return $this->alimentaryAllowance;
    }
  
    public function setAlimentaryAllowance($alimentaryAllowance){
      $this->alimentaryAllowance = $alimentaryAllowance;
    }
  }
?>