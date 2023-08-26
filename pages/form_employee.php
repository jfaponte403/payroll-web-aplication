<div class="form-register-user">
    <span> Register a new user </span>
    <form id="register-user" action="./logic/insert_employee.php" method="post">
        <label>Name:</label>
        <input type="text" name="name">
        <label>Last name:</label>
        <input type="text" name="lastName">
        <label>Central Cost:</label>
        <input type="number" name="centralCost">
        <label>Role:</label>
        <input type="text" name="role">
        <label>ID:</label>
        <input type="number" name="id">
        <label>Salary:</label>
        <input type="number" name="salary">
        <label>Days Worked:</label>
        <input type="number" name="daysWorked">
        <button type="submit" >register</button>
    </form>
</div>