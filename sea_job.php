<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sea Jobs</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/android-icon-48x48.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets\images\favicons\android-icon-48x48.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Sreyasi  Marine" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">



    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/onpoint-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/nice-select/nice-select.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/onpoint.css" />
    <link rel="stylesheet" href="assets/css/onpoint-responsive.css" />
</head>

<body>




    <!-- /.preloader -->



    <!-- Start sidebar widget content -->

    <!-- End sidebar widget content -->




    <div class="page-wrapper">
        <?php include 'header.php' ?>

        <!--Page Header Start-->
        
        <!--Page Header End-->

        <style>
            .job-vacancy-section {
                padding: 80px 0;
                background-color: #f8f9fa;
            }

            .section-title {
                color: #333;
                font-size: 2.5rem;
                margin-bottom: 2rem;
            }

            .job-vacancy-form {
                background-color: #fff;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            }

            .form-floating {
                margin-bottom: 1rem;
            }

            .form-control {
                border-radius: 5px;
            }

            .form-control:focus {
                border-color: #80bdff;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }

            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
                transition: all 0.3s ease;
            }

            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #0056b3;
            }

            @media (max-width: 768px) {
                .job-vacancy-section {
                    padding: 50px 0;
                }

                .section-title {
                    font-size: 2rem;
                }
            }
        </style>

        <section class="job-vacancy-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="section-title text-center mb-5">Apply for Sea Job</h2>
                        <form class="job-vacancy-form" id="applicationForm"  action="./application.php" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Position Applied For" required>
                                        <label for="position">Position Applied For</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Your Message" style="height: 100px"></textarea>
                                        <label for="message">Your Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="cv" class="form-label">Upload Your CV</label>
                                        <input class="form-control" type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100 py-3">Submit Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--Project Details End-->



    <!--CTA One Start-->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__bg-img" style="background-image: url(assets/images/resources/cta-one-bg-img.jpg);"></div>
                <div class="cta-one__content-box">
                    <div class="cta-one__icon">
                        <span class="icon-call"></span>
                        <div class="cta-one__shape-1">
                            <img src="assets/images/shapes/cta-one-shape-1.png" alt="">
                        </div>
                    </div>
                    <h3 class="cta-one__title">Need any help?
                        <br> contact us!
                    </h3>
                    <div class="cta-one__contact-box">
                        <div class="icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="content">
                            <p>Need help?</p>
                            <h3><a href="tel:+91 9910302896">+91 9910302896</a></h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->

    <!--Site Footer Start-->
    <?php include 'footer.php' ?>
    <!--Site Footer End-->


    </div><!-- /.page-wrapper -->





    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery.circle-type/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery.circle-type/jquery.lettering.min.js"></script>
    <script src="assets/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="assets/vendors/marquee/marquee.min.js"></script>
    <script src="assets/vendors/sidebar-content/jquery-sidebar-content.js"></script>




    <!-- template js -->
    <script src="assets/js/onpoint.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>



</html>