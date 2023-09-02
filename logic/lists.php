<?php 
    require "./logic/db.php";
    
    function listEmployees($searchQuery = "") {
        $whereClause = "";
        if (!empty($searchQuery)) {
            $whereClause = " WHERE identification = '$searchQuery'";
        }

        $sql = "SELECT * FROM employee" . $whereClause . ";";
        $queryResult = query($sql);
        $iterativeTable = $queryResult ? mysqli_fetch_assoc($queryResult) : null;
        print_r($sql);
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

        if (!$iterativeTable) $table .= "
        <tr>
            <td colspan='5'>No hay datos</td>
        </tr>";
        
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

    $searchResults = "";

    if (isset($_POST['search'])) {
        $id = $_POST['id'];
        $searchResults = listEmployees($id);
    }
?>
