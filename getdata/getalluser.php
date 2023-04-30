<?php

include "../database/dbConnect.php";

$query="select * from tbl_user";
$result=mysqli_query($con,$query);
$table="";

$table.="<table class='display_table'>";
$table.= "<tr>";
$table.="<th>UserName</th><th>Status</th><th colspan=3>Action</th> ";
$table.= "</tr>";

while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
  $id= $row["id"];
  $table.= "<tr>";
      $table.="<td>";
      $table.=$row["username"];
      $table.="</td>";
      $table.="<td>";
      $table.=$row["status"];
      $table.="</td>";
      $table.="<td><a onclick=\" return confirm('Are you sure you want to Activate?')\" class='dis view' href='ActivateUser.php?id=$id'>Activate</a></td>";
    $table.="<td><a onclick=\" return confirm('Are you sure you want to Suspend?')\" class='dis deleteitem' href='suspendUser.php?id=$id'>Suspend</a></td>";
    $table.="<td><a onclick=\" return confirm('Are you sure you want to update?')\" class='dis update  ' href='updateUserForm.php?id=$id'>Update</a></td>";


    $table.= "</tr>";
}
$table.= "</table>";

echo $table;




?>