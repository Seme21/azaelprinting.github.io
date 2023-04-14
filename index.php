<?php
include("./inclued/header.php");
include("./src/sendmail.php");
?>


<div class="container-fluid">
    <nav>
        <div class="container nav_container">
            <a href="index.php">
                <h4>
                    <a href="index.php">
                        <div class="logoimageholder">
                            <img id="logo_image" src="./image/index/logoindx.png" alt="Not found" srcset="">
                        </div>
                    </a>
                </h4>
            </a>

            <ul class="nav_menu">
                <li class="active"><a href="index.php" title=" to go home page"> Home </a></li>
                <li><a href="./src/about.php" title="detailes about us"> About </a></li>
                <li><a href="./src/service.php" title="available service provide by us"> Service </a></li>
                <li><a href="./src/contact.php" title="detailes to contact us"> ContactUs </a>
                </li>

            </ul>
            <div class="ham-btn">
                <button id="open-menu-btn" title="click on to open Menu"><i class="uil uil-bars"></i> </button>
                <button id="close-menu-btn" title="click on to close Menu"><i class="uil uil-multiply"></i>
                </button>
            </div>

        </div>
    </nav>
    <!-- </div> -->
    <!-- <div class="container-fluid"> -->
    <!-- ================================FIRST SECTION ======================= -->
    <!-- ========================== Footer ===================== -->
    <div class="home_minor_css" title="You welcom to Azael Printing!  ">
        <div class="container home_container">
            <div class="homeBackground">

                <img class="bgImg" src="./image/index/index.png" alt="Erorr 404: image not found ">


                <!-- <img   -->
                <div class="fgPra">
                    <h1>Printing Service In <br>Addis Ababa</h1>
                    <p>
                        Azael is a printing business that offers high-quality products and services.
                        We offer custom printing, design, and delivery, so you can get the perfect
                        product for any occasion. We use the latest technology to ensure the
                        highest quality prints and fast turnaround times. Get in touch today to
                        see how we can help you!
                    </p>
                </div>
                <p><a href="./src/contact.php " class="btn contact-us_btn" title="click on to contact us">Contact Us</strong></a> </p>

            </div>
        </div>
    </div>
    <!-- ================================END OF #FIRST SECTION ======================= -->





    <!-- ================================SECOND SECTION ======================= -->
    <section class="services">
        <h1>Services</h1>
        <div class="container services_container" title="available services">
            <article class="service">
                <div class="service_image" title="Label and Stiker">
                    <a href="./dist/contents/labsticker.php"> <img src="./image/index/index-2.jpg" alt=""></a>
                </div>
                <div class="service_info">
                    <h1>Label And Sticker Printing</h1>
                    <p style="color: #2d84e7 !important ;">A Service thatallows customers to request and
                        print docmuments online </p>
                    <!-- <a href="./dist/contents/labsticker.php" class="btn btn-primary">Detailes..</a>                     -->
                </div>
            </article>

            <article class="service">
                <div class="service_image" title="Branding Printing">
                    <a href="./dist/contents/branding.php"> <img src="./image/index/index3.png" alt=""></a>
                </div>
                <div class="service_info">
                    <h1>Branding Printing</h1>
                    <p style="color: #2d84e7 !important ;">A Service that allows customers to order
                        personalized
                        documents that help them to brand themseleves
                    </p>
                    <!-- <a href="./dist/contents/branding.php" class="btn btn-primary">Detailes..</a>  -->
                </div>
            </article>

            <article class="service">
                <div class="service_image" title="Logo Designing">
                    <a href="./dist/contents/logo.php"> <img id="image" src="./image/index/index4.png" alt="not found"></a>
                </div>
                <div class="service_info">
                    <h1>Logo Designing</h1>

                    <p style="color: #2d84e7 !important ;">A Service that allows customers to have a
                        custom made logoswith best graphics designers</p>
                    <!-- <a href="./dist/contents/logo.php" class="btn btn-primary">Detailes..</a>                      -->
                </div>
            </article>
        </div>
    </section>
    <!-- ================================END OF #SECOND SECTION ======================= -->
    <!-- ================================THIRD SECTION ======================= -->

    <div class="testimonials" title="Customer Testimonial">
        <!-- <h1>Testimonial</h1> -->
        <div class="container testimonials-container">
            <div class="testimonial">
                <div class="testimonialImageHoler">
                    <img class="imgT" src="./image/index/index5.png" alt="Thsi is picture five ***********">
                </div>
                <div class="testimonialtextbodyHolder">
                    <blockquote>
                        <q>
                            Azael in Addis Ababa has been an absolute dream to work with.
                            They have been incredibly helpful, quick and professional. I would highly
                            recommend them for all your digital printing
                            needs.
                        </q>
                        <br>


                    </blockquote>
                    <div class="nameoftest">
                        <p>
                            - Girma Getachew
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- ================================END OF #THIRD SECTION ======================= -->




    <!-- ================================FOURTH SECTION ======================= -->
    <div class="contactus" title="Contact Us Form" id="contactus">
        <!-- <h1>Contact Us </h1> -->
        <!-- <div class="contactus_right"> -->
        <div class="container content contactus_container">
            <div class="azaelPrint contact_left">
                <h1>Azael Digital Printing Contact Form</h1>
                <p>Fill Out This Form To Get In Touch With The Team At Azael Digital Printing For All Your
                    Printing
                    Needs.
                </p>
            </div>

            <div class="right-side contact_right">
                <!-- <div class="topic-text">Send us a message</div>
                            <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from
                                here. It's my pleasure to help you.</p> -->
                <form method="post" name="contact_form" enctype="multipart/form-data">
                    <div class="inputs">
                        <input type="text" name="name" placeholder="Name" title="Please filout your name here.." required>
                        <input type="email" name="email" placeholder="Email" title="Please filout your email here.." required>
                    </div>
                    <div class="msg">
                        <br>
                        <input type="text" name="subject" placeholder="Subject..." title="Please filout a subject here.." required>
                        <textarea name="message" placeholder="Message" rows="7" cols="20" title="Please leave your message here.." required></textarea>

                    </div>
                    <div class="send">
                        <?php if (empty($msg)) { ?>
                            <!-- <form method="post" enctype="multipart/form-data"> -->
                            <input class="fileChoose" type="hidden" name="MAX_FILE_SIZE" value="100000">
                            <!-- Select one or more files -->
                            <input class="fileChoose" name="userfile[]" type="file" multiple="multiple" title="If you want, attch your file/s here...">
                            <!-- <input class="fileChoose" type="submit" value="Send Files"> -->
                            <!-- </form> -->
                        <?php } else {
                            echo htmlspecialchars($msg);
                        } ?>


                        <?php

                        ?>
                        <div class="submitbuttonHolder">
                        <button type="submit" name="submit" class="btn btn-primary submitbtn" id="btn" title="If you finished, just click send button."> Submit</button>
                    
                        </div>
                        </div>
                    <div>
                        <label class="infostatus" for="info">Your Submission Status: <?php echo $alert; ?> </label>

                    </div>


                </form>

            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- ================================END OF #FOURTH SECTION ======================= -->

    <!-- ================================ FIVTH SECTION ======================= -->
    <div class="aboutus" title="About Us">

        <div class="about_container">
            <div class="container aboutus_container">

                <img class="abtImg" src="./image/index/index6.png" alt="">
                <div class="aboutus_htry">
                    <h1>About us</h1>
                    <p>
                        <!-- <marquee behavior="scroll" direction="up"> -->
                        Hello everyone! I'm the founder of Azael, a
                        digital
                        printing business based here in the city. We
                        specialize in printing business cards, flyers, brochures, and other promotional
                        materials. We
                        also offer customers to have a satisfactory experience make sure your promotional
                        materials look
                        exactly the way you At Azael, we use the latest
                        technology and highest-quality materials to make sure that all of our products stand
                        out. We
                        also take pride in providing excellent customer
                        service, so that you always have a positive experience
                        with us. We strive to make sure that your project comes out exactly how you
                        envisioned it. So if
                        you're looking for a reliable printing service,
                        look no further than Azael!
                        <!-- </marquee> -->
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================END OF #FIVTH SECTION ======================= -->
    <!-- </div> -->

    <div class="modalContainer displayManagerOfModal">
        <div class="modalContentContainer">

            <div class="modalBody_1 modalToggler">
                <div class="modalcloseButtonHolder">
                    <button class="modalCloseButton ">X</button>
                </div>


                <img class="bgImagemodal" src="./image/index/index5.png" alt="Thsi is picture five ***********">


                <div class="gratitudemessageHolder">
                    <p>
                        Thank you for reaching to us we will reply to this email as soon as possible! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, vero est nihil modi voluptatem
                    </p>
                </div>


            </div>

        </div>

    </div>


    <?php
    include("footer.php");
    ?>

    <script>
        document.querySelector('.submitbtn').addEventListener('click', () => {

            document.querySelector('.modalContainer').classList.remove('displayManagerOfModal');
        });

        document.querySelector('.modalCloseButton').addEventListener('click', () => {
            document.querySelector('.modalContainer').classList.add('displayManagerOfModal');
        });
    </script>


    <script type="text/javascript" src="./dist/script/main.js"></script>