<?php
$conn = mysqli_connect('localhost', 'root', '', 'portfolio-6');
require_once './header_link.php';
require_once './header/header.php';

function formatDate($date){
    	return date('F j, Y, g:i a', strtotime($date));
    }

if (!isset($_GET['id']) || $_GET['id'] == NULL){
    header("Location:404.php");
}else{
    $id = $_GET['id'];
}
?>

<!-- Start_About_Section -->
<section id="about" class="about-section section-padding" style="background: #3C3A3A;">
    <div class="container">
        <!-- Section_header -->
        <div class="section-header text-center">
            <h2 style="color: #fff;">About us</h2>

        </div><!--End_Section_header-->

        <div class="row">
            <?php
            $query = "SELECT * FROM about_us where id=$id";
            $about_us = mysqli_query($conn, $query);

            if ($about_us) {
                while ($resultt = mysqli_fetch_assoc($about_us)) { ?>
                    <!--About_img-->
                    <div class="col-md-6 col-12">

                        <div class="about-img">
                            <img src="assets/images/<?= $resultt['image'];?>" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="">
                        <!--About_Content-->
                        <div class="about-content">
                            <h3 style="color: #fff;"><?= $resultt['title'];?></h3>
                            <p style="color: #fff;"><?= formatDate($resultt['time']); ?></p>
                            <!--About_data-->
                            <div class="about-data">
                                <p class="mb-5" style="color: #fff;"><?= $resultt['body'];?></p>
                                <div class="more-button">
                                    <a href="index.php?id=<?= $resultt['id'];?>"><i class="fas fa-angle-double-left mr-2"></i>Back</a>
                                </div>

                            </div><!--End_About_data-->

                        </div><!--End_About_Content-->

                    </div>
                <?php }} ?>
        </div><!--End_row-->
    </div><!--End_Container-->

</section><!-- End_About_Section -->

<?php
require_once './footr_link.php';
require_once './footer/footer.php';
?>
