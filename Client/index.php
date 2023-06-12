 <?php include "navbar.php";
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
 <section class="indexPage">
     <section class="blood_management">
         <h1>Online Blood Bank Management System</h1>
         <div class="cards">
             <div class="card">
                 <div class="card_title">
                     <h2><i class="fa fa-fw fa-user"></i>Donor Registration</h2>
                 </div>
                 <p class="cardDis">Have you at anytime witnessed a relative of yours or a close friend searching
                     frantically for a blood
                     donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps
                     ticking?This thought laid our foundation.</.>
                 <div class="btn"><a href="donor.php">View More</a></div>
             </div>
             <div class="card">
                 <div class="card_title">
                     <h2><i class="fa fa-fw fa-user"></i>Need Blood</h2>
                 </div>
                 <p class="cardDis">Every 2 seconds someone needs blood. Your blood helps more than one life at a time.
                     Accident victims, premature babies, patients undergoing major surgeries require whole blood, where
                     your
                     blood after testing is used directly.</p>
                 <div class="btn"><a href="NeedBlood.php">View More</a></div>
             </div>
             <div class="card">
                 <div class="card_title">
                     <h2><i class="fa fa-fw fa-user"></i>Search Donor</h2>
                 </div>
                 <p class="cardDis">Some people who have serious injuries they need blood transfusions to replace blood
                     lost
                     during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is
                     available
                     whenever and wherever it is needed.</p>
                 <div class="btn"><a href="searchblood.php">View More</a></div>
             </div>
         </div>
     </section>



     <section class="Blood_donor">
         <h1>Blood Doner</h1>
         <div class="gallery">
             <div class="images">
                 <a href=""><img src="../img/cover.jpg" alt=""></a>

             </div>
             <div class="images">
                 <a href=""><img src="../img/Blood_donation.jpg" alt=""></a>


             </div>
             <div class="images">
                 <a href=""><img src="../img/club 25.jpg" alt=""></a>


             </div>
             <div class="images">
                 <a href=""><img src="../img/nguy-n-hi-p-sTTeaN4wwrU-unsplash.jpg" alt=""></a>

             </div>
             <div class="images">
                 <a href=""><img src="../img/image-4.png" alt=""></a>


             </div>
             <div class="images">
                 <a href=""><img src="../img/istockphot.jpg" alt=""></a>


             </div>
             <div class="images">
                 <a href=""><img src="../img/club25Nepal.jpg" alt=""></a>

             </div>
             <div class="images">
                 <a href=""><img src="../img/blood inject.jpg" alt=""></a>


             </div>
     </section>
     <section class="why_we_Need_blood">
         <h1>Why we need you to give blood ?</h1>
         <div class="aboutUS_Text">
             <div class="image_text_why_we_Need_blood">
                 <ul style="list-style-type:circle;font-weight: bolder;">
                     <li>Each year we need approximately 200,000 new donors, as some donors can no longer give
                         blood.</li>
                     <li>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people
                         who need
                         long-term treatments.</li>
                     <li>We need over 6,000 blood donations every day to treat patients in need across india. Which
                         is why
                         there’s always a need for people to give blood.</li>
                     <li>Most people between the ages of 17-65 are able to give blood.</li>
                     <li>Around half our current donors are over 45. That's why we need more young people (over the
                         age of
                         17)
                         to start giving blood, so we can make sure we have enough blood in the future.</li>
                     <li>Many people would not be alive today if donors had not generously given their blood.</li>

                 </ul>
             </div>
             <div class="image_about">
                 <img class="aboutImg_banner" src="../img/image-4.png" alt="blood donet picture" />
             </div>
         </div>
     </section>
     <section class="massageUsInIndex">
         <div class="massageUSINText">
             <p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..
             </p>
         </div>
         <div class="redirectMassageUs">
             <a href="massageUsForm.php">Massage Us </a>
         </div>
     </section>
 </section>



 <?php include "footer.php";
?>