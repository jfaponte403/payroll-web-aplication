
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

        <button type="submit" >register</button>
    </form>
</div>