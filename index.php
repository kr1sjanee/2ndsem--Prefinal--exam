<html>
<head>
<title>sim db</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="index.css">

</head>
  <body>
    <div>
    <h1>Cabilan Prefinal</h1>
</div>
</body>
</html>

<?php
                   
                    
                    
                    // Include config file
                    require_once "config.php";
                    
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM userstbl";
                    if($result = mysqli_query($link, $sql)){
                        
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo '<tr class="bg-danger">';

                                    echo "<th>UserID</th>";
                                    echo "<th>UserName</th>";
                                    echo "<th>Address<m/th>";
                                    echo "<th>Gender</th>";
                                    echo "<th>Is Active</th>";
                                    echo "<th>Mobile Number</th>";
                                    echo "<th>Date Registered</th>";
                                    echo "</tr>";


                echo "</thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_array($result)){
                    echo "<td>" . $row['UserID'] . "</td>";
                    echo "<td>" . strrev($row['UserName']) . "</td>";
                     if (strlen($row['Address']) > 5) {
                        echo "<td>Cannot be reached!</td>";
                    } else {
                        echo "<td>" . $row['Address'] . "</td>";
                    }
                    echo "<td>" . $row['Gender'] . "</td>";
                    if ($row['Is Active']) {
                        echo '<td style="background-color: red;">' . $row['Is Active'] . '</td>';
                    } else {
                        echo "<td>" . $row['Is Active'] . "</td>";
                    }
                    echo "<td>" . $row['Mobile Number'] . "</td>";
                    echo "<td>" . $row['Date Registered'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";

      

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

    
</body>
</html>



