<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Welcome - Infinitix.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="text-primary fw-bold m-0">Infinitix</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#about" class="nav-item nav-link active">About</a>
                <a href="#skill" class="nav-item nav-link">Skills</a>
                <a href="#service" class="nav-item nav-link">Services</a>
            </div>
            <a href="index.php" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h1 class="text-primary fw-bold m-0">Infinitix</h1>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#project" class="nav-item nav-link">Projects</a>
                <a href="#testimonial" class="nav-item nav-link">Testimonial</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
                <a href="#feedback" class="nav-item nav-link">Feedback</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <?php
                    require "connection.php";
                    $name_rs = Database::search("SELECT * FROM `admin`");
                    $name_data = $name_rs->fetch_assoc();
                    ?>
                    <h1 class="display-3 mb-3"><?php echo $name_data["fname"]; ?></h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="" class="btn btn-primary py-3 px-4 me-5">Download My CV</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="img/profile.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <?php
                    $p_rs = Database::search("SELECT * FROM `portfolio` WHERE `id` = '2'");
                    $seo_rs = Database::search("SELECT * FROM `seo_desc` WHERE `id` = '1'");
                    $p_num = $p_rs->num_rows;
                    $seo_num = $seo_rs->num_rows;

                    for ($x = 0; $x < $p_num; $x++) {
                        $p_data = $p_rs->fetch_assoc();
                        $seo_data = $seo_rs->fetch_assoc();
                    ?>
                        <div class="d-flex align-items-center mb-5">
                            <div class="years flex-shrink-0 text-center me-4">
                                <h1 class="display-1 mb-0"><?php echo $p_data["YearOf_Exp"]; ?></h1>
                                <h5 class="mb-0">Years</h5>
                            </div>
                            <h3 class="lh-base mb-0">of working experience as a web designer & developer</h3>
                        </div>
                        <p class="mb-4"><?php echo $seo_data["about_me"]; ?></p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Afordable Prices</p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>High Quality Product</p>
                        <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Watch CV for more</a>
                </div>
            <?php } ?>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-3 mb-4">
                    <div class="col-sm-6">
                        <img class="img-fluid rounded" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                    <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up"><?php echo $p_data["Satisfied_Customer"]; ?></h2>
                </div>
                <p class="mb-4"><?php echo $seo_data["clients"]; ?></p>
                <div class="d-flex align-items-center mb-3">
                    <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                    <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up"><?php echo $p_data["Succesful_projects"]; ?></h2>
                </div>
                <p class="mb-0"><?php echo $seo_data["project"]; ?></p>
            </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4"><?php echo $seo_data["skil_desc"]; ?></p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <?php
                        $sk_rs = Database::search("SELECT * FROM `skills`");
                        $sk_num = $sk_rs->num_rows;

                        for ($x = 0; $x < $sk_num; $x++) {
                            $sk_data = $sk_rs->fetch_assoc();
                        ?>
                            <div class="col-md-6">
                                <div class="skill mb-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-bold"><?php echo $sk_data["langauge"]; ?></h6>
                                        <h6 class="font-weight-bold"><?php echo $sk_data["percentage"]; ?>%</h6>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-<?php echo $sk_data['color']; ?>" role="progressbar" aria-valuenow="<?php echo $sk_data['percentage']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } ?>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <?php
                                    $exx_rs = Database::search("SELECT * FROM `exp`");
                                    $exx_num = $exx_rs->num_rows;

                                    for ($x = 0; $x < $exx_num; $x++) {
                                        $exx_data = $exx_rs->fetch_assoc();
                                    ?>
                                        <h4 class="text-primary"><?php echo $exx_data['position']; ?></h4>
                                        <hr class="text-dark my-1">
                                        <p class="text-dark mb-1"><?php echo $exx_data['year']; ?></p>
                                        <h6 class="mb-0 text-primary"><?php echo $exx_data['company_name']; ?></h6>
                                        <br>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <?php
                                    $edd_rs = Database::search("SELECT * FROM `edu`");
                                    $edd_num = $edd_rs->num_rows;

                                    for ($x = 0; $x < $edd_num; $x++) {
                                        $edd_data = $edd_rs->fetch_assoc();
                                    ?>
                                        <h4 class="text-primary"><?php echo $edd_data['qulification']; ?></h4>
                                        <hr class="text-dark my-1">
                                        <p class="text-dark mb-1"><?php echo $edd_data['year']; ?></p>
                                        <h6 class="mb-0 text-primary"><?php echo $edd_data['institute']; ?></h6>
                                        <br>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
                </div>
            </div>
            <div class="row g-4">
                <?php
                $ser_rs = Database::search("SELECT * FROM `service`");
                $ser_num = $ser_rs->num_rows;

                for ($x = 0; $x < $ser_num; $x++) {
                    $ser_data = $ser_rs->fetch_assoc();
                ?>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                            <div class="bg-icon flex-shrink-0 mb-3">
                                <i class="<?php echo $ser_data['image_icon']; ?>"></i>
                            </div>
                            <div class="ms-sm-4">
                                <h4 class="mb-3"><?php echo $ser_data['title']; ?></h4>
                                <h6 class="mb-3">Start from <span class="text-primary">LKR.<?php echo $ser_data['price']; ?></span></h6>
                                <span><?php echo $ser_data['description']; ?></span>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->
    <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Tutorial Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Tutorials</li>
                        <?php
                        $l_rs = Database::search("SELECT * FROM `tutorial_proj`");
                        $l_num = $l_rs->num_rows;

                        for ($x = 0; $x < $l_num; $x++) {
                            $l_data = $l_rs->fetch_assoc();
                        ?>
                            <li class="mx-3" data-filter=".<?php echo $l_data['id']; ?>"><?php echo $l_data['tutorial']; ?></li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <?php
                $yt_rs = Database::search("SELECT * FROM `images`");
                $yt_num = $yt_rs->num_rows;

                for ($x = 0; $x < $yt_num; $x++) {
                    $yt_data = $yt_rs->fetch_assoc();
                ?>
                    <div class="col-lg-4 col-md-6 portfolio-item <?php echo $yt_data['tutorial_proj_id']; ?>">
                        <div class="portfolio-img rounded overflow-hidden">
                            <img class="img-fluid" src="<?php echo $yt_data['code']; ?>" alt="">
                            <div class="portfolio-btn">
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="<?php echo $yt_data['code']; ?>" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="<?php echo $yt_data['link']; ?>"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Projects End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-5 my-5" id="testimonial">
        <div class="container-fluid py-5">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                    <?php
                        $tephoto_rs = Database::search("SELECT `code` FROM `feedback`");
                            $tephoto_data = $tephoto_rs->fetch_assoc();
                        ?>
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="<?php echo $tephoto_data["code"]; ?>" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="<?php echo $tephoto_data["code"]; ?>" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="<?php echo $tephoto_data["code"]; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <?php
                        $te_rs = Database::search("SELECT * FROM `feedback` WHERE `status` = '2'");
                        $te_num = $te_rs->num_rows;

                        for ($x = 0; $x < $te_num; $x++) {
                            $te_data = $te_rs->fetch_assoc();
                        ?>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="<?php echo $te_data["code"]; ?>" alt="img/testimonial-2.jpg">
                                    <div class="testimonial-icon">
                                        <i class="fa fa-quote-left text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-5 fst-italic"><?php echo $te_data["feed_desc"]; ?></p>
                                <hr class="w-25 mx-auto">
                                <h5><?php echo $te_data["user_name"]; ?></h5>
                                <span><?php echo $te_data["job_title"]; ?></span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src="<?php echo $tephoto_data["code"]; ?>" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src="<?php echo $tephoto_data["code"]; ?>" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src="<?php echo $tephoto_data["code"]; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <?php
                $con_rs = Database::search("SELECT * FROM `contact` WHERE `id` = '1'");
                $sm_rs = Database::search("SELECT * FROM `social_media` WHERE `id` = '1'");
                $con_data = $con_rs->fetch_assoc();
                $sm_data = $sm_rs->fetch_assoc();
                ?>
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold"><?php echo $con_data["office_address"]; ?></h3>
                    <hr class="w-100">
                    <p class="mb-2">Call my manager:</p>
                    <h3 class="fw-bold"><?php echo $con_data["call_num"]; ?></h3>
                    <hr class="w-100">
                    <p class="mb-2">Whatsapp text me:</p>
                    <h3 class="fw-bold"><?php echo $con_data["whatsapp"]; ?></h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h4 class="fw-bold"><?php echo $con_data["email"]; ?></h4>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="<?php echo $sm_data["fb"]; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo $sm_data["instagram"]; ?>"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo $sm_data["youtube"]; ?>"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo $sm_data["linkedin"]; ?>"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="<?php echo $sm_data["whatsapp"]; ?>"><i class="fab fa-whatsapp"></i></a>

                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4"><?php echo $seo_data["contact_desc"]; ?></p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="">
                                <input type="text" class="form-control" id="mess_name" placeholder="Your Name here ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <input type="email" class="form-control" id="mess_email" placeholder="Your Email address here">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="">
                                <input type="text" class="form-control" id="mess_mobile" placeholder="Your Mobile Number here">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <input type="text" class="form-control" id="mess_subject" placeholder="What is your requirement">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="">
                                <textarea class="form-control" placeholder="Leave a message here" id="message_desc" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-5" onclick="orderFromMe();">Send Message</button>
                        </div>
                    </div>
                    <div class="col-12 d-none" id="addmsgdiv">
                        <div class="alert alert-success" role="alert" id="addalertdiv">
                            <i class="bi bi-check2-circle fs-5" id="addmsg">
                            </i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->

    <div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s" id="feedback">
        <h2 class="mb-4 text-center fw-bold">What is your recommandation about My service</h2>
        <div class="row g-3">
            <div class="col-md-6">
                <div class="">
                    <input type="text" class="form-control" id="feedname" placeholder="Your Name here ">
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="text" class="form-control" id="designation" placeholder="Your designation here">
                </div>
            </div>
            <div class="col-2 text-center">
                <img src="img\testimonial-2.jpg" class="img-fluid bg-transparent align-content-center border border-1 rounded-top" style="width:110px; height:100px;" id="f0" />
                <input type="file" class="d-none" id="fimageuploder" multiple />
                <label for="fimageuploder" class="btn btn-outline-dark py-1 px-1 fs-6" onclick="feedchangeProductimg();">Upload Profile Photo</label>
            </div>

            <div class="col-10">
                <div class="">
                    <textarea class="form-control" placeholder="Leave your Feedback here" id="feedbackpro" style="height: 140px"></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-outline-primary mt-2" onclick="feedbackpro();">Submit Feedback</button>
                </div>
            </div>

        </div>
        <div class="col-12 d-none" id="addmsgdiv">
            <div class="alert alert-success" role="alert" id="addalertdiv">
                <i class="bi bi-check2-circle fs-5" id="addmsg">
                </i>
            </div>
        </div>
    </div>

    <!-- Map Start -->
    <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.247539573225!2d81.03100027141112!3d6.972482888449444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae46251cb80ef17%3A0x9aa9428398ef4b8d!2sBogahamaditta!5e0!3m2!1sen!2slk!4v1708686437444!5m2!1sen!2slk" frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <!-- Map End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom text-light fw-bold" href="Infinitix.com">Infinitix.com</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="main.js"></script>
    <script src="bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>