<?php
// ===================================
// PHP Variables - customize these!
// ===================================
$ceo_photo_url = "assets/images/ceo-photo.png"; // Path to CEO's photo
$ceo_name = "Harsh Neekhra";
$ceo_title = "Co-Founder & CEO";
$ceo_quote = "True innovation is not a product of mere capability or hard work; it is born from the convergence of capability, hard work, and a vision that becomes an obsession.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/fav.png">
    <title>Contact us - Novorbis Itus Pvt Ltd | Pune, Maharashtra</title>
    <meta name="robots" content="noindex, nofollow">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/fontawesome-6.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/unicons.css">
    <link rel="stylesheet" href="assets/css/plugins/metismenu.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- using navbar for other using navbar1 why? -->
    <?php include "navbar.php" ?>

    <div class="rts-bread-crumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="con-tent-main">
                        <div class="wrapper">

                            <div class="slug skew-up">
                                <a href="index.php" class="text-dark">HOME /</a>
                                <a class="active text-dark" href="index.php">ABOUT US</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- our story -->
    <div class="rts-installation section__bg rts-section-gap bg-light-white">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-5">
                    <div class="section__title">
                        <span class="skew-up" style="border-bottom:0px">Our Story</span>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row g-5">
                <div class="col-md-12">
                    Founded in 2019, with a clear goal — to build innovative technologies that reduce harmful emissions.
                    Built the world’s first filter-less air purification system — a breakthrough in clean air
                    technology. Upgraded our filter-less tech to cut down multiple pollutants from diesel gensets and
                    other sources. In 2021, Tested first prototype of filter-less RECD at ARAI, reducing over 70% of
                    harmful emissions.
                    In 2022, we successfully piloted RECD (Retrofit Emission Control Devices) in real-world conditions.
                    Began the operations in Pune and scaled up manufacturing with a strong engineering team. In 2024, we
                    received Type Approval Certificates from ARAI for our RECDs. Today, Novorbis is a one-stop solution
                    for carbon reduction technologies, working towards a cleaner and healthier tomorrow.
                    <!-- <p>In 2019, Novorbis Itus Pvt Ltd was founded with a clear mission to solve India’s toughest air
                        pollution problems using science, innovation, and engineering. What began as a bold idea quickly
                        turned into action. Just months after inception, Novorbis developed the world’s first
                        filter-less air purifier, marking a major breakthrough in emission control technology. <br>
                        In 2021, their solution earned ARAI certification for reducing over 70% of harmful emissions,
                        proving both performance and reliability. The year 2022 saw successful installations of RECDs
                        (Retrofitted Emission Control Devices), setting new benchmarks in real-world impact. <br> In
                        2023, Novorbis expanded its footprint, moving operations to Pune and scaling its production
                        capabilities with a skilled team of engineers and innovators.</p>
                    <p>
                        By 2024, Novorbis reached new heights:
                    <ul>
                        <li>Partnered with Greaves Cotton, a respected industry leader</li>
                        <li>Received Type Approval from ARAI</li>
                        <li>Expanded to a 13,000 sq. ft. manufacturing facility</li>
                    </ul>
                    </p>
                    <p>Today, Novorbis continues its mission with a growing portfolio of emission control technologies
                        committed to creating a cleaner, healthier future for all.</p>
                </div> -->
                    <!-- Need to be done by some designers -->
                </div>
                
                <div class="ceo-quote-container">
    <img src="<?php echo htmlspecialchars($ceo_photo_url); ?>" alt="CEO Photo" class="ceo-photo">
    <div class="ceo-quote-text">
        <div class="ceo-quote">
            <span style="color:#258152;font-size:1.4em;">&#10077;</span>
            <?php echo htmlspecialchars($ceo_quote); ?>
        </div>
        <div class="ceo-name"><?php echo htmlspecialchars($ceo_name); ?></div>
        <div class="ceo-title"><?php echo htmlspecialchars($ceo_title); ?></div>
    </div>
</div>
            </div>
        </div>

        <div class="rts-about rts-section-gap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="rts-about-left-image-area">
                            <div class="thumbnail" data-aos="zoom-in">
                                <img src="assets/images/about/20.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt_md--30 mt_sm--40">
                        <!-- about nrighht content area start -->
                        <div class="about-right-content-area-solar-energy">
                            <div class="section__title">
                                <span class="skew-up">About Company</span>
                                <h2 class="title skew-up">India’s First Truly Filter-less Type Approved Device with
                                    Lowest
                                    Back Pressure</h2>
                            </div>
                            <!-- tab area start about -->
                            <ul class="nav custom-nav-soalr-about nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">About Us</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Vision & Mission</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Commitment</button>
                                </li>
                            </ul>

                            <!-- nav content start -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <!-- single nav content start -->
                                    <div class="single-about-content-solar">
                                        <p class="">
                                            Novorbis Itus Pvt. Ltd. is a leading specialist in air
                                            purification and emission control solutions. We're
                                            dedicated to creating a cleaner and healthier planet
                                            through sustainable innovation.
                                            <br> We're proud to be India's only manufacturer of
                                            Retrofit Emission Control Devices (RECD),
                                            a testament to our commitment to cutting-edge
                                            technology. Our RECDs offer a range of benefits,
                                            including enhanced air quality and reduced
                                            emissions.
                                        </p>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <!-- single nav content start -->
                                    <div class="single-about-content-solar">
                                        <b>Vission</b>
                                        <p class="disc">
                                            To lead the transition
                                            to cleaner air and a
                                            sustainable future
                                            for all.
                                        </p>
                                        <b>Mission</b>
                                        <p>From diesel generators to crematoriums, we target the most neglected yet
                                            impactful sources of pollution, eliminating them right at the source.</p>
                                    </div>
                                    <!-- single nav content end -->
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <!-- single nav content start -->
                                    <div class="single-about-content-solar">
                                        <p class="disc">
                                            We are committed to aligning our work with the
                                            Bharat’s Zero Carbon Policy and global net-zero goals,
                                            contributing to a greener and more sustainable future.
                                        </p>
                                        <p class="disc">Advanced Filtration & Purification Technologies That Go Beyond
                                            Compliance — Because Clean Air Can’t Wait </p>
                                    </div>
                                    <!-- single nav content end -->
                                </div>
                            </div>
                            <!-- nav content end -->
                            <!-- tab area start about end -->

                        </div>
                        <!-- about nrighht content area end -->
                    </div>
                </div>
            </div>
        </div>

        <div class="rts-team-area rts-section-gapBottom reveal bg-light pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title text-center">
                            <span class="skew-up">Our Expert Team</span>
                            <h2 class="title skew-up">
                                Architects of Innovation
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row mt--30 g-24">
                    <div class="col-lg-3">
                        <div class="solar-energy-team" data-aos="fade-up" data-aos-duration="300">
                            <div class="thumbnail">
                                <img src="assets/images/team/profile.jpg" alt="team">
                                <div class="share-team-h1">
                                    <a href="#" class="share-icon">
                                        <i class="fa-regular fa-share-nodes"></i>
                                    </a>
                                    <ul class="share-nav">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">Harsh Neekhra</h5>
                                </a>
                                <span>Founder & CEO, <br>Novorbis ITUS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="solar-energy-team" data-aos="fade-up" data-aos-duration="600">
                            <div class="thumbnail">
                                <img src="assets/images/team/profile.jpg" alt="team">
                                <div class="share-team-h1">
                                    <a href="#" class="share-icon">
                                        <i class="fa-regular fa-share-nodes"></i>
                                    </a>
                                    <ul class="share-nav">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">Gagan Tripathi</h5>
                                </a>
                                <span>Chief Technology Officer, <br>Novorbis ITUS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="solar-energy-team" data-aos="fade-up" data-aos-duration="900">
                            <div class="thumbnail">
                                <img src="assets/images/team/profile.jpg" alt="team">
                                <div class="share-team-h1">
                                    <a href="#" class="share-icon">
                                        <i class="fa-regular fa-share-nodes"></i>
                                    </a>
                                    <ul class="share-nav">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">Divyank Gupta</h5>
                                </a>
                                <span>Director, Sales <br>Novorbis ITUS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="solar-energy-team" data-aos="fade-up" data-aos-duration="1200">
                            <div class="thumbnail">
                                <img src="assets/images/team/profile.jpg" alt="team">
                                <div class="share-team-h1">
                                    <a href="#" class="share-icon">
                                        <i class="fa-regular fa-share-nodes"></i>
                                    </a>
                                    <ul class="share-nav">
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inner-content">
                                <a href="#">
                                    <h5 class="title">Naman</h5>
                                </a>
                                <span>Other <br> Novorbis ITUS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php" ?>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="assets/js/plugins/jquery.min.js"></script>
        <script src="assets/js/vendor/jqueryui.js"></script>
        <script src="assets/js/plugins/counter-up.js"></script>
        <script src="assets/js/plugins/swiper.js"></script>
        <script src="assets/js/plugins/metismenu.js"></script>
        <script src="assets/js/vendor/waypoint.js"></script>
        <script src="assets/js/vendor/waw.js"></script>
        <script src="assets/js/plugins/gsap.min.js"></script>
        <script src="assets/js/plugins/scrolltigger.js"></script>
        <script src="assets/js/vendor/split-text.js"></script>
        <script src="assets/js/vendor/contact.form.js"></script>
        <script src="assets/js/vendor/split-type.js"></script>
        <script src="assets/js/plugins/jquery-timepicker.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/vendor/magnific-popup.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>