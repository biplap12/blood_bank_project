<?php 
include "../header/header.php";
?>
<div class="body_contain">
    <div class="heading">
        <h1>About </h1>
    </div>
    <hr style="margin-top: -1.5%" />
    <div class="redirect_heading">
        <h2>
            <a href="../index/index.php">Home /</a>
        </h2>

        <p><?php 

        echo substr( $_SERVER['PHP_SELF'],26,5) ?></p>


        <!-- echo $_SERVER['PHP_SELF']; ?></p> -->
    </div>
    <div class="aboutUS_Text">
        <div class="image_about">
            <img class="aboutImg_banner" src="../img/image-4.png" alt="blood donet picture" />
        </div>
        <div class="image_text">
            <h2 style="font-size: 30px">About Blood Bank</h2>
            <p style="font-size: 20px">
                Blood banking is the process that takes place in the laboratory to
                ensure that donated blood, or blood products, are safe before they
                are used in blood transfusions and other medical procedures. Blood
                banking includes typing the blood for transfusion and testing for
                infectious diseases.The term "blood bank" typically refers to a
                division of a hospital where the storage of blood product occurs and
                where proper testing is performed (to reduce the risk of transfusion
                related adverse events). However, it sometimes refers to a
                collection center, and indeed some hospitals also perform
                collection.
            </p>
        </div>
    </div>
    <hr />



    <?php 
include "../footer/footer.php";
?>