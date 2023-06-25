<?php

include "../database/dbConnect.php";

$searchTerm = $_POST['search'];

// Construct SQL query
$sql = "SELECT * FROM `donors` WHERE bloodgroup LIKE '%$searchTerm%'";

// Execute query
$result = $con->query($sql);

// Process results
if ($result->num_rows > 0) {
    $table="";
    $table.= "<table class='display_table'>";
    $table.="<thead>";
    $table.="<tr>";
    $table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>State</th><th>City</th><th>Phone1</th><th>Phone2</th><th>View</th>";
    $table.="</tr>";
    $table.="</thead>";
    while ($row = $result->fetch_assoc()) {
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
        $table.=$row["state"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["city"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["phone1"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["phone2"];
        $table.="</td>";
        $table.="<td><a onclick=\" return viewDonor($id)\" class='dis update' href='javascript:void(0)'>View</a></td>";
        $table.="</tbody>";
    }
        $table.="</table>";
        $table.= "</tr>";
        echo $table;
    } else {
        
       echo "<td class='abc'>No matching results found.</td>";   
      
        }
    



$con->close();
?>





<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
function viewDonor(id) {


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
                swal("File has not been Activate!", {
                    icon: "error",
                });
            }
        });



}