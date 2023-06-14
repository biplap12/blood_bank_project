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
    $table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>City</th><th>State</th><th>Phone1</th><th>Phone2</th><th>View</th>";
    $table.="</tr>";
    $table.="</thead>";
    while ($row = $result->fetch_assoc()) {
        $id=$row["id"];
        $table.="<tbody>";
        $table.="<tr>";
        $table.="<td>";
        $table.=$row["id"];
        $table.="</td>";
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
        $table.=$row["city"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["state"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["phone1"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["phone2"];
        $table.="</td>";
        $table.="<td><a onclick=\" return ActivateUser($id)\" class='dis update' href='javascript:void(0)'>View</a></td>";
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