<?php 
    require "./logic/db.php";
    
    function listEmployees($searchQuery = "") {
        $whereClause = "";
    
        if (!empty($searchQuery)) {
            $whereClause = " WHERE identification = '$searchQuery'";
        }
    
        $sql = "SELECT * FROM employee" . $whereClause . ";";
    
        $queryResult = query($sql);
    
        if ($queryResult) {
            echo '<table class="custom-table">';
            echo '<tr>';
            echo '<th>Identification</th>';
            echo '<th>First Name</th>';
            echo '<th>Last Name</th>';
            echo '<th>Cost Center</th>';
            echo '<th>Role</th>';
            echo '</tr>';
        
            while ($row = mysqli_fetch_assoc($queryResult)) {
                echo '<tr class="table-row">';
                echo '<td>' . $row['identification'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['last_name'] . '</td>';
                echo '<td>' . $row['cost_center_id'] . '</td>';
                echo '<td>' . $row['role_id'] . '</td>';
                echo '</tr>';
            }
        
            echo '</table>';
        } else {
            echo "Error executing the query.";
        }
    }
    
    
    

   
?>

