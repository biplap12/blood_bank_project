<?php

 include "../header/header.php";
include "../admin/admin.php";
include "../database/dbConnect.php";
$id=$_GET["id"];

$q="SELECT * FROM `needblood` WHERE id=$id";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$photo=$row['photo'];

?>


<div class="adminContent">
    <h1>View</h1>
    <hr>
    <div class="main-content">
        <div class="title"><?php echo "Need Blood : "  . $row ["patientname"];?></div>
        <div class="content">
            <table class="massage-table">



        </div>
        <div class="viewitem">
            <div class="viewitemsbox">
                <div> <img class="responsive" width="200px" src="../img/needblood_images/<?php echo $photo ?>"
                        alt="Image" srcset=""></div>
            </div>
            <div class="viewitemsbox">
                <div class="viewitems">
                    <h2>ID:</h2>
                    <h3><?php echo $row ["id"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Patient Name:</h2>
                    <h3><?php echo $row ["patientname"];?></h3>
                </div>
                <hr class="viewitemhr">

                <div class="viewitems">
                    <h2>Blood Group:</h2>
                    <h3><?php echo $row ["bloodgroup"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Gender: </h2>
                    <h3><?php echo $row ["gender"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Unit Of Blood:</h2>
                    <h3><?php echo $row ["unitofblood"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Hospital:</h2>
                    <h3><?php echo $row ["hospitalNameAddress"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Country:</h2>
                    <h3><?php echo $row ["country"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>City:</h2>
                    <h3><?php echo $row ["city"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Doctor:</h2>
                    <h3><?php echo $row ["doctorname"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Require Date:</h2>
                    <h3><?php echo $row ["requiredate"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Contact Name:</h2>
                    <h3><?php echo $row ["contactname"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Address:</h2>
                    <h3><?php echo $row ["needbloodaddress"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Email:</h2>
                    <h3><?php echo $row ["email"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Phone No.1:</h2>
                    <h3><?php echo $row ["phone1"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Phone No.2: </h2>
                    <h3><?php echo $row ["phone2"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Birth Date:</h2>
                    <h3><?php echo $row ["birthdate"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Reason For Blood:</h2>
                    <h3><?php echo $row ["reasonforblood"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Complete Date: </h2>
                    <h3><?php echo $row ["completeDate"];?></h3>
                </div>
                <hr class="viewitemhr">
                <div class="viewitems">
                    <h2>Status: </h2>
                    <h3><?php echo $row ["status"];?></h3>
                </div>
                <hr class="viewitemhr">

            </div>


        </div>

        <div class="needbloodUpdateForm">
            <h1>
                Any Updation
            </h1>
            <form action="../completedate/completeddate.php?id=<?php echo $id;?>" method="post">
                <div class="form-group1">
                    <label for="completedate">Complete Date:</label>
                    <input type="date" name="completedate" id="completedate" required>
                    <label for="status">Status:</label>
                    <select id="needbloodstatus" name="needbloodstatus" required>
                        <option value="">Select Status</option>
                        <option value="Pending">Pending</option>
                        <option value="Not Completed">Not Completed</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>

                <div class="form-groupButtons">
                    <button type="submit">Update Now</button>
                    <a href="">Back Page</a>
                </div>
            </form>
        </div>
    </div>
</div>