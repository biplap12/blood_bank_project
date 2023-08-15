<?php

include "../database/dbConnect.php";

$q="SELECT d.id, d.fullname, d.gender, bg.bloodgroup, d.address, d.email, d.phone, d.birthdate, d.newdonor, d.ihaveread, d.iagree, d.donorRegisterDate, d.status
FROM donors d
INNER JOIN bloodgroup bg ON d.bloodGroup = bg.blood_grp_id
WHERE d.status = 'Active'";
$result =mysqli_query($con,$q);


if ($result->num_rows > 0) {
$table="";
$table.= "<table class='display_table'>";
$table.="<thead>";
$table.="<tr>";
$table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>Phone</th><th>Status</th>";
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
$table.=$row["fullname"];
$table.="</td>";
$table.="<td>";
$table.=$row["gender"];
$table.="</td>";
$table.="<td>";
$table.=$row["bloodgroup"];
$table.="</td>";
$table.="<td>";
$table.=$row["phone"];
$table.="</td>";
$table.="<td>";
$table.=$row["status"];
$table.="</td>";
// $table.="<td><a onclick=\" return ActivateUser($id)\" class='dis view' href='javascript:void(0)'>View</a></td>";
// $table.="<td><a onclick=\" return Delete($id)\" class='dis deleteitem' href='javascript:void(0)'>Delete</a></td>";
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



<!-- 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
function ActivateUser(id) {


    swal({
            title: "Are you sure you want to View?",
            text: "you can see any thing of donors!",
            icon: "info",
            buttons: true,
            dangerMode: true,
        })
        .then((Active) => {
            if (Active) {
                window.location.href = '../view/viewdonor.php?id=' + id;

                // swal("File has been Activate!", {
                //     icon: "success",
                // });
            } else {
                // swal("Your imaginary file is safe!");
                swal("Failed to View user.", {
                    icon: "error",
                });
            }
        });



} 


// function Delete(id) {
// swal({
// title: "Are you sure?",
// text: "This user will be permanently deleted.",
// icon: "warning",
// buttons: ["Cancel", "Delete"],
// dangerMode: true,
// })
// .then((willDelete) => {
// if (willDelete) {
// $.ajax({
// type: "POST",
// url: "../Deactive/deleteDonor.php",
// data: {
// id: id
// },
// success: function(response) {
// if (response === "success") {
// swal("Success", "User deleted successfully!", "success")
// .then(() => {
// // Reload the page or perform any other action
// location.reload();
// });
// } else {
// swal("Error", "Failed to delete user.", "error");
// }
// },
// error: function() {
// swal("Error", "Failed to delete user.", "error");
// }
// });
// }
// });
// }
</script>