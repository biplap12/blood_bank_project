<?php

include "../database/dbConnect.php";

// $q="SELECT * FROM `bloodrequest`";
$q="SELECT b.id, b.patientname, b.gender, bg.bloodgroup, b.hospitalNameAddress, b.phone, b.completeDate, b.status
FROM bloodrequest b
INNER JOIN bloodgroup bg ON b.bloodGroup = bg.blood_grp_id";
$result =mysqli_query($con,$q);

if ($result->num_rows > 0) {
$table="";
$table.= "<table class='display_table'>";
$table.="<thead>";
$table.="<tr>";
$table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>Hospital</th><th>Phone</th><th>Complete Date</th><th>Status</th><th>View</th>";
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


} else {
        
    echo "<td class='abc'>No matching results found.</td>";   
   
     }


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
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((Active) => {
            if (Active) {
                window.location.href = '../view/viewBloodRequest.php?id=' + id;

                // swal("File has been Activate!", {
                //     icon: "success",
                // });
            } else {
                // swal("Your imaginary file is safe!");
                swal("Somthing went wrong!", {
                    icon: "error",
                });
            }
        });



}
</script>