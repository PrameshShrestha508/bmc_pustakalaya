

   <?php 
   error_reporting(1);
   session_start();
   include('includes/header.php');?>

  
  <!-- Main Wrapper Start -->
<div class="wrapper enable-header-transparent">
        <?php include('includes/navbar.php');?>

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">

                    <!-- Banner starts -->
                <?php include('includes/banner.php');?>
                    <!-- Banner Ends -->

            <!-- Video section Start Here -->
            <div  class="video-section-area pt--80 pb--40 pt-md--60 pb-md--30">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="text-block">
                                <figure class="mb--30 mb-md--20 max-w-60">
                                    <img src="assets/img/logo/bmc2.png" alt="logo">
                                </figure>

                                <p class="font-2 heading-color font-size-16 mb--30 mb-md--20">BMC Pustakalaya is an online bookstore with a mission to financially support local, independent bookstores. We believe that bookstores are essential to a healthy culture. They’re where authors can connect with readers, where we discover new writers, where children get hooked on the thrill of reading that can last a lifetime. They’re also anchors for our downtowns and communities. As more and more people buy their books online, we wanted to create an easy, convenient way for you to get your books and support bookstores at the same time.</p>
                                <a href="shop-sidebar.php" class="heading-button mb-sm--30">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure class="image-box image-box-w-video-btn">
                                <a href="https://www.youtube.com/watch?v=ToVcPM7EjoA" class="video-popup">
                                    <img src="assets/img/slider/home-01/library.jpg" alt="banner">
                                    <span class="video-btn"></span>
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video section End Here -->

            <!-- Trending Products area Start Here -->
            <section class="trending-products-area pt--30 pb--80 pt-md--20 pb-md--60">
                <div class="container-fluid">
                    <div class="row mb--40 mb-md--30">
                        <div class="col-12">
                            <h2 class="heading-secondary text-center">Trending</h2>
                        </div>
                    </div>
                    <div class="row">

                                            <?php
                                                include('config.php');
                                                $query = "SELECT * FROM nbook  LIMIT 8";
                                                $query_run = mysqli_query($connection, $query);
                                                if(mysqli_num_rows($query_run) > 0)        
                                                {
                                                    while($row = mysqli_fetch_assoc($query_run))
                                                    {
                                                        $i=$row['new_id'];
                                            ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                            <div class="airi-product">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>">
                                                <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" alt="Product Image"
                                                    class="primary-image">
                                                <img src="<?php echo 'assets/img/nbook/'.$row['image'];?>" alt="Product Image"
                                                    class="secondary-image">
                                            </a>
                                        </div>
                                        <div class="airi-product-action">
                                            <div class="product-action">
                                                <a class="quickview-btn action-btn" href="product-details.php?itemno=<?php echo $row['new_id']; ?>"
                                                    data-toggle="tooltip" data-placement="top" title="Quick view">
                                                    <i class="dl-icon-view"></i>
                                                </a>
                                                <a class="add_to_cart_btn action-btn" href="addtocart.php?itemno=<?php echo $row['new_id'];?>"
                                                    data-toggle="tooltip" data-placement="top" title="Add to Cart">
                                                    <i class="dl-icon-cart29"></i>
                                                </a>
                                                <a class="action-btn" href="checkout-direct.php?itemno=<?php echo $row['new_id'];?>"
                                                        data-toggle="tooltip" data-placement="top" title="Order Now">
                                                    <i class="fa fa-money"></i>
                                                </a>
                                                <!-- <a class="add_wishlist action-btn" href="wishlist.php"
                                                    data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                    <i class="dl-icon-heart4"></i>
                                                </a>
                                                <a class="add_compare action-btn" href="compare.php"
                                                    data-toggle="tooltip" data-placement="top" title="Add to Compare">
                                                    <i class="dl-icon-compare"></i>
                                                </a> -->
                                            </div>
                                        </div>
                                    </figure>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['newbook'].' by';?></a>
                                            <br><a href="product-details.php?itemno=<?php echo $row['new_id']; ?>"><?php echo $row['Author']; ?></a>
                                        </h3>
                                        <span class="product-price-wrapper">
                                            <span class="money"><?php echo 'NRS. '.$row['Price']; ?></span>
                                            
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <?php }}?>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="newbook.php" class="heading-button">Shop Now</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Trending Products area End Here -->



            <!-- Newsletter area Start Here -->
            <section class="newsletter-area bg--gray pt--30 pt-md--25 pb--40 pb-md--30">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="newsletter-box text-center">
                                <h2 class="heading-secondary mb--20">Join Our Newsletter</h2>
                                <p class="heading-color font-size-16 font-bold lts-2 mb--30">GET 15% OFF YOUR FIRST
                                    ORDER</p>
                                <form
                                    action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                                    class="newsletter-form mc-form" method="post" target="_blank">
                                    <input type="email" name="newsletter_email" id="newsletter_email"
                                        placeholder="Enter your email address.." required="required"
                                        class="newsletter-form__input">
                                    <button type="submit" class="newsletter-form__submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div>
                                <!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Newsletter area End Here --> 

        </div>
        <!-- Main Content Wrapper Start -->
        <!-- Footer Start -->
            <?php include('includes/footer.php');?>
         <!-- Footer End -->

        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform" action="search-new.php" method="post">
                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Books...">
                    
                </form>
            </div>
        </div>

        
        <!-- Search from End -->

        <!-- Side Navigation Start -->
            <?php include('includes/side-navigation.php'); ?>
         <!-- Side Navigation End -->

      

      <!-- Modal starts -->  
      <?php include('includes/model.php'); ?>
        <!-- Modal End -->
        

</div>
<!-- Main Wrapper End -->


<?php include('includes/scripts.php');?>


</body>



</html>