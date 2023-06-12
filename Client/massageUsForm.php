<?php include "navbar.php";
include "../database/dbConnect.php";
?>


<section class="massageSection">

    <div class="massageUs">
        <div class="massageUs_form">
            <form method="POST" id="massagefromuser">
                <h1>Send us a Message</h1>
                <label for="Name">Full Name:</label>
                <input type="text" name="fullname" id="fullname" pattern="[A-Za-z]{3,50}" required
                    title="Please enter your valid name"><br>

                <label for="Phone">Phone Number:</label>
                <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required
                    title="Please enter 10-digit number" required> <br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required><br>
                <label class="textare" for="Massage">Massage:</label>
                <textarea class="textarea" rows="5" cols="100" id="massage" required name="massage" maxlength="999"
                    style="resize:none"></textarea><br>
                <button type="submit" class="massageSendButton"><i class="fa-sharp fa-solid fa-paper-plane"></i> Send
                    Massage</button>
            </form>
        </div>
        <div class="company_Details">
            <h1>Contact Details</h1>
            <h2> Blood Bank <br> Kathmandu.Nepal</h2>
            <h2>98000000</h2>
            <h2>bloodbank@gmail.com</h2>
            <h2>www.blodbank.com</h2>
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
$("#massagefromuser").submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: "../savedata/savemassage.php",
        type: "post",
        data: new FormData(this),
        timeout: 20000,
        processData: false,
        contentType: false,
        beforeSend: function() {
            $("#massagefromuser").show();
            $("#loader").show();


        },
        success: function(response, data, status) {
            $("#loader").hide();
            //  $("#success-msg").html(data);
            //  $("#success-msg").show();
            swal({
                title: "Success!",
                text: "Massage Send Successfully!",
                icon: "success"
            }).then(function() {
                // Redirect to the homepage
                window.location.href = "./massageUsForm.php";
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
                location.replace("./massageUsForm.php")
            });



        }

    });

});
</script>


<?php include "footer.php";
?>