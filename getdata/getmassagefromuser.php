<?php

include "../database/dbConnect.php";

$q="SELECT * FROM `massage` ";
$result =mysqli_query($con,$q);


$table="";
$table.= "<table class='display_table'>";
$table.="<thead>";
$table.="<tr>";
$table.="<th>S.N.</th><th>Name</th><th>Phone No.</th><th>Email</th><th>Message</th>";
$table.="</tr>";
$table.="</thead>";
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$table.="<tbody>";
$table.="<tr>";
$table.="<td>";
$table.=$row["id"];
$table.="</td>";
$table.="<td>";
$table.=$row["fullname"];
$table.="</td>";
$table.="<td>";
$table.=$row["phone"];
$table.="</td>";
$table.="<td>";
$table.=$row["email"];
$table.="</td>";
$table.="<td>";
$table.=$row["massage"];
$table.="</td>";
$table.="<tr>";
$table.="</tbody>";
$table.="</table>";









}
echo $table;


















?>