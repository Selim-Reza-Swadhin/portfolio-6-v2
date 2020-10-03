<?php
require_once './header_link.php';
$conn = mysqli_connect('localhost', 'root', '', 'portfolio-6');

function textShorten($text, $limit = 700)
{
    $text = $text . " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text . ".....";
    return $text;
}

?>


<!--Start_Main_Menu-->
<?php require_once 'header/header.php'; ?>
<!--End_Main_Menu-->

<!-- Start_Hero_section -->

<section id="hero-section" class="hero-banner">
    <div class="container text-center">
        <!-- Start_user_box -->
        <div class="user-box">
            <h1>Online <span>Combo </span> Course</h1>
            <h2>Education Is Our First priority</h2>
        </div><!-- End_user_box -->

        <div class="banner-button mt-5">
            <a href="#">join us</a>
        </div>

    </div><!--End_Container-->
</section><!--End_Hero_Section-->

<!-- Start_About_Section -->
<section id="about" class="about-section section-padding">
    <div class="container" style="background-color:#333; padding: 5px;">
        <!-- Section_header -->
        <div class="section-header text-center">
            <h2 style="color: #fff;">About us</h2>

        </div><!--End_Section_header-->

        <div class="row">
            <?php
            $query = "SELECT * FROM about_us";
            $about_us = mysqli_query($conn, $query);

            if ($about_us) {
                while ($resultt = mysqli_fetch_assoc($about_us)) { ?>
                    <!--About_img-->
                    <div class="col-md-6 col-12">

                        <div class="about-img">
                            <img src="assets/images/<?= $resultt['image']; ?>" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <!--About_Content-->
                        <div class="about-content">
                            <h3 style="color: #fff;"><?= $resultt['title']; ?></h3>
                            <!--About_data-->
                            <div class="about-data">
                                <p class="mb-5" style="color: #fff;">
                                    <?= textShorten($resultt['body'], 625); ?>
                                </p>
                                <div class="more-button">
                                    <a href="post.php?id=<?= $resultt['id']; ?>">Read More<i
                                                class="fas fa-angle-double-right ml-2"></i></a>
                                </div>

                            </div><!--End_About_data-->
                            <hr style="background-color: #9fcdff;">
                        </div><!--End_About_Content-->

                    </div>
                <?php }
            } ?>
        </div><!--End_row-->
    </div><!--End_Container-->

</section><!-- End_About_Section -->


<!-- Start_Service_Section -->
<section id="service" class=" service-section section-padding">
    <div class="container">
        <!-- Section_header -->
        <div class="section-header text-center">
            <h2>our services</h2>

        </div><!--End_Section_header-->

        <div class="row mt-5">
            <div class="col-lg-4 col-sm-6 col-12">
                <!-- service_item -->
                <div class="service-item text-center">
                    <!--service_icon-->
                    <div class="service-icon">
                        <i class="fab fa-wordpress"></i>
                    </div><!--End_service_icon-->
                    <!--service_data-->
                    <div class="service-data">
                        <h4>WORDPRESS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div><!--End_service_data-->
                </div><!--End_service_item-->
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <!-- service_item -->
                <div class="service-item text-center">
                    <!--service_icon-->
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div><!--End_service_icon-->
                    <!--service_data-->
                    <div class="service-data">
                        <h4>web design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div><!--End_service_data-->

                </div><!--End_service_item-->
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <!-- service_item -->
                <div class="service-item text-center">
                    <!--service_icon-->
                    <div class="service-icon">
                        <i class="fas fa-pencil-alt"></i>
                    </div><!--End_service_icon-->
                    <!--service_data-->
                    <div class="service-data">
                        <h4>graphics design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div><!--End_service_data-->

                </div><!--End_service_item-->
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <!-- service_item -->
                <div class="service-item text-center">
                    <!--service_icon-->
                    <div class="service-icon">
                        <i class="fab fa-js-square"></i>
                    </div><!--End_service_icon-->
                    <!--service_data-->
                    <div class="service-data">
                        <h4>java script</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div><!--End_service_data-->

                </div><!--End_service_item-->
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <!-- service_item -->
                <div class="service-item text-center">
                    <!--service_icon-->
                    <div class="service-icon">
                        <i class="fab fa-php"></i>
                    </div><!--End_service_icon-->
                    <!--service_data-->
                    <div class="service-data">
                        <h4>php</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div><!--End_service_data-->

                </div><!--End_service_item-->
            </div>

            <div class="col-lg-4 col-sm-6 col-12">
                <!-- service_item -->
                <div class="service-item text-center">
                    <!--service_icon-->
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div><!--End_service_icon-->
                    <!--service_data-->
                    <div class="service-data">
                        <h4>video editing</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt.</p>
                    </div><!--End_service_data-->

                </div><!--End_service_item-->
            </div>
        </div><!--End_row-->

    </div><!--End_Container-->

</section><!-- End_Service_Section -->

<!-- Start_video_Section -->
<section id="video-course" class="video text-center ">
    <div class="container bg-banner">
        <div class="row">
            <div class="col-md-12">
                <div class="video-data">
                    <h2 class="">
                        see course details</h2>
                    <a href="https://www.youtube.com/watch?v=dpkHbnMtTTw" class="you-vid"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- End_video_Section -->


<!--Start_Testimonial_Section-->
<?php require_once 'owl_slider_test.php'; ?>
<!-- End_Testimonial_Section-->


<!-- Start_Contact_Section -->
<section id="contact" class="contact-section section-padding">
    <div class="container" style="background: #9fcdff;border-radius: 5px; padding:5px;">
        <!-- Section_header -->
        <div class="section-header text-center">
            <h2>GET IN TOUCH</h2>
        </div><!--End_Section_header-->

        <div class="row mt-5">
            <div class="col-lg-4 col-12 col-sm-6">
                <div class="contact-item">
                    <div class="contact-icon  text-center">
                        <i class="fa fa-phone"></i>
                    </div>

                    <div class="contact-text">
                        <h5>Phone</h5>
                        <h6>+8801724-063642</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 col-sm-6">
                <div class="contact-item">
                    <div class="contact-icon  text-center">
                        <i class="fas fa-location-arrow"></i>
                    </div>

                    <div class="contact-text">
                        <h5>Location</h5>
                        <h6>New Elephant Rood Dhaka.
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 col-sm-6">
                <div class="contact-item">
                    <div class="contact-icon  text-center">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="contact-text">
                        <h5>Gmail</h5>
                        <h6>selimrezaswadhin@gmail.com</h6>
                    </div>
                </div>
            </div>
        </div>

        <!--        Message php code start-->
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'portfolio-6');

        function validation($data)
        {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = validation($_POST['name']);
            $email = validation($_POST['email']);
            $body = validation($_POST['body']);

            $name = mysqli_real_escape_string($conn, $name);
            $email = mysqli_real_escape_string($conn, $email);
            $body = mysqli_real_escape_string($conn, $body);

            $error = "";

            if (empty($name)) {

                $error = "First name must not be empty";

            } elseif (empty($email)) {

                $error = "Email field must not be empty";

            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                $error = "Invalid email address";

            } elseif (empty($body)) {
                $error = "Message field must not be empty";

            } else {

                $query = "SELECT * FROM messages WHERE email = '$email'";
                $email_check = mysqli_query($conn, $query);
                //print_r($email_check);
                //var_dump($email_check);

                if (mysqli_num_rows($email_check) == 1) {

                    $error = "Welcome ".$name."."." Your Email already exists.";

                } else {
                    $query = "INSERT INTO messages(name, email, body) VALUES ('$name', '$email', '$body')";
                    $inserted_rows = mysqli_query($conn, $query);
                    if ($inserted_rows) {
                        $msg = "Welcome ".$name."."." Your Message Sent Successfully.";
                    } else {
                        $msg = "Welcome ".$name."."." Your Message Sent Not Successfully.";
                    }
                }
            }

        }


        if (isset($error)) {
            echo "<span style='color:red;'>$error</span>";
        }

        if (isset($msg)) {
            echo "<span style='color:green'>$msg</span>";
        }
        ?>
        <!--        Message php code end-->

        <form action="" method="post">
            <div class="row mt-5 pt-5">

                <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control mb-4" id="inputName" placeholder="Your Name">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" class="form-control mb-4" placeholder="Your E-mail">
                </div>
                <div class="col-md-12">
                        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="5"
                                  placeholder="Your Message"></textarea>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <button type="submit" class="btn mt-5">SEND MESSAGE</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
</section>
<!-- End_Contact_Section -->

<!--My form-->

<!--<style>-->
<!--    .mystyle {-->
<!--        border: 1px solid green;-->
<!--        margin: 0px 100px 10px;-->
<!--        padding: 10px;-->
<!--        border-radius: 7px;-->
<!--        background-image: url("assets/images/cover_bg_1.jpg");-->
<!--    }-->
<!--</style>-->
<!---->
<!--<div class="mystyle">-->
<!--    <form action="mystyle.php" class="form-horizontal" method="post">-->
<!--        <div class="form-group form-group-lg">-->
<!--            <label class="col-sm-3 control-label" for="inputLarge">Name :</label>-->
<!--            <div class="col-md-6">-->
<!--                <input type="text" name="name" class="form-control" id="inputLarge" placeholder="Enter Your Name">-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label class="col-sm-3 control-label" for="inputDefault">Email :</label>-->
<!--            <div class="col-md-6">-->
<!--                <input type="email" name="email" class="form-control" id="inputDefault" placeholder="Enter Your Email">-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="form-group">-->
<!--            <label class="col-sm-3 control-label" for="inputMessage">Message :</label>-->
<!--            <div class="col-md-12">-->
<!--                <textarea class="form-control" name="body" id="inputMessage" rows="5"-->
<!--                          placeholder="Write your mind of talk"></textarea>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="row text-center">-->
<!--            <div class="col-md-12">-->
<!--                <button type="submit" name="submit" class="btn mt-5">SEND MESSAGE</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </form>-->
<!--</div>-->

<!-- Start_Footer_Section -->
<?php require_once 'footer/footer.php'; ?>


<!-- Optional JavaScript -->

<?php require_once './footr_link.php'; ?>
