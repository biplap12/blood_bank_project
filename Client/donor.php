<?php
    include "service.php";
    ?>



<div class="container_service">
    <h1>Blood Donor Registration</h1>
    <form method="POST" id="donorregistrationForm" onsubmit="event.preventDefault(); check();">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="fullname" pattern="[A-Za-z ]{3,50}" required>
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
            <label for="phone">Phone No.:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
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

        <div class="form-group-checkbox">
            <input type="checkbox" id="ihaveread" name="ihaveread" checked required>
            <label for="ihaveread">I have read the eligibility criteria and confirm that i am eligible to donate
                blood.</label>
        </div>
        <input type="hidden" name="donorRegisterDate" value="<?php echo date('Y/m/d-H:i'); ?>">
        <div class="form-group-checkbox">
            <input type="checkbox" id="iagree" name="iagree" checked required>
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


<script type="text/javascript">
$(document).ready(function() {});
$("#donorregistrationForm").submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: "../savedata/saveDonor.php",
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

<?php include "footer.php";
?>