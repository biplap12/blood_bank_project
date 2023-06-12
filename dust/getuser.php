<?php

include "../database/dbConnect.php";

$q="SELECT * FROM `tbl_user`";
$result=mysqli_query($con,$q);
$table="";

$table.="<table class='display_table'>";
$table.= "<tr>";

$table.=" <th>ID</th><th>Name</th><th>Phone</th><th>Email</th> <th> UserName </th><th> Status</th><th colspan=3>Action</th> "; 
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
      $table.="<td>";
      $table.=$row["status"];
      $table.="</td>";
      $table.="<td><a onclick=\" return confirm('Are you sure you want to Activate?')\" class='dis view' href='../Activate/ActivateUser.php?id=$id'>Activate</a></td>";
    $table.="<td><a onclick=\" return confirm('Are you sure you want to Deactive?')\" class='dis deleteitem' href='../Deactive/DeactiveUser.php?id=$id'>Deactive</a></td>";
    $table.="<td><a onclick=\" return confirm('Are you sure you want to update?')\" class='dis update  ' href='updateUserForm.php?id=$id'>Update</a></td>";


    $table.= "</tr>";
}
$table.= "</table>";

echo $table;




?>
</div>
</div>