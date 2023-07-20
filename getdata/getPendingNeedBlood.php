<?php

include "../database/dbConnect.php";

$q="SELECT * FROM `needblood` WHERE `status`='Pending'";
$result =mysqli_query($con,$q);


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





?>
</div>