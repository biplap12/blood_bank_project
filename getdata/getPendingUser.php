<?php

include "../database/dbConnect.php";

$q="SELECT * FROM `tbl_user` WHERE `status`='Pending'";
$result=mysqli_query($con,$q);
if ($result->num_rows > 0) {
$table="";

$table.="<table class='display_table'>";
$table.= "<tr>";

$table.=" <th>ID</th><th>Name</th><th>Phone</th><th>Email</th> <th> UserName </th><th> Status</th> "; 
$table.= "</tr>";

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      
  $id=$row["id"];
  $table.= "<tr>";
      $table.="<td>";
      $table.=$row["id"];
      $table.="</td>";
      $table.="<td>"; 
      $table.=$row["name"];
      $table.="</td>";
      $table.="<td>";
      $table.=$row["phone"];
      $table.="</td>";
      $table.="<td>";
      $table.=$row["email"];
      $table.="</td>";
      $table.="<td>";
      $table.=$row["username"];
      $table.="</td>";
      $table.="<td class='status'>";
      $table.=$row["status"];
      $table.="</td>";
        $table.= "</tr>";
}
$table.= "</table>";

echo $table;
} else {
        
  echo "<td class='abc'>No matching results found.</td>";   
 
   }
?>
</div>
</div>
</div>
</div>