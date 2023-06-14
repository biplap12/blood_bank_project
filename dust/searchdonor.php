<?php
include "../header/header.php";
include "../admin/admin.php";
?>

<div class="adminContent">
    <h1> Search Donor Details</h1>
    <hr>
    <div class="main-content">
        <div class="content">

            <div class="searchDonor">
                <form id="searchdonorForm" method="get">
                    <div class="search-form-group">
                        <div class="searchinput">
                            <label for="search_data">Search Text</label>
                            <input type="text" id="search_data" name="search_data" required>
                        </div>
                        <div class="searchinput">
                            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </form>







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


            <?php

include "../database/dbConnect.php";
if (isset($_GET['search_data'])) {
    $searchData = $_GET['search_data'];

    $q = "SELECT * FROM `donors` WHERE bloodgroup = '$searchData'";

    $result = $con->query($q);

    if ($result->num_rows > 0) {
    $table="";
    $table.= "<table class='display_table'>";
    $table.="<thead>";
    $table.="<tr>";
    $table.="<th>S.N.</th><th>Name</th><th>Gender</th><th>Blood</th><th>City</th><th>state</th><th>Phone1</th><th>Phone2</th><th>View</th>";
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
        $table.="</tbody>";
    }
        $table.="</table>";
        $table.= "</tr>";
        echo $table;
    } else {
        
       echo "<td class='abc'>No matching results found.</td>";   
      
        }
    
}


$con->close();
?>