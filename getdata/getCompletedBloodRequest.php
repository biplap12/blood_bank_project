<?php

include "../database/dbConnect.php";

// $q="SELECT * FROM `bloodrequest` WHERE `status`='Completed'";
$q="SELECT b.id, b.patientname, b.gender, bg.bloodgroup, b.hospitalNameAddress, b.phone, b.completeDate, b.status
FROM bloodrequest b
INNER JOIN bloodgroup bg ON b.bloodGroup = bg.blood_grp_id
WHERE b.status = 'Completed'";
$result =mysqli_query($con,$q);

if ($result->num_rows > 0) {
$table="";
$table.= "<table class='display_table'>";
$table.="<thead>";
$table.="<tr>";
$table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>Hospital</th><th>Phone</th><th>Status</th>";
$table.="</tr>";
$table.="</thead>";
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$id=$row["id"];
$table.="<tbody>";
$table.="<tr>";
$table.="<td>";
$table.=$row["id"];
$table.="</td>";
$table.="<td>";
$table.=$row["patientname"];
$table.="</td>";
$table.="<td>";
$table.=$row["gender"];
$table.="</td>";
$table.="<td>";
$table.=$row["bloodgroup"];
$table.="</td>";
$table.="<td>";
$table.=$row["hospitalNameAddress"];
$table.="</td>";
$table.="<td>";
$table.=$row["phone"];
$table.="</td>";
$table.="<td class='Status' >";
$table.=$row["status"];
$table.="</td>";
$table.="</tbody>";
}
$table.="</table>";
$table.= "</tr>";



echo $table;

} else {
        
    echo "<td class='abc'>No matching results found.</td>";   
   
     }



?>
</div>