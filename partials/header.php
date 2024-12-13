<?php
if (isset($_SESSION["ctn_user"])) {
    $uId = $_SESSION["ctn_user"];
    $uInfo = new User($conn);
    $getInfo = $uInfo->getUser($uId);
    if ($getInfo["status"]) {
        $userInfo = $getInfo["data"];
    }
}

?>
<header>
    <div id="vl-header-sticky" class="vl-header-area vl-transparent-header vl-transparent-header-4">
        <div class="container vl-header-bg-3">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="vl-logo">
                        <a href="index.html"><img src="assets/img/logo/vl-logo-1.1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="vl-main-menu text-center">
                        <nav class="vl-mobile-menu-active">
                            <ul>
                                <li class="">
                                    <a href="#">Home</a>
                                </li>

                                <li><a href="about.php">About us</a></li>
                                <li class="has-dropdown"><a href="#">Programs <span><i class="fa-regular fa-angle-down"></i></span></a>
                                    <ul class="sub-menu sub-menu-3">
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Event Gallery</a></li>
                                        <li><a href="#">Conference</a></li>
                                        <li><a href="#">Vibes & Connect</a></li>
                                        <li><a href="#">Outdoor Voxpop & Games</a></li>
                                        <li><a href="#">Kiddies Corner</a></li>
                                    </ul>
                                </li>

                                <li class="">
                                    <a href="#">Support</a>
                                </li>
                                <li class="">
                                    <a href="#">Contact</a>
                                </li>


                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <?php if (isset($_SESSION["ctn_user"])): ?>
                        <div class="btn-group fl-right">
                            <button
                                class="btn btn-link text-light text-decoration-none dropdown-toggle"
                                type="button"
                                id="triggerId"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <?= $userInfo["firstname"] ?>
                            </button>
                            <div
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="triggerId">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>

                    <?php else: ?>
                        <div class="vl-hero-btn-3 d-none d-lg-block text-lg-end fl-right">
                            <a href="login.php" class="vl-btn-3">GET STARTED<span><i class="fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    <?php endif; ?>
                    <div class="vl-header-action-item d-block d-lg-none">
                        <button type="button" class="vl-offcanvas-toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                <rect x="10" width="20" height="2" fill="currentColor"></rect>
                                <rect x="5" y="7" width="25" height="2" fill="currentColor"></rect>
                                <rect x="10" y="14" width="20" height="2" fill="currentColor"></rect>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- offcanvas menu start -->
<div class="vl-offcanvas vl-offcanvas-3">
    <div class="vl-offcanvas-wrapper">
        <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-50">
            <div class="vl-offcanvas-logo">
                <a href="index.php"><img src="assets/img/logo/vl-logo-3.2.png" alt=""></a>
            </div>
            <div class="vl-offcanvas-close">
                <button class="vl-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
            </div>
        </div>

        <div class="vl-offcanvas-menu vl-offcanvas-menu-3 d-lg-none mb-40">
            <!-- auto js imported navbar -->
            <nav></nav>
        </div>

        <?php if (isset($_SESSION["ctn_user"])): ?>
            <div class="btn-group mb-30">
                <button
                    class="btn btn-success px-5 btn-block text-decoration-none dropdown-toggle"
                    style="width: 100%;"
                    type="button"
                    id="triggerId"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false">
                    <?= $userInfo["firstname"] ?>
                </button>
                <div
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="triggerId">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </div>

        <?php else: ?>
            <div class="vl-offcanvas-btnm text-center mb-30 w-100">
                <div class="vl-about-authbtn">
                    <a href="login.php" class="thme-btn3 w-100">Get Started <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
            </div>
        <?php endif; ?>


        <div class="vl-offcanvas-info mb-30">
            <h3 class="vl-offcanvas-sm-title pb-15">Contact Us</h3>

            <div class="vl-offcanvas-info-box mb-15">
                <div class="vl-offcanvas-info-box-icon">
                    <span><img src="assets/img/icons/vl-cta-ph-3.1.svg" alt=""></span>
                </div>
                <div class="vl-offcanvas-info-box-text">
                    <span><a href="tel:5799546476">+57 9954 6476</a></span>
                </div>
            </div>

            <div class="vl-offcanvas-info-box mb-15">
                <div class="vl-offcanvas-info-box-icon">
                    <span><img src="assets/img/icons/vl-cta-mail-3.2.svg" alt=""></span>
                </div>
                <div class="vl-offcanvas-info-box-text">
                    <span><a href="mailto:OTechItService.com">OTech It Service.com</a></span>
                </div>
            </div>

            <div class="vl-offcanvas-info-box mb-15">
                <div class="vl-offcanvas-info-box-icon">
                    <span><img src="assets/img/icons/vl-cta-mail-3.3.svg" alt=""></span>
                </div>
                <div class="vl-offcanvas-info-box-text">
                    <span><a href="mailto:OTechItService.com">8708 Technology, USA </a></span>
                </div>
            </div>
        </div>

        <div class="vl-offcanvas-social mb-40">
            <h3 class="vl-offcanvas-sm-title mb-15">Follow Us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

    </div>
</div>
<div class="vl-offcanvas-overlay"></div>
<!-- offcanvas menu end -->