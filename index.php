<?php
include "Config/config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.vikinglab.agency/otech/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2024 16:01:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O-Tech 03</title>
    <!-- fav icon -->
    <link rel="shortcut icon" href="assets/img/icons/vl-fav-ic-1.3.svg">


    <!-- css file -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- preloader  -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="assets/img/preloader/preloader1.png" alt=""></div>
        </div>
    </div>



    <!--================= Header section start =================-->
    <?php include "partials/header.php"; ?>


    <!--================= Header section End =================-->

    <main>

        <!--================= Banner section start =================-->
        <section class="vl-hero-area vl-hero-bg p-relative fix z-index-1 pt-234 pb-100" style="background-image: url(assets/img/banner/green-bg3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 mb-30">
                        <div class="vl-hero-content p-relative z-index-1">
                            <div class="vl-section-title-wrapper">
                                <h4 class="vl-section-subtitle-3 vl-theme-color-3 vl-upper vl-fs-16 m-0 br-50 vl-white">Welcome to Christainment Nigeria</h4>
                                <h1 class="vl-section-heading vl-white pt-16">Transforming Lives Through Creative Faith</h1>
                                <p class="vl-section-description pt-16 pb-28">Bridging the gap between spiritual growth and creative expression, Christainment Nigeria is your destination for transformative, faith-driven experiences.</p>
                            </div>

                            <div class="vl-hero-btn-3">
                                <a href="contact.html" class="vl-btn-3">
                                    Join Our Community <span><i class="fa-regular fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 mb-30">

                        <div class="vl-hero-img-3 p-relative">
                            <img class="w-100" src="assets/img/imgs/banner2.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-1"></div>
                </div>

                <!-- counter area -->
                <div class="vl-hero-counter vl-hero-counter-3">
                    <div class="vl-hero-counter-box mb-30">
                        <span class="counter vl-44 vl-white">100</span><span>+</span>
                        <h4 class="vl-hero-counter-box-title vl-white pt-12">Events</h4>
                    </div>
                    <div class="vl-hero-counter-box mb-30">
                        <span class="counter vl-white">30</span><span>+</span>
                        <h4 class="vl-hero-counter-box-title vl-white pt-12">Conferences</h4>
                    </div>

                    <div class="vl-hero-counter-box mb-30">
                        <span class="counter vl-white">1.5</span><span>k+</span>
                        <h4 class="vl-hero-counter-box-title vl-white pt-12">Participants</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================= Banner section End =================-->

        <!--================= About section start =================-->
        <section class="vl-about-area pt-100 pb-70">
            <div class="container">
                <div class="row flex-lg-row flex-column-reverse align-items-center">
                    <div class="col-lg-6 mb-30">
                        <div class="vl-about-imgs vl-about-imgs-3 p-relative z-index-1 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                            <div class="vl-about-large">
                                <img src="assets/img/imgs/balance/img2.jpg" alt="">
                            </div>
                            <!-- <div class="vl-about-sm d-none d-md-block">
                                <img src="assets/img/about/vl-about-sm-3.2.png" alt="">
                            </div> -->
                            <div class="vl-about-content br-8">
                                <div class="vl-about-counter-box pb-16">
                                    <span class="counter vl-white">5</span><span>+</span>
                                </div>
                                <p>With 5+ years of experience <br>
                                    helping the community.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="vl-about-content vl-about-content-3 aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
                            <div class="vl-section-title-wrapper">
                                <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">About Us</h4>
                                <h2 class="vl-section-title vl-blc-text-4 pt-16 pb-20 text-danger">Empowering Lives through Creativity and Faith</h2>
                                <p class="vl-section-description vl-section-description-3 pb-32">At Christainment Nigeria, our mission is to bridge the gap between spiritual growth and creative expression. We are a movement dedicated to:</p>
                            </div>

                            <div class="vl-about-grid pb-16">
                                <!-- single check box -->
                                <div class="vl-about-ch-box mb-16">
                                    <div class="vl-about-ch-icon">
                                        <span><i class="fa-regular fa-check"></i></span>
                                    </div>
                                    <div class="vl-about-content">
                                        <h4 class="vl-about-ch-title">Glorifying God through excellent, innovative entertainment</h4>
                                    </div>
                                </div>
                                <!-- single check box -->
                                <div class="vl-about-ch-box mb-16">
                                    <div class="vl-about-ch-icon">
                                        <span><i class="fa-regular fa-check"></i></span>
                                    </div>
                                    <div class="vl-about-content">
                                        <h4 class="vl-about-ch-title">Providing transformative faith-based experiences</h4>
                                    </div>
                                </div>
                                <!-- single check box -->
                                <div class="vl-about-ch-box mb-16">
                                    <div class="vl-about-ch-icon">
                                        <span><i class="fa-regular fa-check"></i></span>
                                    </div>
                                    <div class="vl-about-content">
                                        <h4 class="vl-about-ch-title">Empowering Christian artists and content creators</h4>
                                    </div>
                                </div>
                                <!-- single check box -->
                                <div class="vl-about-ch-box mb-16">
                                    <div class="vl-about-ch-icon">
                                        <span><i class="fa-regular fa-check"></i></span>
                                    </div>
                                    <div class="vl-about-content">
                                        <h4 class="vl-about-ch-title">Building a vibrant, interconnected community of believers</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="vl-about-auth">
                                <div class="vl-about-authbtn">
                                    <a href="about.html" class="thme-btn3 mr-32">Get Started <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>


                                <div class="vl-about-auth-box mr-32">
                                    <div class="box-icon mr-10">
                                        <span><i class="fa-light fa-phone"></i></span>
                                    </div>
                                    <div class="box-content">
                                        <span class="pb-10">Free Consultation</span>
                                        <a class="num" href="tel:1234567890">123-456-7890</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= About section End =================-->

        <!--================= Service section start =================-->
        <section class="vl-service-area vl-gray-bg-2 pt-100 pb-70">
            <div class="container">
                <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Christainment Nigeria</h4>
                    <h2 class="vl-section-title vl-blc-text-4 pt-16 pb-20 text-danger">Our Ministry Offerings</h2>
                </div>
                <div class="row">
                    <!-- single service box start-->
                    <div class="col-lg-6 mb-30">
                        <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                            <div class="vl-service-icon icon3">
                                <span><img src="assets/img/icons/vl-service-ic-3.1.svg" alt=""></span>
                            </div>
                            <h2 class="vl-service-title pt-32"><a href="service-single.html">Faith-Driven Media Productions</a></h2>
                            <p class="pt-16 pb-24">Create original films, videos, podcasts, and digital content that uplifts, inspires, and shares the message of Christ.</p>
                            <!-- <a href="service-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                    <!-- single service box end-->
                    <!-- single service box start-->
                    <div class="col-lg-6 mb-30">
                        <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <div class="vl-service-icon icon3">
                                <span><img src="assets/img/icons/vl-service-ic-3.2.svg" alt=""></span>
                            </div>
                            <h2 class="vl-service-title pt-32"><a href="service-single.html">Transformative Live Experiences</a></h2>
                            <p class="pt-16 pb-24">Host vibrant events, conferences, and workshops that foster spiritual growth, creative expression, and community connection.</p>
                            <!-- <a href="service-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                    <!-- single service box end-->
                    <!-- single service box start-->
                    <div class="col-lg-6 mb-30">
                        <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                            <div class="vl-service-icon icon3">
                                <span><img src="assets/img/icons/vl-service-ic-3.1.svg" alt=""></span>
                            </div>
                            <h2 class="vl-service-title pt-32"><a href="service-single.html">Talent Development Programs</a></h2>
                            <p class="pt-16 pb-24">Empower emerging Christian artists and creatives through mentorship, training, and support to amplify their God-given gifts.</p>
                            <!-- <a href="service-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                    <!-- single service box end-->
                    <!-- single service box start-->
                    <div class="col-lg-6 mb-30">
                        <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <div class="vl-service-icon icon3">
                                <span><img src="assets/img/icons/vl-service-ic-3.2.svg" alt=""></span>
                            </div>
                            <h2 class="vl-service-title pt-32"><a href="service-single.html">Community Engagement Initiatives</a></h2>
                            <p class="pt-16 pb-24">Bridge denominational divides and bring believers together through outreach, service projects, and fellowship opportunities.</p>
                            <!-- <a href="service-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                    <!-- single service box end-->
                    <!-- single service box start-->
                    <div class="col-lg-6 mb-30">
                        <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                            <div class="vl-service-icon icon3">
                                <span><img src="assets/img/icons/vl-service-ic-3.1.svg" alt=""></span>
                            </div>
                            <h2 class="vl-service-title pt-32"><a href="service-single.html">Technology Solutions</a></h2>
                            <p class="pt-16 pb-24">Leverage the latest tools and platforms to enhance ministry operations, boost engagement, and expand digital reach.</p>
                            <!-- <a href="service-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                    <!-- single service box end-->
                    <!-- single service box start-->
                    <div class="col-lg-6 mb-30">
                        <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <div class="vl-service-icon icon3">
                                <span><img src="assets/img/icons/vl-service-ic-3.2.svg" alt=""></span>
                            </div>
                            <h2 class="vl-service-title pt-32"><a href="service-single.html">Financial Consulting</a></h2>
                            <p class="pt-16 pb-24">Provide guidance on funding, budgeting, and resource stewardship to ensure the long-term sustainability of our initiatives.</p>
                            <!-- <a href="service-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a> -->
                        </div>
                    </div>
                    <!-- single service box end-->

                </div>
            </div>
        </section>
        <!--================= Service section End =================-->

        <!--================= Blog section start =================-->
        <section class="vl-blog pt-100 pb-70">
            <div class="container">
                <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3">OUR EVENTS</h4>
                    <h2 class="vl-section-title vl-blc-text-4 pt-16 text-danger">Latest Events</h2>
                </div>
                <div class="row">
                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.1.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">Cyber Service </a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Revolutionize Your Operations <br> with Our Expertise</a></h3>
                                <a href="blog-single.html" class="vl-readmore more3">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.2.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">It Management</a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Empowering Your Business with <br> Cutting-Edge Insights</a></h3>
                                <a href="blog-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1300">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.3.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">It Service</a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Transform Your Business with <br> Innovative Solutions</a></h3>
                                <a href="blog-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= Blog section End =================-->

        <!--================= Case Studies section start =================-->
        <section class="vl-gallery2 p-relative z-index-1 pt-100 pb-100">
            <div class="container p-relative">
                <div class="vl-section-title-wrapper mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Events</h4>
                    <h2 class="vl-section-title vl-blc-text-4 pt-16 text-danger">Event Gallery</h2>
                </div>
                <div class="row">
                    <div id="gallery3" class="owl-carousel owl-theme">
                        <!-- single gallery item start-->
                        <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
                            <!-- <div class="gallery-number">
                                <span>01</span>
                            </div> -->
                            <div class="gallery-img">
                                <img class="w-100" style="width: 100%; height: 250px; object-fit: cover;" src="assets/img/imgs/balance/img2.jpg" alt="">
                            </div>
                            <!-- <div class="gallery-content fix">
                                <div class="gallery-content-trans">
                                    <h3 class="gallery-title pb-16"><a href="case-studies-single.html">Efficiency Managed IT Services</a></h3>
                                    <p>Our solutions ensure availability,<br> minimal downtime, & improved.</p>
                                    <a href="case-studies-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div> -->

                        </div>
                        <!-- single gallery item end-->

                        <!-- single gallery item start-->
                        <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
                            <!-- <div class="gallery-number">
                                <span>02</span>
                            </div> -->
                            <div class="gallery-img">
                                <img class="w-100" style="width: 100%; height: 250px; object-fit: cover;" src="assets/img/imgs/balance/img3.jpg" alt="">
                            </div>
                            <!-- <div class="gallery-content fix">
                                <div class="gallery-content-trans">
                                    <h3 class="gallery-title pb-16"><a href="case-studies-single.html">Fortifying Cybersecurity</a></h3>
                                    <p>We focus delivering user-friendly, <br> scalable & secure solutions to help secure</p>
                                    <a href="case-studies-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div> -->
                        </div>
                        <!-- single gallery item end-->

                        <!-- single gallery item start-->
                        <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
                            <!-- <div class="gallery-number">
                                <span>03</span>
                            </div> -->
                            <div class="gallery-img">
                                <img class="w-100" style="width: 100%; height: 250px; object-fit: cover;" src="assets/img/imgs/balance/img4.jpg" alt="">
                            </div>
                            <!-- <div class="gallery-content fix">
                                <div class="gallery-content-trans">
                                    <h3 class="gallery-title pb-16"><a href="case-studies-single.html">Building Resilient Networks </a></h3>
                                    <p>From digital transformation system <br> upgrades, our system consulting services </p>
                                    <a href="case-studies-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div> -->
                        </div>
                        <!-- single gallery item end-->

                        <!-- single gallery item start-->
                        <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
                            <!-- <div class="gallery-number">
                                <span>04</span>
                            </div> -->
                            <div class="gallery-img">
                                <img class="w-100" style="width: 100%; height: 250px; object-fit: cover;" src="assets/img/imgs/balance/img5.jpg" alt="">
                            </div>
                            <!-- <div class="gallery-content fix">
                                <div class="gallery-content-trans">
                                    <h3 class="gallery-title pb-16"><a href="case-studies-single.html">Efficiency Managed IT Services</a></h3>
                                    <p>Our solutions ensure availability,<br> minimal downtime, & improved.</p>
                                    <a href="case-studies-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div> -->
                        </div>
                        <!-- single gallery item end-->

                        <!-- single gallery item start-->
                        <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
                            <!-- <div class="gallery-number">
                                <span>01</span>
                            </div> -->
                            <div class="gallery-img">
                                <img class="w-100" style="width: 100%; height: 250px; object-fit: cover;" src="assets/img/imgs/balance/img6.jpg" alt="">
                            </div>
                            <!-- <div class="gallery-content fix">
                                <div class="gallery-content-trans">
                                    <h3 class="gallery-title pb-16"><a href="case-studies-single.html">Efficiency Managed IT Services</a></h3>
                                    <p>Our solutions ensure availability,<br> minimal downtime, & improved.</p>
                                    <a href="case-studies-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div> -->
                        </div>
                        <!-- single gallery item end-->

                        <!-- single gallery item start-->
                        <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
                            <!-- <div class="gallery-number">
                                <span>01</span>
                            </div> -->
                            <div class="gallery-img">
                                <img class="w-100" style="width: 100%; height: 250px; object-fit: cover;" src="assets/img/imgs/balance/img7.jpg" alt="">
                            </div>
                            <!-- <div class="gallery-content fix">
                                <div class="gallery-content-trans">
                                    <h3 class="gallery-title pb-16"><a href="case-studies-single.html">Efficiency Managed IT Services</a></h3>
                                    <p>Our solutions ensure availability,<br> minimal downtime, & improved.</p>
                                    <a href="case-studies-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                                </div>
                            </div> -->
                        </div>
                        <!-- single gallery item end-->
                    </div>
                </div>
            </div>
        </section>
        <!--================= Case Studies section End =================-->


        <!--================= Blog section start =================-->
        <section class="vl-blog pt-100 pb-70">
            <div class="container">
                <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3">OUR NEWS</h4>
                    <h2 class="vl-section-title vl-blc-text-4 pt-16 text-danger">Latest Headlines</h2>
                </div>
                <div class="row">
                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.1.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">Cyber Service </a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Revolutionize Your Operations <br> with Our Expertise</a></h3>
                                <a href="blog-single.html" class="vl-readmore more3">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.2.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">It Management</a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Empowering Your Business with <br> Cutting-Edge Insights</a></h3>
                                <a href="blog-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1300">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.3.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">It Service</a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Transform Your Business with <br> Innovative Solutions</a></h3>
                                <a href="blog-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= Blog section End =================-->


        <!--================= Testimonial section start =================-->
        <section class="vl-testimonial vl-testimonial-bg pt-100 pb-100" style="background-image: url(assets/img/banner/green-bg1.jpg);">
            <div class="container">
                <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 review-bg vl-white vl-fs-16 m-0 vl-theme-color3 vl-upper">Customer Review </h4>
                    <h2 class="vl-section-title vl-white pt-16">Why Our Clients Trust Us</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 p-relative mx-auto">
                        <div class="row">
                            <div class="vl-testimonial-active-4">
                                <!-- single testimonial slider start -->
                                <div class="vl-testimonial-box vl-testimonial-box-3 p-relative br-8">
                                    <div class="vl-testimonial-box-icon text-center">
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                    </div>
                                    <div class="vl-testimonial-box-content text-center pt-20 pb-30">
                                        <p>“Christainment Nigeria didn't just change my perspective on entertainment – it rekindled my passion for creative ministry and showed me how faith can truly inspire innovation.”</p>
                                    </div>
                                    <div class="vl-testimonial-box-auth vl-testimonial-box-auth-3 p-relative">
                                        <!-- <div class="vl-testimonial-box-auth-img">
                                            <img src="assets/img/testimonial/vl-testimonial-1.2.png" alt="">
                                        </div> -->
                                        <div class="vl-testimonial-box-auth-content">
                                            <h4 class="vl-testimonial-box-auth-title pb-10"><a href="#">Sarah O.</a></h4>
                                            <span>Film Maker</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonial slider end -->
                                <!-- single testimonial slider start -->
                                <div class="vl-testimonial-box vl-testimonial-box-3 p-relative br-8">
                                    <div class="vl-testimonial-box-icon text-center">
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                        <a href="#"><i class="fa-solid fa-star"></i></a>
                                    </div>
                                    <div class="vl-testimonial-box-content text-center pt-20 pb-30">
                                        <p>“Through CTN, we've seen young artists discover their God-given talents and use them to spread hope and inspiration across Nigeria.”</p>
                                    </div>
                                    <div class="vl-testimonial-box-auth vl-testimonial-box-auth-3 p-relative">
                                        <!-- <div class="vl-testimonial-box-auth-img">
                                            <img src="assets/img/testimonial/vl-testimonial-1.2.png" alt="">
                                        </div> -->
                                        <div class="vl-testimonial-box-auth-content">
                                            <h4 class="vl-testimonial-box-auth-title pb-10"><a href="#">Pastor Michael E.</a></h4>
                                            <span>Minister</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonial slider end -->
                            </div>

                            <!-- arrow -->
                            <div class="btn-wrap-4">
                                <button class="prev-btn"><i class="fa-regular fa-arrow-left"></i></button>
                                <button class="next-btn"><i class="fa-regular fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= Testimonial section End =================-->

        <!--================= Success section start =================-->
        <section class="vl-success p-relative z-index-1 pt-100 pb-70">
            <div class="container">
                <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Work process</h4>
                    <h2 class="vl-section-title vl-blc-text-4 pt-16">How We Get Things Done</h2>
                </div>
                <div class="row">
                    <!-- single success icbox start -->
                    <div class="col-lg-3 col-md-6">
                        <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                            <div class="vl-success-box-icon vl-success-box-icon-3">
                                <span><img src="assets/img/icons/vl-work-3.1.svg" alt=""></span>
                                <div class="vl-success-box-icon-3-number">
                                    <cite>01</cite>
                                </div>
                                <div class="vl-success-box-3-arow d-none d-md-block">
                                    <img src="assets/img/icons/vl-arow-4.1.svg" alt="">
                                    <img class="arow-active" src="assets/img/icons/vl-work-pro-arow.svg" alt="">
                                </div>
                            </div>
                            <div class="vl-success-box-desc">
                                <h3 class="vl-success-box-title pt-32 pb-16"><span>Discerning God's Vision</span></h3>
                                <p>We begin by seeking the Lord's direction, aligning our hearts and plans with His purpose.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single success icbox end -->

                    <!-- single success icbox start -->
                    <div class="col-lg-3 col-md-6">
                        <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <div class="vl-success-box-icon vl-success-box-icon-3">
                                <span><img src="assets/img/icons/vl-work-3.2.svg" alt=""></span>
                                <div class="vl-success-box-icon-3-number">
                                    <cite>02</cite>
                                </div>
                                <div class="vl-success-box-3-arow d-none d-md-block">
                                    <img src="assets/img/icons/vl-arow-4.1.svg" alt="">
                                    <img class="arow-active" src="assets/img/icons/vl-work-pro-arow.svg" alt="">
                                </div>
                            </div>
                            <div class="vl-success-box-desc">
                                <h3 class="vl-success-box-title pt-32 pb-16"><span>Crafting Anointed Experiences</span></h3>
                                <p>Under the guidance of the Holy Spirit, our team carefully designs transformative ministry programs.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single success icbox end -->

                    <!-- single success icbox start -->
                    <div class="col-lg-3 col-md-6">
                        <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
                            <div class="vl-success-box-icon vl-success-box-icon-3">
                                <span><img src="assets/img/icons/vl-work-3.3.svg" alt=""></span>
                                <div class="vl-success-box-icon-3-number">
                                    <cite>03</cite>
                                </div>
                                <div class="vl-success-box-3-arow d-none d-md-block">
                                    <img src="assets/img/icons/vl-arow-4.1.svg" alt="">
                                    <img class="arow-active" src="assets/img/icons/vl-work-pro-arow.svg" alt="">
                                </div>
                            </div>
                            <div class="vl-success-box-desc">
                                <h3 class="vl-success-box-title pt-32 pb-16"><span>Empowering Ongoing Impact</span></h3>
                                <p>We continuously monitor and refine our initiatives to ensure lasting spiritual and community transformation.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single success icbox end -->

                    <!-- single success icbox start -->
                    <div class="col-lg-3 col-md-6">
                        <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                            <div class="vl-success-box-icon vl-success-box-icon-3">
                                <span><img src="assets/img/icons/vl-work-3.4.svg" alt=""></span>
                                <div class="vl-success-box-icon-3-number">
                                    <cite>04</cite>
                                </div>
                            </div>
                            <div class="vl-success-box-desc">
                                <h3 class="vl-success-box-title pt-32 pb-16"><span>Launching with Excellence</span></h3>
                                <p>With prayer and diligence, we execute our ministry offerings with the highest standards of excellence.</p>
                            </div>
                        </div>
                    </div>
                    <!-- single success icbox end -->
                </div>
            </div>
        </section>
        <!--================= Success section End =================-->

        <!--================= Faq section start =================-->
        <section class="vl-faq vl-gray-bg-2 pt-100 pb-70">
            <div class="container">
                <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Frequently Asked Questions</h4>
                    <h2 class="vl-section-title vl-blc-text-4 pt-16">Your Questions Answered</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                        <div class="accordion" id="accordionExample">
                            <!-- single item -->
                            <div class="vl-accordion-item mb-20">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Christainment Nigeria (CTN)?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Christainment Nigeria is an interdenominational, faith-based organization dedicated to promoting Christian lifestyle and entertainment. We aim to provide excellent and safe platforms where believers can experience creative, Christ-centered programs and initiatives that inspire spiritual growth and transformation.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-accordion-item mb-20">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Is CTN affiliated with any specific church or denomination?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>No, Christainment Nigeria is interdenominational. We welcome individuals from all Christian denominations to participate in our programs and initiatives.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-accordion-item mb-20">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I volunteer or partner with CTN?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Yes! We’re always looking for passionate individuals and organizations to join hands with us. Reach out to us via email at christainmentng@gmail.com or through our contact form to explore partnership or volunteer opportunities.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-accordion-item mb-20">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        How can I support Christainment Nigeria?
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>You can support us by:</p>
                                        <ul>
                                            <li>a. Donating to our cause via our secure platforms or bank account: <br>
                                                Account Number: 4740385950 <br>
                                                Account Name: Christainment Nigeria <br>
                                                Bank Name: Moniepoint MFB</li>
                                            <li>b. Volunteering at our events and programs.</li>
                                            <li>c. Spreading the word about our initiatives.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- single item -->
                            <div class="vl-accordion-item mb-20">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        What is “The Balance” event?
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>The Balance is one of our flagship annual events, designed to merge faith, fun, and creativity. It features inspiring sessions, music, drama, and community building, reflecting our mission to provide excellent and transformative Christian entertainment.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= Faq section End =================-->


        <!--================= Blog section start =================-->
        <section class="vl-blog pt-100 pb-70">
            <div class="container">
                <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                    <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3">OUR BLOG</h4>
                    <h2 class="vl-section-title vl-blc-text-4 pt-16">Latest Insights & Updates</h2>
                </div>
                <div class="row">
                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.1.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">Cyber Service </a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Revolutionize Your Operations <br> with Our Expertise</a></h3>
                                <a href="blog-single.html" class="vl-readmore more3">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.2.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">It Management</a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Empowering Your Business with <br> Cutting-Edge Insights</a></h3>
                                <a href="blog-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>

                    <!-- single blog item -->
                    <div class="col-lg-4 col-md-6">
                        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1300">
                            <div class="vl-single-blog-img p-relative fix br-8">
                                <a href="blog-single.html"><img class="br-8 w-100" src="assets/img/blog/vl-blog-3.3.png" alt=""></a>
                                <div class="vl-single-blog-tag">
                                    <a href="#">It Service</a>
                                </div>
                            </div>
                            <div class="vl-single-blog-meta">
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-calender-3.1.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">10 October 2024</a>
                                    </div>
                                </div>
                                <!-- single metabox -->
                                <div class="vl-single-blog-meta-box pt-16 mr-16">
                                    <div class="vl-single-blog-meta-box-icon mr-4">
                                        <span><img src="assets/img/icons/vl-user-3.2.svg" alt=""></span>
                                    </div>
                                    <div class="vl-single-blog-meta-box-content meta-content-4">
                                        <a href="#">Shakib Mahmud</a>
                                    </div>
                                </div>
                            </div>
                            <div class="vl-single-blog-content vl-single-blog-content-3">
                                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="blog-single.html">Transform Your Business with <br> Innovative Solutions</a></h3>
                                <a href="blog-single.html" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================= Blog section End =================-->


    </main>
    <!-- footer -->
    <?php include "partials/footer.php"; ?>

    <!-- progress -->
    <div class="paginacontainer">
        <div class="progress-wrap progress-wrap3">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>

    <!-- js file -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from html.vikinglab.agency/otech/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2024 16:01:02 GMT -->

</html>