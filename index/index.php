<?php include "../header/header.php";
?>

<div class="mainSlider">
    <div class="imageSlider">
        <div class="prev-next-btn">
            <button class="icon-btn-prev" onclick="pre()"><i class="fa-solid fa-caret-left"></i></button>
            <button class="icon-btn-next" onclick="next()"><i class="fa-solid fa-caret-right"></i></button>
        </div>
        <div class="slider">
            <img id="1" class="slide" src="../img/blood inject.jpg" alt="" />
            <img id="2" class="slide" src="../img/Blood-Donation-2.webp" alt="" />
            <img id="3" class="slide" src="../img/Blood_donation.jpg" alt="" />
            <img id="4" class="slide" src="../img/Blood-Donation-2.webp" alt="" />
            <img id="5" class="slide" src="../img/istockphot.jpg" alt="" />
        </div>
    </div>
</div>









<div class="body_contain">

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
</div>


<?php 
include "../footer/footer.php";
?>

<!-- <script>
const Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'success',
    title: 'Signed in successfully'
})
</script> -->