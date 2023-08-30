<?php 
    require "./logic/db.php";
    
    function listEmployees($searchQuery = "") {
        $whereClause = "";
        if (!empty($searchQuery)) {
            $whereClause = " WHERE identification LIKE '%$searchQuery%'";
        }
        
        $queryResult = query("SELECT * FROM employee" . $whereClause . ";");
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

    $searchResults = "";

    if (isset($_POST['search'])) {
        $id = $_POST['id'];
        $searchResults = listEmployees($id);
    }
?>

<h1>Search Employee</h1>
<form action="" method="post">
    <label for="id">ID:</label>
    <input type="text" name="id" id="id">
    <button type="submit" name="search">Search</button>
</form>

<?php
    echo $searchResults;
?>
