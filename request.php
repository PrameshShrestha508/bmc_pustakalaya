
<?php 

error_reporting(1);
 session_start();
 include("config.php");
if(isset($_POST['request_save'])){
    $name=$_POST['contact_name'];
    $email=$_POST['contact_email'];
    $book_types=$_POST['types'];
    $request_message=$_POST['book_request'];


$result=mysqli_query($connection,"insert into request(contact_name,contact_email,book_types,book_request) values('$name','$email','$book_types','$request_message')");
if($result)
{
    echo '<script>
    alert("Your request has been sent");
    window.location.href="index.php";
    </script>';
}
else
{
header("location:request.php");
}

}



?>






<?php include('includes/header.php');?>
    <!-- Main Wrapper Start -->
    <div class="wrapper">
        <!-- Header Area Start -->
        <?php include('includes/navbar-full.php');?>
        <!-- Header Header area End -->

        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Request For Books</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Request for books</span></li>
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
                    <div class="row pt--5 pt-md--10 pt-sm--10 pb--80 pb-md--60 pb-sm--35">
                        <div class="col-md-6 mb-sm--30 m-auto">
                            <h2 class="heading-secondary mb--50 mb-md--35 mb-sm--20">Request For Books</h2>

                            <!-- Contact form Start Here -->
                            <form class="form" action="" method="post">
                                <div class="form__group mb--20">
                                    <input type="text" id="contact_name" name="contact_name"
                                        class="form__input form__input--2" placeholder="Your name*">
                                </div>
                                <div class="form__group mb--20">
                                    <input type="email" id="contact_email" name="contact_email"
                                        class="form__input form__input--2" placeholder="Email Address*">
                                </div>
                                <div class="form__group mb--20">
                                    <select class="form__input form__input--2" name="types">
                                        <option data-display="newbook">NewBook</option>
                                        <option value="oldbook">OldBook</option>
                                    </select>
                                </div>
                                <div class="form__group mb--20">
                                    <textarea class="form__input form__input--textarea" id="book_name"
                                        name="book_request" placeholder="Books Details(Book Name, Author,Edition and Publication House)*"></textarea>
                                </div>
                                <div class="form__group">
                                    <input type="submit" name="request_save" value="Send" class="btn btn-submit btn-style-1">
                                </div>
                                <div class="form__output"></div>
                            </form>
                            <!-- Contact form end Here -->

                        </div>


                      


                    </div>
                </div>
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div id="google-map">

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