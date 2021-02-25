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
    <!-- <link rel="stylesheet" href="https://res.cloudinary.com/taqin/raw/upload/v1586263241/assets/css/style_i2j0lr.css"> -->
    <link rel="stylesheet" href="<?= base_url('/assets/css/helper.css') ?>" async>
    <!-- <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js" data-stencil-namespace="ionicons"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js" data-stencil-namespace="ionicons"></script> -->
    <!-- <link rel="manifest" href="/__manifest.json"> -->
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
<body>
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- App Header -->
    <div class="appHeader bg-primary scrolled is-active text-white">
        <div class="left">
            <a href="#" class="headerButton" hidden="" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            <!-- Rotib Al Hadad -->
            PT SAMI
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox" hidden="">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form" hidden="">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule --> <!-- Content -->
    <div id="appCapsule">
        <div class="header-large-title">
            <h4 class="subtitle">Sistem Pengambil Keputusan Penerimaan Karyawan di PT SAMI-JF</h4>
        </div>
        <div class="section mt-2">
            <?php if ($this->session->flashdata('success') !== NULL) {
                ?>
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
            } else {
                echo "";
            }
            ?>
            <div class="subtitle">Calon Karyawan</div>
            <div class="card">
                <ul class="listview flush transparent image-listview">
                    <li>
                        <a href="<?= base_url('profile') ?>" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="people-outline" role="img" class="md hydrated" aria-label="home"></ion-icon>
                            </div>
                            <div class="in">
                                Data Pelamar
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('profile/input') ?>" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="add-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Input Data Pelamar</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="section mt-2">
            <div class="subtitle">Penerimaan Karyawan</div>
            <div class="card">
                <ul class="listview flush transparent image-listview">
                    <li>
                        <a href="<?= base_url('result') ?>" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline" role="img" class="md hydrated" aria-label="home"></ion-icon>
                            </div>
                            <div class="in">
                                Data Hasil Tes
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('result/input') ?>" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="add-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Input Nilai Tes</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- app footer -->

        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <div class="appBottomMenu">
        <a href="<?= base_url('users/account') ?>" class="item" id="__prevPage">
            <div class="col">
                <ion-icon name="person-circle-outline"></ion-icon>
                <span class="text-dark">Account</span>
            </div>
        </a>
        <a href="<?= base_url('users/dashboard_admin') ?>" class="item">
            <div class="col">
                <ion-icon name="map-outline"></ion-icon>
                <span class="text-dark">Home</span>
            </div>
        </a>
        <a href="<?= base_url('users/logout') ?>" class="item" id="__nextPage">
            <div class="col">
                <ion-icon name="log-out-outline"></ion-icon>
                <span class="text-dark">Logout</span>
            </div>
        </a>
    </div>
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <!-- * welcome notification -->
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <!-- Bootstrap-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Ionicons -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.esm.js" async></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.js" async></script>
</body>
</html>