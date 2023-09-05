

    <h1 class='text-center'>Register a new user</h1>
    <div class="container">
    <div class="tab-content">
    <form id="register-user" action="logic/insert_employee.php" method="post">   
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
            <label for="name">First Name</label>      
            <input type="text" name="name" class="form-control">
            </div>
            </div>
            <div class="col">
            <div class="form-outline">       
            <label for="lastName">Last name:</label>
                <input type="text" name="lastName" class="form-control">
            </div>
            </div>
        </div>
        <label for="centralCost">Central Cost:</label>
        <select name="centralCost" name="cars" id="centralCost" class="form-control">
            <?php
            $result = query("select * from cost_center");
            while($row = mysqli_fetch_assoc($result)){
                echo "
                    <option value=".$row['id']."> ".$row['name']." </option>
                    ";
            }
            ?>
        </select>
        </br>
        <label for="rol">Role:</label>
        <select name="rol" id="cars" class="form-control">
            <?php
            $result = query("select * from role");
            while($row = mysqli_fetch_assoc($result)){
                echo "
                    <option value=".$row['id']."> ".$row['name']." </option>
                    ";
            }
            ?>
        </select>
        </br>
        <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label for="id">ID:</label>
        <input type="number" name="id" class="form-control">
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label for='salary'>Salary:</label>
        <input type="number" name="salary" class="form-control">
      </div>
    </div>
    </div>
    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label for='daysWorked'>Days Worked:</label>
        <input type="number" name="daysWorked" class="form-control">
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label for='loanAmount'>Loan amount:</label>
        <input type="number" name="loanAmount" class="form-control">
      </div>
    </div>
    </div>
    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label for='numOfInstallmentsToRepayTheLoan'>Number of installments to repay the loan:</label>
        <input type="number" name="numOfInstallmentsToRepayTheLoan" class="form-control">
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label for="dateWhenLoanDisbursed">Date when the loan was disbursed:</label>
        <input type="date" name="dateWhenLoanDisbursed" class="form-control">
      </div>
    </div>
    </div>
    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label for="nightTime">Night Time hours Worked:</label>
        <input type="number" name="nightTime" class="form-control"> 
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label for="holidayHoursWorked">Holiday hours worked:</label>
        <input type="number" name="holidayHoursWorked" class="form-control">
      </div>
    </div>
    </div>
        </br>
        
        <div class="text-center">
                <button type="submit" class="btn btn-primary mx-auto col-md-6 mb-3">register</button>
        </div>
</form>

   </div>
</div>
