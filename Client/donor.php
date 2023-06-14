<?php
    include "service.php";
    ?>



<div class="container_service">
    <h1>Blood Donor Registration</h1>
    <form method="POST" id="donorregistrationForm" onsubmit="event.preventDefault(); check();">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fullname" required>
        </div>
        <div class="form-group">
            <label for="fathername">Father Name:</label>
            <input type="text" id="fathername" name="fathername" required>
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
            <label for="bloodGroup">Blood Group:</label>
            <select id="bloodGroup" name="bloodGroup" required>
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
        <!-- <div class="form-group">
            <label for="area">Area Name:</label>
            <input type="text" id="areaname" required>
        </div> -->
        <div class="form-group">
            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value=""></option>
                <option value="Nepal">Nepal</option>
                <option value="Armenia">Armenia</option>
                <option value="Russia">Russia</option>
                <option value="Germany">Germany</option>
                <option value="France">France</option>
                <option value="USA">USA</option>
                <option value="UK">UK</option>
            </select>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value=""></option>
                <option value="Koshi State">Koshi State</option>
                <option value="Madhesh State">Madhesh State</option>
                <option value="Bagmati State">Bagmati State</option>
                <option value="Gandaki State">Gandaki State</option>
                <option value="Lumbini State">Lumbini State</option>
                <option value="Karnali State">Karnali State</option>
                <option value="Sudurpachhim State">Sudurpachhim State</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ward">Ward No.:</label>
            <input type="number" id="ward" name="ward" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea type="textarea" id="textarea" cols="84" name="address" rows="5" maxlength="999"
                style="resize:none;border-radius:5px;font-size:18px" required></textarea>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone No.1:</label>
            <input type="tel" id="phone1" name="phone1" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone No.2:</label>
            <input type="tel" id="phone2" name="phone2" required>
        </div>
        <!-- <div class="form-group">
                <label for="gender">Gender:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="male" required>
                    <label for="male" class="radio-label">Male</label>
                    <input type="radio" id="female" name="gender" value="female" required>
                    <label for="female" class="radio-label">Female</label>
                </div> 
            </div>-->
        <div class="form-group">
            <label for="birthdate">Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required>
        </div>
        <div class="form-group">
            <label for="New Donor">New Donor:</label>
            <select id="donor" name="donor" required>
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="uploadphoto">Upload Photo:</label>
            <input type="file" id="uploadphoto" name="uploadphoto" required>
        </div>
        <div class="form-group-checkbox">
            <input type="checkbox" id="ihaveread" name="ihaveread" required>
            <label for="ihaveread">I have read the eligibility criteria and confirm that i am eligible to donate
                blood.</label>
        </div>
        <div class="form-group-checkbox">
            <input type="checkbox" id="iagree" name="iagree" required>
            <label for="iagree">I agree to the Term and Conditions and consent to have my contact and donor
                information published to the potential blood recipients..</label>
        </div>
        <br>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
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


<script type="text/javascript">
$(document).ready(function() {});
$("#donorregistrationForm").submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: "../savedata/saveDoner.php",
        type: "post",
        data: new FormData(this),
        timeout: 20000,
        processData: false,
        contentType: false,
        beforeSend: function() {
            $("#donorregistrationForm").show();
            $("#loader").show();


        },
        success: function(response, data, status) {
            $("#loader").hide();
            //  $("#success-msg").html(data);
            //  $("#success-msg").show();
            swal({
                title: "Success!",
                text: "Donor registration Successfully!",
                icon: "success"
            }).then(function() {
                // Redirect to the homepage
                window.location.href = "./donor.php";
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
                location.replace("./donor.php")
            });



        }

    });

});
</script>