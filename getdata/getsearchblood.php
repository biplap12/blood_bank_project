<?php

include "../database/dbConnect.php";

$searchTerm = $_POST['search'];

// Construct SQL query
$sql = "SELECT * FROM `donors` WHERE bloodgroup LIKE '%$searchTerm%'";

// Execute query
$result = $con->query($sql);

// Process results
if ($result->num_rows > 0) {
    $table="";
    $table.= "<table class='display_table'>";
    $table.="<thead>";
    $table.="<tr>";
    $table.="<th>Name</th><th>Gender</th><th>Blood</th><th>State</th><th>City</th><th>Phone no.</th>";
    $table.="</tr>";
    $table.="</thead>";
    while ($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $table.="<tbody>";
        $table.="<tr>";
        $table.="<td>";
        $table.=$row["fullname"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["gender"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["bloodgroup"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["state"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["city"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["phone1"];
        $table.="</td>";
        $table.="</tbody>";
    }
        $table.="</table>";
        $table.= "</tr>";
        echo $table;
    } else {
        
       echo "<td class='abc'>No matching results found.</td>";   
      
        }
    



$con->close();
?>