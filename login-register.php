<?php 
error_reporting(1);
session_start();
include('includes/header.php');
?>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Login &amp; Register</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Login Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-md-6 mb-sm--30">
                            <div class="login-box">
                                <h4 class="mb--35 mb-sm--20">Login</h4>
                                <form class="form form--login" action="login-register-code.php" method="post">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Username
                                             <span class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="uname"
                                            name="uname">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password"
                                            name="password">
                                    </div>
                                    <div class="d-flex align-items-center mb--20">
                                        <div class="form__group">
                                            <input type="submit" value="Log in" name="lsubmit" class="btn btn-submit btn-style-1">
                                        </div>
                                        
                                    </div>
                                    <a class="forgot-pass" href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="register-box">
                                <h4 class="mb--35 mb-sm--20">Register</h4>
                                <form class="form form--login" action="login-register-code.php" method="post">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username">UserName  <span
                                                class="required">*</span></label>
                                        <input type="hidden" class="form__input form__input--3" id="service" name="service" value="REG">
                                        <input type="hidden" class="form__input form__input--3" id="usertype" name="usertype" value="USER">
                                        <input type="text" class="form__input form__input--3" id="uname" name="uname">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Email address <span
                                                class="required">*</span></label>
                                        <input type="email" class="form__input form__input--3" id="email" name="email">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Phone No <span
                                                class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="phone" name="phone">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="email">Address <span
                                                class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="address" name="address">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password"
                                            name="password">
                                    </div>
                                   
                                    <div class="form__group">
                                        <input type="submit" value="Register" name="rsubmit" class="btn btn-submit btn-style-1">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


            <!-- Footer Start -->
            <?php include('includes/footer2.php');?>
        <!-- Footer End -->


        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End -->

        <!-- Side Navigation Start -->
        <?php include('includes/side-navigation.php');?>
        <!-- Side Navigation End -->

        <!-- Modal Start -->
        <?php include('includes/model.php');?>
        <!-- Modal End -->



    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    
    <?php include('includes/scripts.php');?>


</body>



</html>