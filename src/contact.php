<?php
include("../inclued/eheader.php");
include("../src/sendmail_c.php");

?>
<script>
var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
    separateDialCode: true,
    preferredCountries: ["in"],
    hiddenInput: "full",
    utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
});

$("form").submit(function() {
    var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
    $("input[name='phone_number[full]'").val(full_number);
    alert(full_number)

});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script> -->


<style>
.success {
    background-color: #9fd2a1;
    padding: 5px 10px;
    color: #326b07;
    text-align: center;
    border-radius: 3px;
    font-size: 14px;
    margin-top: 10px;
}
</style>
<section class="contact">
    <div class="container contact_container">
        <aside class="contact_aside">
            <div class="aside_image">
                <img src="../image/contact/contactUs.png" alt="not found">
            </div>
            <h2>Contact Us</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto sunt aut earum quasi ab odit fuga
                assumenda rem iure reprehenderit obcaecati, eaque repellat sed et. </p>
            <ul class="contact_details">
                <li>
                    <i class="uil uil-phone-times"></i>
                    <h5>+251941413132</h5>
                </li>
                <li>
                    <i class="uil uil-envelop"></i>
                    <h5>info@azaelprinting.com</h5>
                </li>
                <li>
                    <i class="uil uil-location-point"></i>
                    <h5>Addis Ababa, Ethiopia</h5>
                </li>
            </ul>
            <ul class="contact_socialmds">
                <li> <a href="https://facebook.com"> <i class="uil uil-facebook-f"></i> </a> </li>
                <li> <a href="https://instagram.com"> <i class="uil uil-instagram"></i> </a> </li>
                <li> <a href="https://twitter.com"> <i class="uil uil-twitter"></i> </a> </li>
                <li> <a href="https://linkedin.com"> <i class="uil uil-linkedin-alt"></i> </a> </li>
            </ul>
        </aside>
        <!-- phpp email Send -->
        <?php
        // if(!empty($_POST["submit"])) {
        //     $userName = $_POST["firstName"];
        //     $lastName = $_POST["lastName"];
        //     $userPhone = $_POST["userPhone"];

        //     $userEmail = $_POST["userEmailAddress"];
        //     $userMessage = $_POST["userMessage"];
        //     $toEmail = "yegnabetsew@gmail.com";
        
        //     $mailHeaders = "Name: " . $firstName .$lastName;
        //     "\r\n Email: ". $userEmail  . 
        //     "\r\n Phone: ". $userPhone  . 
        //     "\r\n Message: " . $userMessage . "\r\n";

        //     if(mail($toEmail, $firstName .$lastName, $mailHeaders)) {
        //         $message = "Your contact information is received successfully.";
        //     }
        // }
        ?>
        <div class="right-side">
            <!-- <div class="topic-text">Send us a message</div>
                            <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from
                                here. It's my pleasure to help you.</p> -->
            <form method="post" name="contact_form">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Name" title="Please filout your name here.." required>
                    <input type="email" name="email" placeholder="Email" title="Please filout your email here.."
                        required>
                </div>
                <div class="msg">
                    <br>
                    <input type="text" name="subject" placeholder="Subject..." title="Please filout a subject here.."
                        required>
                    <textarea name="message" placeholder="Message" rows="7" cols="20"
                        title="Please leave your message here.." required></textarea>

                </div>
                <div class="send">
                    <?php if (empty($msg)) { ?>
                    <!-- <form method="post" enctype="multipart/form-data"> -->
                    <input class="fileChoose" type="hidden" name="MAX_FILE_SIZE" value="100000">
                    <!-- Select one or more files -->
                    <input class="fileChoose" name="userfile[]" type="file" multiple="multiple"
                        title="If you want, attch your file/s here...">
                    <!-- <input class="fileChoose" type="submit" value="Send Files"> -->
                    <!-- </form> -->
                    <?php } else {
                                            echo htmlspecialchars($msg);
                                        } ?>

                    <button type="submit" name="submit" class="btn btn-primary" id="btn"
                        title="If you finished, just click send button."> Submit</button>
                </div>
                <div>
                    <label for="info">Your Submission Status: <?php echo $alert; ?> </label>
                </div>
                <!-- <p>
                    <label for="to">To: </label>
                    <input type="text" name="to" placeholder="To.." >
                </p>
                <p>
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" placeholder="Subject..." >
                </p>
                <p>
                    <label for="name">Message</label>
                    <input type="text" name="message" placeholder="Message" >
                </p>
                <button name="submit" name='submit' >Send</button>
                -->
            </form>

        </div>
        <!-- php -->
        <!-- <form method="post" class="contact_form"> -->
        <!-- <h6 class="error">* required field</h6> -->
        <!-- <div class="form_name">
                <input type="text" name="firstName" placeholder="Your First Name" required>
                <input type="text" name="lastName" placeholder="Your Last Name" required>
            </div> -->
        <!-- <div class="form_name"> -->
        <!-- <input name="userPhone" type="" id="phone" name="userPhone" placeholder="Your Phone number" requiredd>
            <script>
                var input = document.querySelector("#phone");
                window.intlTelInput(input, {
                    separateDialCode: true,
                    excludeCountries: ["in", "il"],
                    preferredCountries: ["ru", "jp", "pk", "no"]
                });
            </script> -->
        <!-- <input type="number" name="userPhone" placeholder="Your Phone number " required>
            
            </div> -->
        <!-- <input type="email" name="userEmailAddress" placeholder="Your Email Address">
            <textarea name="userMessage" id="" cols="30" rows="10" placeholder="Please Type Your Message Here ..."
                required></textarea>
            <input type="submit" name="send" class="btn btn-primary" value="Submit" > -->
        <!-- <div class="form_name">
                Please Select Your Gender:
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?>
                    value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>
                    value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>
                    value="other">Other
                <h6 class="error">* <?php echo $genderErr;?></h6>
            </div> -->
        <!-- <?php if (! empty($message)) {?>
            <div class='success'>
                <strong><?php echo $message; ?> </strong>
            </div>
            <?php } ?>
        </form>
    </div> -->
</section>

<?php
include("../inclued/efooter.php");
?>