<?php
  session_start();
  if(isset($_SESSION["role_id"]) && $_SESSION["role_id"] == "0")
  {
    header('location:index.php');
  }
?>
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

        <!-- TITLE -->
        <title>Sash – PHP Bootstrap 5 Admin & Dashboard Template</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/dark-style.css" rel="stylesheet" />
        <link href="assets/css/transparent-style.css" rel="stylesheet">
        <link href="assets/css/skin-modes.css" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="assets/css/icons.css" rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

        <!-- INTERNAL SWITCHER CSS -->
        <link href="assets/switcher/css/switcher.css" rel="stylesheet" />
        <link href="assets/switcher/demo.css" rel="stylesheet" />


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>

    <body class="app sidebar-mini ltr login-img">

        <!-- SWITCHER -->
        
		<div class="switcher-wrapper">
			<div class="demo_changer">
				<div class="form_holder sidebar-right1">
					<div class="row">
						<div class="predefined_styles">
							<div class="swichermainleft text-center">
								<div class="p-3 d-grid gap-2">
									<a href="https://php.spruko.com/sash/" class="btn ripple btn-primary mt-0">View Demo</a>
									<a href="https://themeforest.net/item/sash-php-admin-dashboard-template/38192327" class="btn ripple btn-secondary">Buy Now</a>
									<a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink">Our Portfolio</a>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>LTR and RTL VERSIONS</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">LTR Version</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch23" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">RTL Version</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch7" id="myonoffswitch24" class="onoffswitch2-checkbox">
												<label for="myonoffswitch24" class="onoffswitch2-label"></label>
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Light Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch1" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex">
											<span class="me-auto">Light Primary</span>
											<div class="">
												<input class="w-30p h-30 input-color-picker color-primary-light" value="#6c5ffc" id="colorID" oninput="changePrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id7="transparentcolor" name="lightPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Dark Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
												<label for="myonoffswitch2" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Dark Primary</span>
											<div class="">
												<input class="w-30p h-30 input-dark-color-picker color-primary-dark" value="#6c5ffc" id="darkPrimaryColorID" oninput="darkPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id8="transparentcolor"
													name="darkPrimary">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Theme Style</h4>
								<div class="skin-body">
									<div class="switch_section">
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Transparent Theme</span>
											<p class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitchTransparent" class="onoffswitch2-checkbox">
												<label for="myonoffswitchTransparent" class="onoffswitch2-label"></label>
											</p>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Transparent Primary</span>
											<div class="">
												<input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentPrimaryColorID" oninput="transparentPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary"
													data-id4="primary" data-id9="transparentcolor" name="tranparentPrimary">
											</div>
										</div>
										<div class="switch-toggle d-flex mt-2">
											<span class="me-auto">Transparent Background</span>
											<div class="">
												<input class="w-30p h-30 input-transparent-color-picker color-bg-transparent" value="#362bb1" id="transparentBgColorID" oninput="transparentBgColor()" type="color" data-id5="body" data-id6="theme" data-id9="transparentcolor" name="transparentBackground">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Transparent Bg-Image Style</h4>
								<div class="skin-body switch_section">
									<div class="switch-toggle d-flex">
										<span class="me-auto">Bg-Image Primary</span>
										<div class="">
											<input class="w-30p h-30 input-transparent-color-picker color-primary-transparent" value="#6c5ffc" id="transparentBgImgPrimaryColorID" oninput="transparentBgImgPrimaryColor()" type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" data-id3="primary" data-id4="primary"  data-id9="transparentcolor" name="tranparentPrimary">
										</div>
									</div>
									<div class="switch-toggle d-flex mt-2">
										<a class="bg-img1" href="javascript:void(0);" onclick="bgImage(this)"><img src="assets/images/media/bg-img1.jpg"  alt="Bg-Image" id="bgimage1"></a>
										<a class="bg-img2" href="javascript:void(0);" onclick="bgImage(this)"><img src="assets/images/media/bg-img2.jpg"  alt="Bg-Image"  id="bgimage2"></a>
										<a class="bg-img3" href="javascript:void(0);" onclick="bgImage(this)"><img src="assets/images/media/bg-img3.jpg"  alt="Bg-Image" id="bgimage3"></a>
										<a class="bg-img4" href="javascript:void(0);" onclick="bgImage(this)"><img src="assets/images/media/bg-img4.jpg"  alt="Bg-Image" id="bgimage4"></a>
									</div>
								</div>
							</div>
							<div class="swichermainleft">
								<h4>Reset All Styles</h4>
								<div class="skin-body">
									<div class="switch_section my-4">
										<button class="btn btn-danger btn-block" onclick="localStorage.clear();
											document.querySelector('html').style = '';
											names() ;
											resetData() ;" type="button">Reset All
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>        <!-- END SWITCHER -->

        <!-- BACKGROUND-IMAGE -->
        <div class="">

            <!-- GLOABAL LOADER -->
            <div id="global-loader">
                <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>
            <!-- /GLOABAL LOADER -->

            <!-- PAGE -->
            <div class="page">
                <div class="">
                    <div class="dropdown float-end custom-layout">
                        <div class="demo-icon nav-link icon mt-4">
                            <i class="fa fa-settings fa-spin text_primary"></i>
                        </div>
                    </div>
                    <!-- Theme-Layout -->

                    <!-- CONTAINER OPEN -->
                    <div class="col col-login mx-auto mt-1">
                        <!-- <div class="text-center">
                            <a href="index.php"><img src="assets/images/brand/logo-white.png" class="header-brand-img" alt=""></a>
                        </div> -->
                    </div>
                        
                    <div class="container-login100">
                        <div class="wrap-login100 p-6">
                            <form class="login100-form validate-form" method="POST">
                                <span class="login100-form-title pb-5">
                                    Login
                                </span>
                                <div class="panel panel-primary">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <!-- <ul class="nav panel-tabs">
                                                <li class="mx-0"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a></li>
                                                <li class="mx-0"><a href="#tab6" data-bs-toggle="tab">Mobile</a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body p-0 pt-5">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab5">

                                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0" type="email" name="email" placeholder="Email">
                                                </div>
                                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0" type="password" name="password" placeholder="Password">
                                                </div>
                                                <div class="container-login100-form-btn">
                                                    <button class="login100-form-btn btn-primary" name="btn_admin_login">Login</button>
                                                </div>


                                                <?php

                                                    if(isset($_POST["btn_admin_login"]))
                                                    {
                                                        $email = $_POST["email"];
                                                        $pass = $_POST["password"];

                                                        require_once("connection.php");

                                                        $chk_email = "SELECT * FROM `users` WHERE `email` = '$email'";
                                                        $exe_email = mysqli_query($conn,$chk_email);
                                                        $email_rows = mysqli_num_rows($exe_email);
                                                        if($email_rows > 0)
                                                        {
                                                            $chk_pass = "SELECT * FROM `users` WHERE `email` = '$email' and `password` = '$pass'";
                                                            $exe_pass = mysqli_query($conn,$chk_pass);
                                                            $pass_rows = mysqli_num_rows($exe_pass);
                                                            if($pass_rows > 0)
                                                            {
                                                                $data = mysqli_fetch_array($exe_pass);
                                                                $role = $data[1];
                                                                $namez =  $data[3];
                                                                if($role == "0")
                                                                {
                                                                    $_SESSION["name"] = $namez;
                                                                    $_SESSION["role_id"] = "0";

                                                                    ?>
                                                                        <script>
                                                                            window.location.href = "index.php";
                                                                        </script>
                                                                    <?php
                                                                    // header("location:index.php");

                                                                }
                                                                else
                                                                {
                                                                    ?>
                                                                        <script>
                                                                        alert("sorry you can't access");
                                                                        window.location.href="login.php";
                                                                        </script>
                                                                    <?php
                                                                }
                                                            }
                                                            else
                                                            {
                                                                ?>
                                                                    <script>
                                                                    alert("Password is wrong");
                                                                    window.location.href="login.php";
                                                                    </script>
                                                                <?php
                                                            }
                                                        } 
                                                        else
                                                        {
                                                            ?>
                                                                    <script>
                                                                    alert("Email is wrong");
                                                                    window.location.href="login.php";
                                                                    </script>
                                                            <?php
                                                        }
                                                    }

                                                ?>

                                                <!-- <div class="text-center pt-3">
                                                    <p class="text-dark mb-0">Not a member?<a href="register.php" class="text-primary mx-1">Sign UP</a></p>
                                                </div> -->
                                                <!-- <l`abel class="login-social-icon"><span>Login with Social</span></label>
                                                <div class="d-flex justify-content-center">
                                                    <a href="javascript:void(0)">
                                                        <div class="social-login me-4 text-center">
                                                            <i class="fa fa-google"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <div class="social-login me-4 text-center">
                                                            <i class="fa fa-facebook"></i>
                                                        </div>
                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <div class="social-login text-center">
                                                            <i class="fa fa-twitter"></i>
                                                        </div>
                                                    </a>
                                                </div> -->
                                            </div>
                                            <!-- <div class="tab-pane" id="tab6">
                                                <div id="mobile-num" class="wrap-input100 validate-input input-group mb-4">
                                                    <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                        <span>+91</span>
                                                    </a>
                                                    <input class="input100 border-start-0 form-control ms-0">
                                                </div>
                                                <div id="login-otp" class="justify-content-around mb-5">
                                                    <input class="form-control text-center w-15" id="txt1" maxlength="1">
                                                    <input class="form-control text-center w-15" id="txt2" maxlength="1">
                                                    <input class="form-control text-center w-15" id="txt3" maxlength="1">
                                                    <input class="form-control text-center w-15" id="txt4" maxlength="1">
                                                </div>
                                                <span>Note : Login with registered mobile number to generate OTP.</span>
                                                <div class="container-login100-form-btn ">
                                                    <a href="index.php" class="login100-form-btn btn-primary" id="generate-otp">
                                                        Proceed
                                                    </a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!-- End PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->

        
        <!-- JQUERY JS -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- PERFECT SCROLLBAR JS-->
        <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

        <!-- THEME COLORS JS  -->
        <script src="assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="assets/js/custom.js"></script>

        <!-- SWITCHER JS -->
        <script src="assets/switcher/js/switcher.js"></script>
        

        <!-- SHOW PASSWORD JS -->
        <script src="assets/js/show-password.min.js"></script>

        <!-- GENERATE OTP JS -->
        <script src="assets/js/generate-otp.js"></script>

    </body>

</html>