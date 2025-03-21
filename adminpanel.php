<?php
session_start();
require "connection.php";

if (isset($_SESSION["Aduser"])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Admin Panel - Infinitix.com</title>
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
        <link rel="stylesheet" href="bootstrap.css">

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
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h1 class="text-primary fw-bold m-0">Infinitix</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid bg-light my-6 mt-0" id="home">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                        <h3 class="text-primary mb-3">I'm</h3>
                        <h1 class="display-3 mb-3">Sadeesha</h1>
                        <h2 class="typed-text-output d-inline"></h2>
                        <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer</div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid" src="img/profile.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <h2 class="mb-4 text-center fw-bold">Update Website Statistics</h2>
            <?php
            $p_rs = Database::search("SELECT * FROM `portfolio`");
            $p_num = $p_rs->num_rows;

            for ($x = 0; $x < $p_num; $x++) {
                $p_data = $p_rs->fetch_assoc();
            ?>

                <div class="row g-3">
                    <div class="col-12 d-none" id="addmsgdiv">
                        <div class="alert alert-success" role="alert" id="addalertdiv">
                            <i class="bi bi-check2-circle fs-5" id="addmsg">
                            </i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <input type="number" class="form-control" id="cus" placeholder="<?php echo $p_data["Satisfied_Customer"]; ?> Satisfied Customers" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <input type="number" class="form-control" id="projects" placeholder="<?php echo $p_data["Succesful_projects"]; ?> Successfull projects" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <input type="number" id="years" class="form-control" placeholder="<?php echo $p_data["YearOf_Exp"]; ?> years of Experince" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="">
                            <input type="date" id="date" class="form-control" placeholder="<?php echo $p_data["updated_date"]; ?>" required>
                        </div>
                    </div>
                    <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="UpdatePortfolio();">Update My Portfolio</button>

                </div>
        </div>
    <?php
            }
    ?>
    </div>
    <br> <br>
    <div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
        <h2 class="mb-4 text-center fw-bold">Update Contact Details</h2>
        <?php
        $c_rs = Database::search("SELECT * FROM `contact`");
        $c_num = $c_rs->num_rows;

        for ($x = 0; $x < $c_num; $x++) {
            $c_data = $c_rs->fetch_assoc();
        ?>

            <div class="row g-3">
                <div class="col-12 d-none" id="addmsgdiv">
                    <div class="alert alert-success" role="alert" id="addalertdiv">
                        <i class="bi bi-check2-circle fs-5" id="addmsg">
                        </i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <input type="text" class="form-control" id="office" placeholder="<?php echo $c_data["office_address"]; ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <input type="text" class="form-control" id="call" placeholder="<?php echo $c_data["call_num"]; ?> for Normal Calls" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <input type="text" id="wp" class="form-control" placeholder="<?php echo $c_data["whatsapp"]; ?> for whatsapp" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="">
                        <input type="email" id="email" class="form-control" placeholder="<?php echo $c_data["email"]; ?>" required>
                    </div>
                </div>
                <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="UpdateContact();">Update My Contact Details</button>

            </div>
    </div>
<?php
        }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Update Admin login</h2>
    <?php
    $a_rs = Database::search("SELECT * FROM `admin`");
    $a_num = $a_rs->num_rows;

    for ($x = 0; $x < $a_num; $x++) {
        $a_data = $a_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="email" class="form-control" id="email" placeholder="<?php echo $a_data["email"]; ?>" disabled>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="text" class="form-control" id="fname" placeholder="<?php echo $a_data["fname"]; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="text" id="lname" class="form-control" placeholder="<?php echo $a_data["lname"]; ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <input type="text" id="vcode" class="form-control" placeholder="<?php echo $a_data["verification_code"]; ?>" disabled>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="UpdateAdmin();">Update Admin details</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Update SEO descriptions</h2>
    <?php
    $s_rs = Database::search("SELECT * FROM `seo_desc`");
    $s_num = $s_rs->num_rows;

    for ($x = 0; $x < $s_num; $x++) {
        $s_data = $s_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <textarea class="form-control" placeholder="<?php echo $s_data["about_me"]; ?>" id="about" style="height: 150px"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <textarea class="form-control" placeholder="<?php echo $s_data["clients"]; ?>" id="client" style="height: 150px"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <textarea class="form-control" placeholder="<?php echo $s_data["project"]; ?>" id="project" style="height: 150px"></textarea>
                </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <textarea class="form-control" placeholder="<?php echo $s_data["skil_desc"]; ?>" id="skill" style="height: 150px"></textarea>
                </div>
            </div>

            <div class="col-12">
                <div class="">
                    <textarea class="form-control" placeholder="<?php echo $s_data["contact_desc"]; ?>" id="contact" style="height: 80px"></textarea>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="UpdateSEO();">Update All Descriptions</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Add Education Qualification</h2>
    <?php
    $ed_rs = Database::search("SELECT * FROM `edu` WHERE `id`= '11'");
    $ed_num = $ed_rs->num_rows;

    for ($x = 0; $x < $ed_num; $x++) {
        $ed_data = $ed_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="text" class="form-control" id="qu" placeholder="Ex:- <?php echo $ed_data["qulification"]; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="text" class="form-control" id="year" placeholder="Ex:- <?php echo $ed_data["year"]; ?>" required>
                </div>
            </div>
            <div class="col-12">
                <div class="">
                    <input type="text" id="ins" class="form-control" placeholder="Ex:- <?php echo $ed_data["institute"]; ?>" required>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="education();">Add Educational Qualification</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Add Professional Experinces</h2>
    <?php
    $ex_rs = Database::search("SELECT * FROM `exp` WHERE `id`= '5'");
    $ex_num = $ex_rs->num_rows;

    for ($x = 0; $x < $ex_num; $x++) {
        $ex_data = $ex_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="text" class="form-control" id="position" placeholder="Ex:- <?php echo $ex_data["position"]; ?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <input type="text" class="form-control" id="y" placeholder="Ex:- <?php echo $ex_data["year"]; ?>" required>
                </div>
            </div>
            <div class="col-12">
                <div class="">
                    <input type="text" id="com" class="form-control" placeholder="Ex:- <?php echo $ex_data["company_name"]; ?>" required>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="experince();">Add Professional Experience</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Add Programming skills</h2>
    <?php
    $skill_rs = Database::search("SELECT * FROM `skills` WHERE `langauge`= 'Angular JS'");
    $skill_num = $skill_rs->num_rows;

    for ($x = 0; $x < $skill_num; $x++) {
        $skill_data = $skill_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="lang" placeholder="Ex:- <?php echo $skill_data["langauge"]; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="number" class="form-control" id="percentage" placeholder="Ex:- <?php echo $skill_data["percentage"]; ?> %" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="color" placeholder="Ex:- <?php echo $skill_data["color"]; ?>" required>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="skilladding();">Add New Programming Skills</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Update Programming skills</h2>
    <?php
    $uskill_rs = Database::search("SELECT * FROM `skills` WHERE `langauge`= 'Angular JS'");
    $uskill_num = $uskill_rs->num_rows;

    for ($x = 0; $x < $uskill_num; $x++) {
        $uskill_data = $uskill_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <select id="ulang" class="form-select">
                        <?php

                        $rs = Database::search("SELECT * FROM `skills`");
                        $n = $rs->num_rows;

                        for ($x = 0; $x < $n; $x++) {
                            $d = $rs->fetch_assoc();
                        ?>
                            <option><?php echo $d["langauge"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="number" class="form-control" id="upercentage" placeholder="Ex:- <?php echo $uskill_data["percentage"]; ?> %" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="ucolor" placeholder="Ex:- <?php echo $uskill_data["color"]; ?>" required>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="skillUP();">Update Programming Skills</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Add Services</h2>
    <?php
    $ex_rs = Database::search("SELECT * FROM `service` WHERE `title`= 'Creative Design'");
    $ex_num = $ex_rs->num_rows;

    for ($x = 0; $x < $ex_num; $x++) {
        $ex_data = $ex_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="title" placeholder="Ex:- <?php echo $ex_data["title"]; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="number" class="form-control" id="price" placeholder="Ex:- LKR.<?php echo $ex_data["price"]; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="img" placeholder="<?php echo $ex_data["image_icon"]; ?>" required>
                </div>
            </div>
            <div class="col-12">
                <div class="">
                    <textarea class="form-control" placeholder="<?php echo $ex_data["description"]; ?>" id="desc" style="height: 70px"></textarea>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="service();">Add Services</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Update Services</h2>
    <?php
    $us_rs = Database::search("SELECT * FROM `service` WHERE `title`= 'Creative Design'");
    $us_num = $us_rs->num_rows;

    for ($x = 0; $x < $us_num; $x++) {
        $us_data = $us_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <select id="utitle" class="form-select">
                        <?php

                        $rs = Database::search("SELECT * FROM `service`");
                        $n = $rs->num_rows;

                        for ($x = 0; $x < $n; $x++) {
                            $d = $rs->fetch_assoc();
                        ?>
                            <option><?php echo $d["title"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="number" class="form-control" id="uprice" placeholder="Ex:- LKR.<?php echo $us_data["price"]; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="uimg" placeholder="<?php echo $us_data["image_icon"]; ?>" required>
                </div>
            </div>
            <div class="col-12">
                <div class="">
                    <textarea class="form-control" placeholder="<?php echo $us_data["description"]; ?>" id="udesc" style="height: 70px"></textarea>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="serviceUp();">Update Services</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Add Tutorials</h2>
    <?php
    $l_rs = Database::search("SELECT * FROM `tutorial_proj` WHERE `id` = '2'");
    $l_num = $l_rs->num_rows;

    for ($x = 0; $x < $l_num; $x++) {
        $l_data = $l_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-12">
                <div class="">
                    <input type="text" class="form-control" id="yttut" placeholder="Ex:- <?php echo $l_data["tutorial"]; ?>" required>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="addtutes();">I want to add new playlist title</button>
        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Update Social Media Links</h2>
    <?php
    $social_rs = Database::search("SELECT * FROM `social_media` WHERE `id` = '1'");
    $social_num = $social_rs->num_rows;

    for ($x = 0; $x < $social_num; $x++) {
        $social_data = $social_rs->fetch_assoc();
    ?>

        <div class="row g-3">
            <div class="col-12 d-none" id="addmsgdiv">
                <div class="alert alert-success" role="alert" id="addalertdiv">
                    <i class="bi bi-check2-circle fs-5" id="addmsg">
                    </i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="facebook" placeholder="<?php echo $social_data["fb"]; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" class="form-control" id="whatsapp" placeholder="<?php echo $social_data["whatsapp"]; ?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="">
                    <input type="text" id="instagram" class="form-control" placeholder="<?php echo $social_data["instagram"]; ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <input type="text" id="youtube" class="form-control" placeholder="<?php echo $social_data["youtube"]; ?>" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="">
                    <input type="text" id="linkedin" class="form-control" placeholder="<?php echo $social_data["linkedin"]; ?>" required>
                </div>
            </div>
            <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="UpdateSLinks();">I want to update My social Media links</button>

        </div>
</div>
<?php
    }
?>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Add youtube Tutorials</h2>
    <div class="row g-3">
        <div class="col-12 d-none" id="addmsgdiv">
            <div class="alert alert-success" role="alert" id="addalertdiv">
                <i class="bi bi-check2-circle fs-5" id="addmsg">
                </i>
            </div>
        </div>
        <center>
            <div class="col-4 text-center">
                <div class="text-center">
                    <img src="img/addproductimg.svg" class="img-fluid bg-transparent border border-1 border-primary rounded-2 text-center" style="width:320px; height:180px;" id="i0" />
                    <input type="file" class="d-none" id="imageuploder" multiple />
                    <label for="imageuploder" class="btn btn-outline-primary py-1 px-1 fs-6 mt-1" onclick="changeProductimg();">Add your youtube thumbnail</label>

                </div>
            </div>
        </center>
        <div class="col-md-6">
            <div class="">
                <select id="proj_title" class="form-select">
                    <?php

                    $rs = Database::search("SELECT * FROM `tutorial_proj`");
                    $n = $rs->num_rows;

                    for ($x = 0; $x < $n; $x++) {
                        $d = $rs->fetch_assoc();
                    ?>
                        <option value="<?php echo $d["id"]; ?>"><?php echo $d["tutorial"]; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="">
                <input type="text" class="form-control" id="link" placeholder="Paste Your Link Here" required>
            </div>
        </div>
        <button class="btn btn-outline-primary py-2 px-3 mt-2" style="cursor: pointer;" onclick="addYTProduct();">Add tutorial thumbnail</button>
    </div>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Recived Messages</h2>
    <div class="row g-3">
        <div class="col-12 d-none" id="addmsgdiv">
            <div class="alert alert-success" role="alert" id="addalertdiv">
                <i class="bi bi-check2-circle fs-5" id="addmsg">
                </i>
            </div>
        </div>
        <center>
            <div class="col-12">
                <div class="row">
                    <div class="col-2 d-none d-lg-block bg-primary py-2 rounded-start border border-1 border-light">
                        <span class="fs-6 text-light fw-bold">User Name</span>
                    </div>
                    <div class="col-2 d-none d-lg-block bg-primary py-2 border border-1 border-light">
                        <span class="fs-6 text-light fw-bold">Email</span>
                    </div>
                    <div class="col-2 d-none d-lg-block bg-primary py-2 border border-1 border-light">
                        <span class="fs-6 text-light">Mobile</span>
                    </div>
                    <div class="col-2 d-none d-lg-block bg-primary py-2 border border-1 border-light">
                        <span class="fs-6 text-light fw-bold">Subject</span>
                    </div>
                    <div class="col-4 d-none d-lg-block bg-primary py-2 rounded-end border border-1 border-light">
                        <span class="fs-6 text-light fw-bold">Message</span>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <?php
                $us_rs = Database::search("SELECT * FROM `orders`");
                $us_num = $us_rs->num_rows;

                for ($x = 0; $x < $us_num; $x++) {
                    $us_data = $us_rs->fetch_assoc();
                ?>
                    <div class="row">
                        <div class="col-2 d-none d-lg-block bg-light py-2 rounded-start border border-1 border-light text-center">
                            <span class="fs-6 text-primary fw-bold"><?php echo $us_data["name"]; ?></span>
                        </div>
                        <div class="col-2 d-none d-lg-block bg-light py-2 border border-1 border-light text-center">
                            <span class="text-primary fw-bold"><?php echo $us_data["email"]; ?></span>
                        </div>
                        <div class="col-2 d-none d-lg-block bg-light py-2 border border-1 border-light text-center">
                            <span class="fs-6 text-primary fw-bold"><?php echo $us_data["mobile"]; ?></span>
                        </div>
                        <div class="col-2 d-none d-lg-block bg-light py-2 border border-1 border-light text-center">
                            <span class="fs-6 text-primary fw-bold"><?php echo $us_data["subject"]; ?></span>
                        </div>
                        <div class="col-4 d-none d-lg-block bg-light py-2 rounded-end border border-1 border-light">
                            <span class="fs-6 text-primary fw-bold"><?php echo $us_data["message"]; ?></span>
                        </div>
                    </div>
                    <?php
                }
?>
            </div>
        </center>
    </div>
</div>

<br> <br>
<div class="offset-1 col-lg-10 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
    <h2 class="mb-4 text-center fw-bold">Feedbacks</h2>
    <div class="row g-3">
        <div class="col-12 d-none" id="addmsgdiv">
            <div class="alert alert-success" role="alert" id="addalertdiv">
                <i class="bi bi-check2-circle fs-5" id="addmsg">
                </i>
            </div>
        </div>
        <center>
            <div class="col-12">
                <div class="row">
                    <div class="col-2 d-none d-lg-block bg-primary py-2 rounded-start border border-1 border-light">
                        <span class="fs-6 text-light fw-bold">Profile Photo</span>
                    </div>
                    <div class="col-2 d-none d-lg-block bg-primary py-2 border border-1 border-light">
                        <span class="fs-6 text-light fw-bold">User Name</span>
                    </div>
                    <div class="col-5 d-none d-lg-block bg-primary py-2 border border-1 border-light">
                        <span class="fs-6 text-light fw-bold">Feedback</span>
                    </div>
                    <div class="col-3 d-none d-lg-block bg-primary py-2 border border-1 border-light rounded-end">
                        <span class="fs-6 text-light fw-bold">status</span>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <?php
                $us_rs = Database::search("SELECT * FROM `feedback`");
                $us_num = $us_rs->num_rows;

                for ($x = 0; $x < $us_num; $x++) {
                    $us_data = $us_rs->fetch_assoc();
                ?>
                    <div class="row">
                        <div class="col-2 d-none d-lg-block bg-light py-2 rounded-start border border-1 border-light text-center">
                            <img src="<?php echo $us_data["code"]; ?>" class="rounded-circle" style="height: 90px;margin-left: 60px;" />
                        </div>
                        <div class="col-2 d-none d-lg-block bg-light py-2 border border-1 border-light text-center mb-5">
                            <span class="text-primary fw-bold"><?php echo $us_data["user_name"]; ?></span>
                        </div>
                        <div class="col-5 d-none d-lg-block bg-light py-2 border border-1 border-light text-center">
                            <span class="fs-6 text-primary fw-bold"><?php echo $us_data["feed_desc"]; ?></span>
                        </div>
                        <div class="col-3 d-none d-lg-block bg-light py-2 border border-1 border-light text-center rounded-end">
                            <?php

                            if ($us_data["status"] == 1) {
                            ?>
                                <button id="UB<?php echo $us_data['id']; ?>" class="btn text-danger fw-bold" onclick="blockfeed('<?php echo $us_data['id']; ?>');"><i class="bi bi-exclamation-diamond-fill fs-1"></i></button>
                            <?php

                            } else {
                            ?>
                                <button id="UB<?php echo $us_data['id']; ?>" class="btn text-success fw-bold" onclick="blockfeed('<?php echo $us_data['id']; ?>');"><i class="bi bi-patch-check-fill fs-1"></i></button>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>
        </center>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!--Scroll to top-->
<script src="bootstrap.bundle.js"></script>
<script src="main.js"></script>
<!-- JavaScript Libraries -->
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

<?php
} else {
    header("location:adminsigning.php");
}
?>