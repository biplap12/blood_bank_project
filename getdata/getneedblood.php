<?php

include "../database/dbConnect.php";

$q="SELECT * FROM `needblood`";
$result =mysqli_query($con,$q);


$table="";
$table.= "<table class='display_table'>";
$table.="<thead>";
$table.="<tr>";
$table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>Hospital</th><th>Phone</th><th>Complete Date</th><th>Status</th><th>Update</th>";
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
$table.=$row["phone1"];
$table.="</td>";
$table.="<td>";
$table.=$row["completeDate"];
$table.="</td>";
$table.="<td class='Status' >";
$table.=$row["status"];
$table.="</td>";
$table.="<td><a onclick=\" return View($id)\" class='dis view' href='javascript:void(0)'>View</a></td>";
$table.="</tbody>";
}
$table.="</table>";
$table.= "</tr>";



echo $table;





?>
</div>




<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
function View(id) {


    swal({
            title: "Are you sure you want to View & Update?",
            text: "once update you cannot change any thing!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((Active) => {
            if (Active) {
                window.location.href = '../view/viewneedblood.php?id=' + id;

                // swal("File has been Activate!", {
                //     icon: "success",
                // });
            } else {
                // swal("Your imaginary file is safe!");
                swal("File has not been Updated!", {
                    icon: "error",
                });
            }
        });



}


// function Delete(id) {
//     swal({
//             title: "Are you sure?",
//             text: "This user will be permanently deleted.",
//             icon: "warning",
//             buttons: ["Cancel", "Delete"],
//             dangerMode: true,
//         })
//         .then((willDelete) => {
//             if (willDelete) {
//                 $.ajax({
//                     type: "POST",
//                     url: "../Deactive/deleteDonor.php",
//                     data: {
//                         id: id
//                     },
//                     success: function(response) {
//                         if (response === "success") {
//                             swal("Success", "User deleted successfully!", "success")
//                                 .then(() => {
//                                     // Reload the page or perform any other action
//                                     location.reload();
//                                 });
//                         } else {
//                             swal("Error", "Failed to delete user.", "error");
//                         }
//                     },
//                     error: function() {
//                         swal("Error", "Failed to delete user.", "error");
//                     }
//                 });
//             }
//         });
// }
</script>