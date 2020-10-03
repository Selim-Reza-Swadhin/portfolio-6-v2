<footer class="footer py-5">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <!--Footer_Icons-->
                <div class="social-icons text-center  mb-3">
                    <?php
                    $query = "SELECT * FROM logo WHERE id ='1'";
                    $logo = mysqli_query($conn, $query);
                    if ($logo) {
                        while ($result = $logo->fetch_assoc()) {
                            ?>
                            <img src="assets/images/<?= $result['logo']; ?>" alt="logo-img" class="mb-3"/>
                        <?php }} ?>
                    <p>Follow Me</p>

                    <?php
                    $query = "SELECT * FROM social WHERE id ='1'";
                    $social_media = mysqli_query($conn, $query);
                    if ($social_media) {
                        while ($result = $social_media->fetch_assoc()) {
                            ?>

                            <a href="<?= $result['fb']; ?>" target="_blank"><i class="fab fa-facebook-f facebook"></i></a>
                            <a href="<?= $result['ins']; ?>" target="_blank"><i class="fab fa-instagram instagram"></i></a>
                            <a href="<?= $result['tw']; ?>" target="_blank"><i class="fab fa-twitter twitter"></i></a>
                            <a href="<?= $result['ln']; ?>" target="_blank"><i class="fab fa-linkedin linkedin"></i></a>
                            <a href="<?= $result['gp']; ?>" target="_blank"><i class="fab fa-google-plus google-plus"></i></a>
                            <a href="<?= $result['pin']; ?>" target="_blank"><i class="fab fa-pinterest-p pinterest"></i></a>
                            <a href="<?= $result['gt']; ?>" target="_blank"><i class="fab fa-github-square github"></i></a>
                        <?php }
                    } ?>
                </div>
                <!--Footer_Text-->
                <div class="footer-text text-center">
                    <?php
                    $query = "SELECT * FROM footer WHERE id ='1'";
                    $footernote = mysqli_query($conn, $query);
                    if ($footernote) {
                        while ($fresult = $footernote->fetch_assoc()) {
                            ?>

                            <h4 style="color:#fff;">Copyright &copy; <?= date('Y'); ?> <?= $fresult['node']; ?><a
                                    href="https://selimrezaswadhin.com"> Selim Reza Swadhin</a></h4>
                        <?php }
                    } ?>
                </div>
            </div>

        </div>

    </div>
</footer>
<!-- End_Footer_Section -->


<!-- Start_Scrollup_Section -->
<div class="scrolltop">
    <a href="#" class="scrollup">
        <i class="fas fa-chevron-circle-up"></i>
    </a>
</div> <!-- End_Scrollup_Section -->
