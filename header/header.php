


<!--Start_body_and_navbar_scroll_spy-->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<!--End_navbar_scroll_spy-->


<!--Start_fakeLoader-->
<div id="fakeLoader"></div>
<!--End_fakeLoader-->

<header id="main-manu">
    <div class="container-fluid">
        <!--Start_Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-3">
            <!--Start_Menu_Logo-->
            <a class="navbar-brand" href="index.php">
                <?php
                $query = "SELECT * FROM logo WHERE id ='1'";
                $logo = mysqli_query($conn, $query);

                if ($logo) {
                    while ($result = $logo->fetch_assoc()) {
                        ?>
                        <img src="assets/images/<?= $result['logo']; ?>" alt="logo-img"/>
                    <?php }
                } ?>
            </a><!--End_Menu_Logo-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active px-3">
                        <a class="nav-link" href="#hero-section">Home</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#service">service</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#video-course">course</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#testimonial">testimonial</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#contact">contact</a>
                    </li>
                </ul>
            </div>
        </nav><!--End_Navbar-->

    </div><!--End_container-->

</header>
