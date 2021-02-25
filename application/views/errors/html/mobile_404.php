<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="preload" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:400,500,700&amp;display=swap" async>
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>" async>
    <link rel="stylesheet" href="<?= base_url('/assets/css/helper.css') ?>" async>
    <style type="text/css">
        .p-5px{padding:5px}.card .card-body{padding:5px;line-height:1.4em}.bg-white{background:#fff}
        body.dark-mode-active .appHeader.scrolled.bg-primary.is-active {
            background: #16417f !important;
        }
        body.dark-mode-active .bg-primary {
            background: #16417f !important;
            color: #FFF;
        }
        body.dark-mode-active .profileBox {
            background: #16417f !important;
        }
        body.dark-mode-active .dark-mode-image {
            filter:invert(1);mix-blend-mode:screen
        }
        .swiper-container {
            width: 100%;
            height: 100%;
        }
        .profile-head {
            display: flex;
            align-items: center;
        }
        .profile-head .avatar {
            margin-right: 16px;
        }
        .card.product-card .image {
            width: 100%;
            border-radius: 6px;
        }
        .card.product-card .card-body {
            padding: 8px;
        }

    </style>
</head>
<body class="bg-white" data-new-gr-c-s-check-loaded="14.996.0" data-gr-ext-installed="">

    <!-- loader -->
    <div id="loader" style="display: none;">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <div class="left"></div>
        <div class="pageTitle"></div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="error-page">
            <img src="https://mobilekit.bragherstudio.com/view8/assets/img/sample/photo/vector6.png" alt="alt" class="imaged square w200">
            <h1 class="title"><?php echo $heading; ?></h1>
            <div class="text mb-5">
                <?php echo $message; ?>.
            </div>

            <div class="fixed-footer">
                <div class="row">
                    <div class="col-12">
                        <a href="javascript:window.history.back();" class="btn btn-primary btn-lg btn-block">Go Back</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- * App Capsule -->


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
</body>
</html>