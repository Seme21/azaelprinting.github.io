<?php
include("../inclued/thankheader.php");

?>




 <!-- ================================END OF #FIVTH SECTION ======================= -->
 <!-- <section class="about_achievements">
        <div class="container about_achievements-container">
            <div class="about_achievements-left">
                <img src="../image/about/achievement.png" alt="image not found">
            </div>
            <div class="about_achievements-right">
                <h1>Achievements</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Nemo perferendis tempore voluptates rerum aspernatur nostrum.
                </p>
                <div class="achievements_cards">
                    <article class="achievement_card">
                        <span class="achievement_icon">
                            <i class="uil uil-file-share-alt"></i>
                        </span>
                        <h3>10,000+</h3>
                        <p>Services</p>
                    </article>
                    <article class="achievement_card">
                        <span class="achievement_icon">
                            <i class="uil uil-users-alt"></i>
                        </span>
                        <h3>10,000+</h3>
                        <p>Clients</p>
                    </article>
                    <article class="achievement_card">
                        <span class="achievement_icon">
                            <i class="uil-trophy"></i>
                        </span>
                        <h3>0,000+</h3>
                        <p>Awards</p>
                    </article>
                </div>
            </div>
        </div>
    </section> -->
    <!-- ========================== end of achievements ===================== -->

 

    <div class="container-thankyou">
        <button type="submit" class="btn" onclick="openPopup()">Submit</button>
        <div class="popup" id="popup" >
            <img src="../image/success-tick.png" alt="404 not found">
            <h2>Thank You!</h2>
            <p>Your details has been successfuly submitted. Thanks! </p>
            <button type="button" onclick="closePopup()">Ok</button>
        </div>
    </div>
<!-- <script>
    let popup = document.getElementById("popup");

    function openPopup() {
        popup.classList.add("open-popup");
    }
    function closePopup() {
        popup.classList.remove("open-popup")
    }
</script> -->

    <!-- <div>
            <center>
                    <div class="tankyou" style="padding:30% 20">
                        <h1>Thank You</h1>
                        <h4>We will in touch you soon!</h4>                        
                    </div>
            </center>
    </div> -->
</body>
</html>


<?php
include("../inclued/efooter.php");
?>