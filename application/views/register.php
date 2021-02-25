<!doctype html>
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
        body { background: #ffffff }

    </style>
</head>
<body>
    <!-- App Header -->
    <div class="appHeader no-border">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack" onclick="goBack()">
                <ion-icon name="chevron-back-outline" role="img" class="md hydrated" aria-label="chevron back outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">GaramApp</div>
        <div class="right">
            <a href="<?= base_url('users') ?>" class="headerButton">
                Login
            </a>
        </div>
    </div>
    <!-- * App Header -->
    <div class="extraHeader">
        <ul class="nav nav-tabs style1" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#pilled" role="tab" aria-selected="true">
                    <ion-icon name="person-circle" role="img" class="md hydrated" aria-label="person circle"></ion-icon>
                    Buyer
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#lined" role="tab" aria-selected="false">
                    <ion-icon name="person-circle" role="img" class="md hydrated" aria-label="person circle"></ion-icon>
                    Seller
                </a>
            </li>
        </ul>
    </div>
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
    <div id="appCapsule" class="extra-header-active">


        <div class="tab-content mt-1">


            <!-- Buyer Register -->
            <div class="tab-pane fade active show" id="pilled" role="tabpanel">
<!-- buyer -->
                <div class="section full mt-1">
                    <div class="section text-center mt-2">
                        <h4>Jadilah bagian dari GaramApp<br>dengan menjadi calon pembeli cerdas.</h4>
                    </div>
                    <div class="section mt-1 mb-5">
                        <?php 
                        if($this->session->flashdata('validation')){
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <?= $this->session->flashdata('validation'); ?>
                                <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }

                        if($this->session->flashdata('success')){
                            ?>
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                <?= $this->session->flashdata('success'); ?>
                                <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }
                        ?>
                        <form method="POST" action="<?= base_url('users/account_add') ?>">
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="hidden" name="level" value="3">
                                    <input type="hidden" name="userid" value="<?= $data->user_id ?>">
                                    <input type="hidden" name="profileid" value="<?= $data->profile_id ?>">
                                    <input type="email" name="email" class="form-control" id="email1" placeholder="Alamat Email" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" name="username" class="form-control" id="name1" placeholder="Username" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="password" name="password" class="form-control" id="password1" placeholder="Password" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi Password" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class=" mt-1 text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customChecka1" required="">
                                    <label class="custom-control-label text-muted" for="customChecka1"><a href="javascript:;">Syarat &amp; Ketentuan berlaku</a></label>
                                </div>

                            </div>

                            <div class="form-button-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- * Buyer Register -->



            <!-- Seller Register -->
            <div class="tab-pane fade" id="lined" role="tabpanel">
<!-- seller -->
                <div class="section full mt-1">
                    <div class="section text-center mt-2">
                        <h4>Jadilah bagian dari GaramApp<br>dengan menjadi penyedia stok garam terpercaya..</h4>
                    </div>
                    <div class="section mt-1 mb-5">
                        <?php 
                        if($this->session->flashdata('validation')){
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                <?= $this->session->flashdata('validation'); ?>
                                <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }

                        if($this->session->flashdata('success')){
                            ?>
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                <?= $this->session->flashdata('success'); ?>
                                <!-- <strong>Holy guacamole!</strong> You should check in on some of those fields below. -->
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php
                        }
                        ?>
                        <form method="POST" action="<?= base_url('users/account_add') ?>">
                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="hidden" name="level" value="2">
                                    <input type="hidden" name="userid" value="<?= $data->user_id ?>">
                                    <input type="hidden" name="profileid" value="<?= $data->profile_id ?>">
                                    <input type="email" name="email" class="form-control" id="email1" placeholder="Alamat Email" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="text" name="username" class="form-control" id="name1" placeholder="Username" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="password" name="password" class="form-control" id="password1" placeholder="Password" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class="form-group boxed">
                                <div class="input-wrapper">
                                    <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi Password" required="">
                                    <i class="clear-input">
                                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                    </i>
                                </div>
                            </div>

                            <div class=" mt-1 text-left">
                                <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheckb1">
                                        <label class="custom-control-label" for="customCheckb1">
                                            <a href="javascript:;">Syarat &amp; Ketentuan berlaku</a></label>
                                </div>

                            </div>

                            <div class="form-button-group">
                                <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- * Seller Register -->
        </div>
    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    <div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    	<div class="modal-dialog" role="document">
    		<div class="modal-content">
    			<div class="modal-body p-0">

    				<!-- profile box -->
    				<div class="profileBox">
    					<div class="image-wrapper">
    					</div>
    					<div class="in">
    						<strong>Julian Gruber</strong>
    						<div class="text-muted">
    							<ion-icon name="location"></ion-icon>
    							California
    						</div>
    					</div>
    					<a href="javascript:;" class="close-sidebar-button" data-dismiss="modal">
    						<ion-icon name="close"></ion-icon>
    					</a>
    				</div>
    				<ul class="listview image-listview flush transparent no-line">
    					<li>
    						<div class="item">
    							<div class="icon-box bg-primary">
    								<ion-icon name="moon-outline"></ion-icon>
    							</div>
    							<div class="in">
    								<div>Dark Mode</div>
    								<div class="custom-control custom-switch">
    									<input type="checkbox" class="custom-control-input dark-mode-switch"
    									id="darkmodesidebar">
    									<label class="custom-control-label" for="darkmodesidebar"></label>
    								</div>
    							</div>
    						</div>
    					</li>
    				</ul>
    			</div>

    			<!-- sidebar buttons -->
    			<div class="sidebar-buttons">
    				<a href="javascript:;" class="button">
    					<ion-icon name="person-outline"></ion-icon>
    				</a>
    				<a href="javascript:;" class="button">
    					<ion-icon name="archive-outline"></ion-icon>
    				</a>
    				<a href="javascript:;" class="button">
    					<ion-icon name="settings-outline"></ion-icon>
    				</a>
    				<a href="javascript:;" class="button">
    					<ion-icon name="log-out-outline"></ion-icon>
    				</a>
    			</div>
    			<!-- * sidebar buttons -->
    		</div>
    	</div>
    </div>
    <!-- * App Sidebar -->

    <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="/assets/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>Mobilekit</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Mobilekit</h3>
                    <div class="text">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->
    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.5.1.min.js'); ?>"></script>
    <!-- Bootstrap-->
    <script type="text/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <!-- Ionicons -->
    <script type="module" src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.esm.js" async></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/ionicons@5.0.0/dist/ionicons/ionicons.js" async></script>
    <script>
		function goBack() {
			window.history.back();
		}
        $('#tab').on('click', () => { 
            <?php
            $this->session->set_flashdata('validation','');
            $this->session->set_flashdata('success','');
            ?>
        });
        $('#lined').on('click', () => { 
            <?php
            $this->session->set_flashdata('validation','');
            $this->session->set_flashdata('success','');
            ?>
        });
	</script>
</body>
</html>