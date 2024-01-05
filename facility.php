<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Medical HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .extra {
            margin-left: 510px;
        }

        @media only screen and (max-width: 1199px) {
            .extra {
                margin-left: 400px;
            }
        }

        @media only screen and (max-width: 991px) {
            .extra {
                margin-left: 246px;
            }
        }

        @media only screen and (max-width: 767px) {
            .extra {
                margin-left: 0px;
            }
        }
    </style>
</head>

<body>
    <!-- Preloader Start -->
    <?php
    include 'includes/preloader.php';
    ?>

    <!-- Header -->
    <?php
    include 'includes/header.php';
    ?>

    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Facilities</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog start -->
        <div class="home_blog-area section-padding2">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-7 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <span>Facilities</span>
                            <h2>Services & Facilities Available</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog1.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <h4><a href="blog_details.html">Group medical insurance</a></h4>
                                <a href="group_medicine.php" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog2.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <h4><a href="">Physiotherapy facilities
                                    </a></h4>
                                <a href="blog_details.html" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog3.png" alt="">
                            </div>
                            <div class="blogs-cap">
                                <h4><a href="blog_details.html">Emergency services</a></h4>
                                <a href="blog_details.html" class="read-more1">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--? department_area_start  -->
        <div class="department_area pt-5 mb-100">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center mb-100">
                            <span>Our Facilities</span>
                            <h2>Our Medical Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="depart_ment_tab mb-30">
                            <!-- Tabs Buttons -->
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="dentist-tab" data-toggle="tab" href="#dentist"
                                        role="tab" aria-controls="home" aria-selected="true">
                                        <i class="flaticon-teeth"></i>
                                        <h4>Dentistry</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="diabetes-tab" data-toggle="tab" href="#diabetes" role="tab"
                                        aria-controls="profile" aria-selected="false">
                                        <i class="flaticon-cardiovascular"></i>
                                        <h4>Diabetology</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ent-tab" data-toggle="tab" href="#ent" role="tab"
                                        aria-controls="contact" aria-selected="false">
                                        <i class="flaticon-ear"></i>
                                        <h4>ENT Specialists</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="ortho-tab" data-toggle="tab" href="#ortho" role="tab"
                                        aria-controls="contact" aria-selected="false">
                                        <i class="flaticon-bone"></i>
                                        <h4>Orthopedician</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="derma-tab" data-toggle="tab" href="#derma" role="tab"
                                        aria-controls="contact" aria-selected="false">
                                        <i class="flaticon-lung"></i>
                                        <h4>Dermatology</h4>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="opt-tab" data-toggle="tab" href="#opt" role="tab"
                                        aria-controls="contact" aria-selected="false">
                                        <i class="flaticon-cell"></i>
                                        <h4>Ophthalmology</h4>
                                    </a>
                                </li>
                                <li class="nav-item extra">
                                    <a class="nav-link" id="Physiotherapy-tab" data-toggle="tab" href="#Physio"
                                        role="tab" aria-controls="contact" aria-selected="false">
                                        <i class="flaticon-cell"></i>
                                        <h4>Physiotherapy</h4>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dept_main_info white-bg">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dentist" role="tabpanel"
                            aria-labelledby="dentist-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Student-Centric Dental Excellence <br>Schedule Your Appointment Today!</h3>
                                        <p>Experience top-notch dental care at our college health center. Our skilled
                                            professionals provide comprehensive dental services, including cleanings,
                                            exams, and preventive care. With state-of-the-art facilities, we prioritize
                                            your oral health, ensuring a bright smile for every student. Schedule your
                                            appointment for personalized, student-friendly dental care today.</p>
                                        <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/department_man.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="diabetes" role="tabpanel" aria-labelledby="diabetes-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Personalized Diabetes Care <br> for Student Well-being</h3>
                                        <p>At our college health center, we offer specialized diabetes care tailored to
                                            students' needs. Our experienced team provides comprehensive services, from
                                            regular check-ups to personalized management plans. Embrace a supportive
                                            environment focused on optimizing your well-being. Take proactive steps
                                            towards a healthy, balanced life with our diabetes facilities.</p>
                                        <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/department_man.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="ent" role="tabpanel" aria-labelledby="ent-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Navigate Wellness <br>Unmatched ENT care for students</h3>
                                        <p>Discover exceptional ENT care at our college health center. Our expert team
                                            offers comprehensive ear, nose, and throat services, including diagnostics,
                                            treatment, and surgical options. Experience personalized care in a
                                            student-friendly environment. Prioritize your health and well-being with our
                                            state-of-the-art ENT facilities – your path to optimal ear, nose, and throat
                                            health starts here. </p>
                                        <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/department_man.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="ortho" role="tabpanel" aria-labelledby="ortho-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Orthopedic Excellence <br>Personalized Student Welfare</h3>
                                        <p>Unlock peak physical performance with our college health center's
                                            cutting-edge orthopedic facilities. Our skilled orthopedic specialists
                                            provide tailored care, from diagnostics to rehabilitation. Whether treating
                                            injuries or enhancing athletic performance, trust us for comprehensive
                                            orthopedic solutions. Elevate your mobility and well-being with our expert
                                            team and state-of-the-art facilities.</p>
                                        <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/department_man.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="derma" role="tabpanel" aria-labelledby="derma-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Radiant Skin Awaits <br> Student Dermatology Care</h3>
                                        <p>Indulge in skincare excellence at our college health center. Our dermatologic
                                            facilities offer personalized solutions for healthy, radiant skin. From
                                            routine check-ups to specialized treatments, our experienced dermatologists
                                            ensure comprehensive care. Step into a world of skincare innovation,
                                            promoting confidence and well-being for every student. Schedule your
                                            appointment for skin wellness today.</p>
                                        <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/department_man.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="opt" role="tabpanel" aria-labelledby="opt-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Clear Vision Awaits <br>Ophthalmologic Excellence for Students</h3>
                                        <p>Elevate your vision care at our college health center's ophthalmologic
                                            facilities. Our skilled eye care specialists provide comprehensive services,
                                            from routine exams to advanced treatments. Experience personalized attention
                                            in a student-friendly environment. Prioritize your eye health and visual
                                            well-being with our state-of-the-art ophthalmologic facilities. Schedule
                                            your eye exam today for clear, focused vision.</p>
                                        <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/department_man.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                        <div class="tab-pane fade" id="Physio" role="tabpanel" aria-labelledby="Physiotherapy-tab">
                            <!-- single_content  -->
                            <div class="row align-items-center no-gutters">
                                <div class="col-lg-7">
                                    <div class="dept_info">
                                        <h3>Optimize Wellness <br>Physiotherapy for Active Living</h3>
                                        <p>Embark on a journey to wellness with our college health center's
                                            physiotherapy facilities. Our dedicated team of experts offers personalized
                                            care, rehabilitation, and injury prevention. From chronic pain management to
                                            recovery after injury, trust our state-of-the-art facilities to optimize
                                            your physical well-being. Take the first step towards a healthier, more
                                            active life.</p>
                                        <a href="#" class="dep-btn">Appointment<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="dept_thumb">
                                        <img src="assets/img/gallery/department_man.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single_content  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- department area_end  -->
    </main>

    <!-- Footer Start-->
    <?php
    include 'includes/footer.php';
    ?>

    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>