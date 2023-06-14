<!DOCTYPE html>
<html>

<head>
    <title>Date Search</title>
</head>

<body>
    <form method="GET" action="">
        <label for="search_date">Enter Date:</label>
        <input type="text" name="search_date" id="search_date" placeholder="YYYY-MM-DD">
        <input type="submit" value="Search">
    </form>

    <?php
include "../database/dbConnect.php";



   
    
    // Search for matching text based on the date input

    if (isset($_GET['search_date'])) {
        $searchDate = $_GET['search_date'];

        $q = "SELECT * FROM `donors` WHERE bloodgroup = '$searchDate'";

        $result = $con->query($q);

        if ($result->num_rows > 0) {
            echo "<h2>Matching Results:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo $row['bloodgroup'] . "<br>"; 
                echo $row['fullname'] . "<br>";
                echo $row['id'] . "<br>";
            }
        } else {
            echo "No matching results found.";
        }
    }

    // Close the database connection
    $con->close();
    ?>
</body>

</html>




<?php
include "../header/header.php";
include "../admin/admin.php";
?>

<div class="adminContent">
    <h1> Search Donor Details</h1>
    <hr>
    <div class="main-content">
        <!-- <div class="content"> -->

        <div class="searchDonor">
            <form id="searchdonorForm" method="get">
                <div class="search-form-group">
                    <div class="searchinput">
                        <label for="search_date">Search Text</label>
                        <input type="text" id="search_date" name="search_date" required>
                    </div>
                    <div class="searchinput">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>




            <!-- <?php 
            // include "../getdata/getsearchdonor.php";
            ?> -->


            <div id="loader" style=" display: none; ">
                <div class="loading">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>




        <!-- 
        <script type="text/javascript">
        $(document).ready(function() {});
        $("#searchdonorForm").submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "../getdata/getsearchdonor.php",
                type: "post",
                data: new FormData(this),
                timeout: 20000,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#needbloodForm").show();
                    $("#loader").show();
                },
                success: function(response, data, status) {
                    $("#loader").hide();
                    //  $("#success-msg").html(data);
                    //  $("#success-msg").show();




                },
                error: function(xhr, data, status) {
                    $("#loader").hide();
                    $("#error-msg").html(data);
                    $("#error-msg").show();

                }

            });

        });
        </script> -->
        <?php

include "../database/dbConnect.php";
if (isset($_GET['search_date'])) {
    $searchDate = $_GET['search_date'];

    $q = "SELECT * FROM `donors` WHERE bloodgroup = '$searchDate'";

    $result = $con->query($q);

    if ($result->num_rows > 0) {
    $table="";
    $table.= "<table class='display_table'>";
    $table.="<thead>";
    $table.="<tr>";
    $table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>City</th><th>state</th><th>Phone1</th><th>Phone2</th><th>View</th><th>Delete</th>";
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
        $table.=$row["city"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["state"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["phone1"];
        $table.="</td>";
        $table.="<td>";
        $table.=$row["phone2"];
        $table.="</td>";
        $table.="<td><a onclick=\" return ActivateUser($id)\" class='dis update' href='javascript:void(0)'>View</a></td>";
        $table.="<td><a onclick=\" return Delete($id)\" class='dis deleteitem' href='javascript:void(0)'>Delete</a></td>";
        $table.="</tbody>";
    }
        $table.="</table>";
        $table.= "</tr>";
        echo $table;
    } else {
        $th="";
        $th.="<tr style='text-align:center;'>No matching results found.</tr>";   
        echo $th;
        }
    
}


$con->close();
?>
    </div>
</div>

</div>