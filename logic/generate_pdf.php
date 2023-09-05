<?php
  require "db.php";
  
  ob_start();

  $queryResult = query("
    SELECT 
      e.identification, 
      e.first_name, 
      e.last_name,
      cc.name AS cost_center, 
      a.vacations_taken,
      r.name AS role,
      a.salary,
      a.salary_worked,
      a.transport_allowance,
      a.worked_days,
      a.alimentary_allowance,
      d.health,
      d.pension,
      d.pension_solidary,
      l.value AS loan_value,
      l.quote_value,
      l.quotes,
      pay.num_quota,
      a.night_surcharge
    FROM employee e
    INNER JOIN 
      cost_center cc ON e.cost_center_id = cc.id
    INNER JOIN 
      accrued a ON e.identification = a.employee_id
    INNER JOIN 
      loan l ON e.identification = l.employee_id
    INNER JOIN (
      SELECT loan_id, num_quota, date
      FROM pay
      GROUP BY date DESC
    ) pay
    ON l.id = pay.loan_id
    INNER JOIN 
      deduction d ON e.identification = d.employee_id
    INNER JOIN 
      role r ON e.role_id = r.id
    WHERE e.identification = " . $_GET['identification'] . "
  ;");
  
  if ($queryResult->num_rows > 0) {
    $employee = mysqli_fetch_assoc($queryResult);
    include ("../pages/pdf.php");
  }

  $dompdf = new Dompdf\Dompdf();

  $dompdf->setPaper('A4', 'landscape');

  $dompdf->loadHtml(ob_get_clean());

  $dompdf->render();
  $dompdf->stream("desprendibles_nomina_" .  $_GET['identification'] . ".pdf");
  