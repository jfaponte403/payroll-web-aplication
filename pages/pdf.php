<?php
  $totalAccrued = $employee['salary_worked'] + $employee['vacations_taken'] + $employee['night_surcharge'] + $employee['alimentary_allowance'] + $employee['transport_allowance'] + $employee['vacations_taken'];

  $totalDeductions = $employee['health'] + $employee['pension'] + $employee['pension_solidary'] + $employee['loan_value'];

?>

<!DOCTYPE html>
<html>
<head>
  <style>
    * {
      font-family: "Lucida Console", "Courier New", monospace;
      font-size: 100%;
    }

    #table_container {
      width: calc(100% - 20px);
      margin: 5px auto;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 3px;
      text-align: left;
    }

    .table_header {
      padding: 15px;
      text-align: center;
    }

    .table_header span {
      display: flex;
      flex-direction: column;
    }

    .table_header .company_name {
      font-size: 30px;
    }

    .text-bold {
      font-weight: bold;
    }
      
    .sub-header {
      text-align: center;  
    }

    .colum1 {
      width: 25%;
    }

    .colum2 {
      width: 50%;
    }

    .colum3 {
      width: 25%;
    }

    .colum4 {
      width: 5%;
    }

    .blue {
      background-color: #8497b0;
    }

    .div_container {
      display: flex;
      float: right;
    }

    .div_test {
      background-color: #8497b0;
      padding: 10px;
    }

    .border_hide {
      border-top: 1px solid transparent; /* Oculta el borde superior */
      border-right: 1px solid transparent; /* Oculta el borde superior */
      border-bottom: 1px solid transparent; /* Oculta el borde inferior */
      border-left: 1px solid transparent; /* Oculta el borde izquierdo */
    }

    .text-white {
      color: white;
    }
    
  </style>
</head>
  <body>  
    <main>
      <section>
        <article>
          <div id="table_container">
            <table border>
              <thead>
                <tr>
                  <th class="table_header" colspan="6">
                    <span class="company_name">PAYROLL APP</span>
                    <span class="company_nit">NIT 000-000-0000-000</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="colum1">Employee name:</td>
                  <td colspan="3" class="colum2"><?= $employee['first_name'] . " " . $employee['last_name'] ?></td>
                  <td colspan="2" class=""><?= $employee['role'] ?></td>
                </tr>
                <tr>
                  <td>Identification:</td>
                  <td colspan="2"><?= $employee['identification'] ?></td>
                  <td></td>
                  <td colspan="2">Date</td>
                </tr>
                <tr>
                  <td>Cost center:</td>
                  <td colspan="2"><?= $employee['cost_center'] ?></td>
                  <td></td>
                  <td class="colum4">Worked days:</td>
                  <td><?= $employee['worked_days'] ?></td>
                </tr>
                <tr>
                  <td>Salary:</td>
                  <td colspan="2"><?= $employee['salary'] ?></td>
                  <td>Alimentary allowance:</td>
                  <td colspan="2"><?= $employee['alimentary_allowance'] ?? 'N/A' ?></td>
                </tr>
                <tr>
                  <td>Transport allowance:</td>
                  <td colspan="2"><?= $employee['transport_allowance'] ?? 'N/A' ?></td>
                  <td></td>
                  <td colspan="2"></td>
                </tr>
                <tr class="blue">
                  <td colspan="3" class="text-bold sub-header">ACCRUED</td>
                  <td colspan="3" class="text-bold sub-header">DEDUCTIONS</td>
                </tr>
                <tr>
                  <td class="text-bold">Concept</td>
                  <td class="text-bold">Days</td>
                  <td class="text-bold">Value</td>
                  <td class="text-bold">Concept</td>
                  <td class="text-bold">Days</td>
                  <td class="text-bold">Value</td>
                </tr>
                <tr>
                  <td>Salario:</td>
                  <td><?= $employee['worked_days'] ?></td>
                  <td><?= $employee['salary_worked'] ?></td>
                  <td>Health:</td>
                  <td>30</td>
                  <td><?= $employee['health'] ?? 'N/A' ?></td>
                </tr>
                <tr>
                  <td>Extraturn:</td>
                  <td>0</td>
                  <td><?= $employee['night_surcharge'] ?? 'N/A' ?></td>
                  <td>Pension:</td>
                  <td>30</td>
                  <td><?= $employee['pension'] ?? 'N/A' ?></td>
                </tr>
                <tr>
                  <td>Alimentary allowance:</td>
                  <td>0</td>
                  <td><?= $employee['alimentary_allowance'] ?? 'N/A' ?></td>
                  <td>Pension solidarity:</td>
                  <td>0</td>
                  <td><?= $employee['pension_solidary'] ?? 'N/A' ?></td>
                </tr>
                <tr>
                  <td>Transport allowance:</td>
                  <td>0</td>
                  <td><?= $employee['transport_allowance'] ?? 'N/A' ?></td>
                  <td>Advances:</td>
                  <td>0</td>
                  <td>--</td>
                </tr>
                <tr>
                  <td>Disability cash assistance:</td>
                  <td>0</td>
                  <td>--</td>
                  <td>Loans:</td>
                  <td>0</td>
                  <td><?= $employee['loan_value'] ?? 'N/A' ?></td>
                </tr>
                <tr>
                  <td>Vacations taken:</td>
                  <td>0</td>
                  <td><?= $employee['vacations_taken'] ?? 'N/A' ?></td>
                  <td>Paid vacation advance:</td>
                  <td>0</td>
                  <td>--</td>
                </tr>
                <tr class="text-bold blue">
                  <td colspan="2">TOTAL ACCRUED:</td>
                  <td><?= $totalAccrued ?></td>
                  <td colspan="2">TOTAL DEDUCTIONS:</td>
                  <td><?= $totalDeductions ?></td>
                </tr>
                <tr>
                  <td colspan="3" class="border_hide"></td>
                  <td colspan="2" class="blue text-bold">NET PAYABLE</td>
                  <td class="blue text-bold"><?= $totalAccrued - $totalDeductions ?></td>
                </tr>
                <tr>
                  <td colspan="6" class="border_hide text-white">.</td>
                </tr>
                <tr>
                  <td colspan="6" class="border_hide text-white">.</td>
                </tr>
                <tr>
                  <td colspan="3" class="border_hide"></td>
                  <td class="blue text-bold">Loan info</td>
                  <td class="blue text-bold">Quote</td>
                  <td class="blue text-bold">Value</td>
                </tr>
                <tr>
                  <td colspan="3" class="border_hide"></td>
                  <td>Intial value:</td>
                  <td>0</td>
                  <td><?= $employee['loan_value'] ?></td>
                </tr>
                <tr>
                  <td colspan="3" class="border_hide">I hereby acknowledge and accept this payment in all respects:</td>
                  <td>Nu. discounted installment / Installment value:</td>
                  <td><?= $employee['num_quota'] ?></td>
                  <td><?= $employee['quote_value'] ?></td>
                </tr>
                <tr>
                  <td colspan="3" class="border_hide"></td>
                  <td class="blue text-bold">Fees to be deducted:</td>
                  <td class="blue text-bold"><?= $employee['quotes'] - $employee['num_quota'] ?></td>
                  <td class="blue text-bold">$ --</td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>
      </section>
    </main>
  </body>
</html>