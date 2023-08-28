<?php 
    require "./logic/db.php";

    function listEmployees() {
        $queryResult = query("SELECT * FROM employee;");
        $table = "
          <table border>
              <thead>
                  <tr>
                      <th>Identification</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Cost Center</th>
                      <th>Role</th>
                  </tr>
              </thead>
              <tbody>  
        ";

        while ($row = mysqli_fetch_assoc($queryResult)) {
            $table .= "
                <tr>
                    <td>".$row['identification']."</td>
                    <td>".$row['first_name']."</td>
                    <td>".$row['last_name']."</td>
                    <td>".$row['cost_center_id']."</td>
                    <td>".$row['role_id']."</td>
                </tr>
            ";
        }
        
        $table .= "
                </tbody>
            </table>
        ";

        return $table;
    }

?>

<!DOCTYPE html>
<body>
    <form action="" method="get">
        <input type="text" name="search" id="">
        <input type="submit" name="set" value="search">
    </form>
    <?php
    if (isset($_GET['set'])) {
        $search = ($_GET['set']);
        $queryResult = query("SELECT * FROM employee WHERE identification LIKE '%$search';");
        while ($row = $queryResult->fetch_array()) {
            echo $row['identification']."<br>";
        }
    }
   
    
    ?>

</body>
</html>