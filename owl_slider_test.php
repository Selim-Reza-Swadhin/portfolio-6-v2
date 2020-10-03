<!--Start_Testimonial_Section-->
<section id="testimonial" class="testimonials-section section-padding">
    <div class="container" style="background: #f1b0b7;">
        <!-- Section_header -->
        <div class="section-header text-center">
            <h2>students feedback</h2>
        </div><!--End_Section_header-->


        <div class="owl-carousel owl-theme">
            <?php
            $query = "SELECT * FROM student_feedback order by id desc";
            $slider = mysqli_query($conn, $query);

            if ($slider) {
                while ($result = mysqli_fetch_assoc($slider)) { ?>

                    <div class="item mb-5">
                        <div class="testi-main">

                            <div class="testi-item">
                                <p style="text-align: justify;">
                                    <i class="fas fa-quote-left"></i>
                                    <?= $result['para']; ?>
                                    <i class="fas fa-quote-right"></i>
                                </p>
                            </div>


                            <div class="media mt-5">
                                <img style="border-radius: 50%;" class="align-self-end mr-3" src="assets/images/<?= $result['image']; ?>"
                                     alt="testi-img">
                            </div>
                            <div class="media-body">
                                <h5 style="color: #fff;"><?= $result['name']; ?></h5>
                                <p style="color: #0c5460;"><?= ucwords($result['title']); ?></p>
                            </div>

                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
    </div>
</section>
<!-- End_Testimonial_Section-->
