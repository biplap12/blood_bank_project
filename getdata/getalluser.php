<?php

include "../database/dbConnect.php";

$q="SELECT * FROM `tbl_user`";
$result=mysqli_query($con,$q);

if ($result->num_rows > 0) {
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
      $table.="<td class='status'>";
      $table.=$row["status"];
      $table.="</td>";
      $table.="<td><a onclick=\" return ActivateUser($id)\" class='dis view' href='javascript:void(0)'>Activate</a></td>";
      $table.="<td><a onclick=\" return deactivateData($id)\" class='dis deleteitem' href='javascript:void(0)'>Deactive</a></td>";
    //   $table.="<td><a onclick=\" return confirm('Are you sure you want to update?')\" class='dis update  ' href='../update/updateUserByAdmin.php?id=$id'>Update</a></td>";
     $table.="<td><a onclick=\" return updateUser($id)\" class='dis update' href='javascript:void(0)'>Update</a></td>";


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


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
function ActivateUser(id) {


    swal({
            title: "Are you sure you want to Activate?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((Active) => {
            if (Active) {
                window.location.href = '../Activate/ActivateUser.php?id=' + id;

                swal("File has been Activate!", {
                    icon: "success",
                });
            } else {
                // swal("Your imaginary file is safe!");
                swal("Somthing went Wrong", {
                    icon: "error",
                });
            }
        });



}

function deactivateData(id) {


    swal({
            title: "Are you sure you want to Deactive?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((deactive) => {
            if (deactive) {
                window.location.href = '../Deactive/DeactiveUser.php?id=' + id;

                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
            } else {
                // swal("Your imaginary file is safe!");
                swal("Somthing went Wrong", {
                    icon: "error",
                });
            }

        });
}

function updateUser(id) {


    swal({
            title: "Are you sure you want to Update User?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((Active) => {
            if (Active) {
                window.location.href = '../update/updateUserByAdmin.php?id=' + id;

                // swal("File has been Updated!", {
                //     icon: "success",
                // });
            } else {
                // swal("Your imaginary file is safe!");
                swal("Somthing went Wrong", {
                    icon: "error",
                });
            }
        });



}
</script>

<script src="../js/sweetalert.js"></script>