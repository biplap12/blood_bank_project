<?php

include "service.php";

?>
<div class="container_service">
    <h1>Blood Request</h1>
    <form id="needbloodForm" method="POST">
        <div class="form-group">
            <label for="PatientName">Patient Name:</label>
            <input type="text" id="PatientName" name="patientname" pattern="[A-Za-z ]{3,50}" required>
        </div>
        <div class="form-group">
            <label for="bloodGroup">Required Blood Group:</label>
            <select id="bloodGroup" name="bloodgroup" required>
                <?php include "../admin/setting.php";?>

            </select>
        </div>
        <div class="form-group">
            <label for="Gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="unitofblood">Need Unit Of Blood:</label>
            <input type="number" name="unitofblood" id="unitofblood" min="0" max="10" required>
        </div>
        <div class="form-group">
            <label for="HospitalNameAddress">Hospital Name & Address:</label>
            <textarea type="textarea" id="textarea" cols="84" name="hospitalNameAddress" rows="5" maxlength="999"
                style="resize:none;border-radius:5px;font-size:18px" required></textarea>
        </div>

        <div class="form-group">
            <label for="resionforblood">Reason For Blood:</label>
            <input type="text" name="reasonforblood" id="ReasonForBlood" required>
        </div>

        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>
        </div>

        <div class="form-group">
            <label for="requiredDate">When Required:</label>
            <input type="date" name="requiredate" id="requiredDate" min="<?= date('Y-m-d') ?>" required>
        </div>
        <div class="form-group">
            <label for="contactName">Contact Name:</label>
            <input type="text" name="contactname" id="contactName" pattern="[A-Za-z ]{3,50}" required>
        </div>

        <div class="form-group">
            <label for="Email">Email ID:</label>
            <input type="email" name="email" id="Email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone No.:</label>
            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required>
        </div>

        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
        <input type="hidden" name="current_date_time" value="<?php echo date('Y/m/d-H:i'); ?>">

    </form>


    <div id="loader" style=" display: none;">
        <div class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

</div>


<script type="text/javascript">
$(document).ready(function() {});
$("#needbloodForm").submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: "../savedata/saveBloodRequest.php",
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
            $("#success-msg").html(data);
            //  $("#success-msg").show();
            swal({
                title: "Success!",
                text: "Request Blood Successfull !",
                icon: "success"
            }).then(function() {
                // Redirect to the homepage
                window.location.href = "./BloodRequest.php";
            });



        },
        error: function(xhr, data, status) {
            $("#loader").hide();
            $("#error-msg").html(data);
            $("#error-msg").show();

            swal({
                title: "Error!",
                text: "Something went Wrong",
                icon: "error"
            }).then(function() {
                // Redirect to the homepage
                location.replace("./BloodRequest.php")
            });



        }

    });

});
</script>


<?php include "footer.php";
?>