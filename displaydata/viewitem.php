<?php
include "menu.php";

$id = $_GET["id"];
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"script_language");
$query="select * from `tbl_script_language` WHERE id=$id";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$photo=$row['photo'];

?>
<div class="main-content">
    <div class="title">Display Items</div>
    <div class="content">
        <div class="itemDisplay">
            <img src="images/<?php echo $photo ?>" alt="Image" srcset="">
        </div>
        <h2>ID: <?php echo $row ["id"];?></h2>
        <h2>Name: <?php echo $row ["name"];?></h2>
        <h2>Price: <?php echo $row ["price"];?></h2>
        <!-- <h2>Stock: <?php echo $row ["stock"];?></h2> -->
    </div>
</div>