<?php

include "service.php";

?>
<div class="container_service">
    <h1>Need Blood</h1>
    <form id="needbloodForm" method="POST">
        <div class="form-group">
            <label for="PatientName">Patient Name:</label>
            <input type="text" id="PatientName" name="patientname" required>
        </div>
        <div class="form-group">
            <label for="bloodGroup">Required Blood Group:</label>
            <select id="bloodGroup" name="bloodgroup" required>
                <option value=""></option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="unitofblood">Need Unit Of Blood:</label>
            <input type="text" name="unitofblood" id="unitofblood" required>
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
        <!-- <div class="form-group">
            <label for="country">Country:</label>
            <select id="country" name="country" required> -->
        <!-- <option value=""></option> -->
        <!-- <option value="Nepal">Nepal</option> -->
        <!-- <option value="Armenia">Armenia</option>
                <option value="Russia">Russia</option>
                <option value="Germany">Germany</option>
                <option value="France">France</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option> -->
        <!-- </select> -->
        <!-- </div> -->
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>
        </div>
        <!-- <div class="form-group">
            <label for="doctorname">Doctor Name:</label>
            <input type="text" name="doctorname" id="doctorname" required>
        </div> -->
        <div class="form-group">
            <label for="requiredDate">When Required:</label>
            <input type="date" name="requiredate" id="requiredDate" required>
        </div>
        <div class="form-group">
            <label for="contactName">Contact Name:</label>
            <input type="text" name="contactname" id="contactName" required>
        </div>
        <!-- <div class="form-group">
            <label for="address">Address:</label>
            <textarea type="textarea" id="textarea" cols="84" name="needbloodaddress" rows="5" maxlength="999"
                style="resize:none;border-radius:5px;font-size:18px" required></textarea>
        </div> -->
        <div class="form-group">
            <label for="Email">Email ID:</label>
            <input type="email" name="email" id="Email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone No.:</label>
            <input type="tel" name="phone" id="phone" required>
        </div>
        <!-- <div class="form-group">
            <label for="phone">Phone No.2:</label>
            <input type="tel" name="phone2" id="phone2" required>
        </div> -->
        <!-- <div class="form-group">
                <label for="gender">Gender:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male" class="radio-label">Male</label>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female" class="radio-label">Female</label>
                </div>
            </div> -->
        <!-- <div class="form-group">
            <label for="birthdate">Birthdate:</label>
            <input type="date" name="birthdate" id="birthdate" required>
        </div> -->

        <!-- <div class="form-group">
            <label for="uploadphoto">Upload Photo:</label>
            <input type="file" name="uploadphoto" id="uploadphoto" required>
        </div> -->
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
        url: "../savedata/saveneedblood.php",
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
            swal({
                title: "Success!",
                text: "Request Blood Successfull !",
                icon: "success"
            }).then(function() {
                // Redirect to the homepage
                window.location.href = "./NeedBlood.php";
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
                location.replace("./NeedBlood.php")
            });



        }

    });

});
</script>



<!-- <input type="file" class="form-control" name="fileToUpload">
display: block;
    width: 100%;
    height: 38px;
    padding: 8px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333333;
    background-color: #ffffff;
    background-image: none;
    border: 1px solid #cccccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb -->


<?php include "footer.php";
?>