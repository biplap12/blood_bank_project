<?php

include "../database/dbConnect.php";

$q="SELECT * FROM `message` ";
$result =mysqli_query($con,$q);
if ($result->num_rows > 0) {

$table="";
$table.= "<table class='display_table'>";
$table.="<thead>";
$table.="<tr>";
$table.="<th>S.N.</th><th>Message</th><th>Received Date Time</th><th>View</th>";
$table.="</tr>";
$table.="</thead>";
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$id=$row["id"];
$table.="<tbody>";
$table.="<tr>";
$table.="<td>";
$table.=$row["id"];
$table.="</td>";
$table.="<td>";
$table.=$row["message"];
$table.="</td>";
$table.="<td>";
$table.=$row["messageDateTime"];
$table.="</td>";
$table.="<td><a onclick=\" return View($id)\" class='dis view' href='javascript:void(0)'>View</a></td>";
$table.="<tr>";
}
$table.="</tbody>";
$table.="</table>";
$table.="<tr>";


echo $table;
} else {
        
    echo "<td class='abc'>No matching results found.</td>";   
   
     }
?>

</div>
</div>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function View(id) {


    swal({
            title: "Are you sure you want to View?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((Active) => {
            if (Active) {
                window.location.href = '../view/viewMessage.php?id=' + id;

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
</div>
</div>