
<div class="form-register-user">
    <span> Register a new user </span>
    <form id="register-user" action="logic/insert_employee.php" method="post">
        <label>First Name</label>
        <input type="text" name="name">

        <label>Last name:</label>
        <input type="text" name="lastName">

        <label>Central Cost:</label>
        <select name="centralCost" name="cars" id="centralCost">
            <?php
            $result = query("select * from cost_center");
            while($row = mysqli_fetch_assoc($result)){
                echo "
                    <option value=".$row['id']."> ".$row['name']." </option>
                    ";
            }
            ?>
        </select>

        <label>Role:</label>
        <select name="rol" id="cars">
            <?php
            $result = query("select * from role");
            while($row = mysqli_fetch_assoc($result)){
                echo "
                    <option value=".$row['id']."> ".$row['name']." </option>
                    ";
            }
            ?>
        </select>

        <label>ID:</label>
        <input type="number" name="id">

        <label>Salary:</label>
        <input type="number" name="salary">

        <label>Days Worked:</label>
        <input type="number" name="daysWorked">

        <label>Loan amount:</label>
        <input type="number" name="loanAmount">

        <label>Number of installments to repay the loan:</label>
        <input type="number" name="numOfInstallmentsToRepayTheLoan">

        <label>Date when the loan was disbursed:</label>
        <input type="date" name="dateWhenLoanDisbursed">

        <label>Night Time hours Worked:</label>
        <input type="number" name="nightTime">

        <label>Holiday hours worked:</label>
        <input type="number" name="holidayHoursWorked">

        <label>Holiday hours worked:</label>
        <input type="number" name="holidayHoursWorked">


        <label></label>

        <button type="submit" >register</button>
    </form>
</div>