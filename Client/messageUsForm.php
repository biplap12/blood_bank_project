<?php include "navbar.php";
include "../database/dbConnect.php";
?>


<section class="messageSection">

    <div class="messageUs">
        <div class="messageUs_form">
            <form method="POST" id="messagefromuser">
                <h1>Send us a Message</h1>
                <label for="Name">Full Name:</label>
                <input type="text" name="fullname" id="fullname" placeholder="Full Name" pattern="[A-Za-z ]{3,50}"
                    required title="Please enter your valid name"><br>
                <label for="Phone">Phone Number:</label>
                <input type="tel" name="phone" id="phone" placeholder="9800000000" pattern="[0-9]{10}" required
                    title="Please enter 10-digit number" required> <br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="example@example.com" required><br>
                <label class="textare" for="message">Message:</label>
                <textarea class="textarea" rows="5" cols="100" id="message" placeholder="Your Message...." required
                    name="message" maxlength="9999999999" style="resize:none"></textarea><br><br>
                <input type="hidden" name="messageDateTime" value="<?php echo date('Y/m/d-H:i'); ?>">
                <button type="submit" class="messageSendButton"><i class="fa-sharp fa-solid fa-paper-plane"></i> Send
                    Message</button>
            </form>
        </div>
        <div class="company_Details">
            <h1>Contact Details</h1>
            <h3> Blood Bank <br> Kathmandu.Nepal</h3>
            <h3><i class="fa-solid fa-phone"></i> 9812345678</h3>
            <h3><i class="fa-solid fa-envelope"></i> <a href="#"> bloodbank@gmail.com</a></h3>
            <h3><i class="fa-solid fa-clock"></i> 24/7</h3>
            <h3><i class="fa-solid fa-globe"></i> <a href="../Client/index.php">www.blodbank.org.np</a></h3>
            <h1><a href=""><i class="fa-brands fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;<a href=""><i
                        class="fa-brands fa-twitter"></i></a>
                &nbsp;&nbsp;&nbsp;<a href=""><i class="fa-brands fa-square-instagram"></i></a>

            </h1>
        </div>

    </div>
    <div id="loader" style=" display: none;">
        <div class="loading">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

</section>






<script type="text/javascript">
$(document).ready(function() {});
$("#messagefromuser").submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: "../savedata/savemessage.php",
        type: "post",
        data: new FormData(this),
        timeout: 20000,
        processData: false,
        contentType: false,
        beforeSend: function() {
            $("#messagefromuser").show();
            $("#loader").show();


        },
        success: function(response, data, status) {
            $("#loader").hide();
            //  $("#success-msg").html(data);
            //  $("#success-msg").show();
            swal({
                title: "Success!",
                text: "Message Send Successfully!",
                icon: "success"
            }).then(function() {
                // Redirect to the homepage
                window.location.href = "./messageUsForm.php";
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
                location.replace("./messageUsForm.php")
            });



        }

    });

});
</script>


<?php include "footer.php";
?>