<?php
error_reporting(1);
session_start();
if(!$_SESSION['username'])
{   
    echo '<script>
    alert("Please Login first");
    window.location.href="login-register.php";
    </script>';
}
include('includes/header.php');?>
<style>
.table-content {
padding:15px;
border:3px solid #dee2e6;
width: fit-content
}
.table-content{
  white-space: nowrap;
  font-size: 14px;
  
}

.table-content table th,
.table-content .table th {
  padding: 10px;
  font-weight: 600;
  background-color: #ee3231;
  border-color: #ccc;
  border-bottom: 0;
  color: #fff;
}

.table-content table td,
.table-content .table td {
  padding: 10px;
  padding:15px 0;
  vertical-align: middle;
  border:1px solid #dee2e6;
  font-size:15px;
  text-align:center;
}
#orders{
    max-width:1000px;
}

</style>
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
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>My Account</span></li>
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
                    <div class="row pt--80 pt-md--60 pt-sm--40 pb--80 pb-md--60 pb-sm--40">
                        <div class="col-12">
                            <div class="user-dashboard-tab flex-column flex-md-row">
                                <div class="user-dashboard-tab__head nav flex-md-column" role="tablist"
                                    aria-orientation="vertical">
                                    <a class="nav-link active" data-toggle="pill" role="tab" href="#dashboard"
                                        aria-controls="dashboard" aria-selected="true">Dashboard</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#orders"
                                        aria-controls="orders" aria-selected="true">Orders</a>
                                    
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#rentbook"
                                        aria-controls="rentbook" aria-selected="true">RentBookStatus</a>
                                    <a class="nav-link" data-toggle="pill" role="tab" href="#accountdetails"
                                        aria-controls="accountdetails" aria-selected="true">Account Details</a>
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </div>
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        <p>Hello <strong><?php echo $_SESSION['username'];?></strong> (not <strong><?php echo $_SESSION['username'];?></strong>? <a
                                                href="logout.php">Log out</a>)</p>
                                        <p>From your account dashboard. you can easily check &amp; view your <a
                                                href="#">recent orders</a>, manage your <a href="#">shipping and billing
                                                addresses</a> and <a href="#">edit your password and account details</a>.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                            <a href="shop-sidebar.php">Go Shop</a>
                                        </div>
                                        <div class="table-content table-responsive">
                                            <?php
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT * FROM orders where name='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                            ?>
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th>COUNTRY</th> -->
                                                            <th>ORDER No</th>
                                                            <th>USERNAME</th>
                                                          
                                                            <th>PHONE</th>
                                                            <th>ADDRESS</th>
                                                            <th>BOOKNAME</th>
                                                            <th>SEM</th>
                                                            <th>PRICE</th>
                                                            <th>DATE</th>
                                                            <th>PAYMENT</th>
                                                            <th>Cancel</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            if(mysqli_num_rows($query_run) > 0)        
                                                            {
                                                                while($row = mysqli_fetch_assoc($query_run))
                                                                {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['order_no'];?></td>
                                                            <td><?php echo $row['name'];?></td>
                                                            
                                                            <td><?php echo $row['phone'];?></td>
                                                            <td><?php echo $row['address'];?></td>
                                                            <td><?php echo $row['bookname'];?></td>
                                                            <td><?php echo $row['Sem'];?></td>
                                                            <td><?php echo $row['price'];?></td>
                                                            <td><?php echo $row['date'];?></td>
                                                            <td><?php echo $row['paymentMethod'];?></td>
                                                            <td>
                                                                <form action="myorders-code.php" method="post">
                                                                    <input type="hidden" name="delete_id" value="<?php echo $row['order_id']; ?>">
                                                                
                                                                    <button type="submit" name="delete_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> CANCEL</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    
                                                        <?php }}?>
                                                       
                                                    </tbody>
                                            </table>
                                                   
                                        </div>
                                    </div>
                                   
                                    <div class="tab-pane fade" id="rentbook">
                                    <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                            <a href="shop-sidebar.php">Go Shop</a>
                                        </div>
                                        <div class="table-content table-responsive">
                                            <?php
                                                include('config.php');
                                                $id=$_SESSION['username'];
                                                $query = "SELECT * FROM booksonrent where name='$id'";
                                                $query_run = mysqli_query($connection, $query);
                                            ?>
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <!-- <th>COUNTRY</th> -->
                                                            <th>ORDER No</th>
                                                            <th>USERNAME</th>
                                                            <th>PHONE</th>
                                                            <th>ADDRESS</th>
                                                            <th>BOOKNAME</th>
                                                            <th>DayIsseued</th>
                                                            <th>SEM</th>
                                                            <th>PRICE</th>
                                                            <th>DATE</th>
                                                            <th>PAYMENT</th>
                                                            <th>Cancel</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            if(mysqli_num_rows($query_run) > 0)        
                                                            {
                                                                while($row = mysqli_fetch_assoc($query_run))
                                                                {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['order_no'];?></td>
                                                            <td><?php echo $row['name'];?></td>
                                                            
                                                            <td><?php echo $row['phone'];?></td>
                                                            <td><?php echo $row['address'];?></td>
                                                            <td><?php echo $row['bookname'];?></td>
                                                            <td><?php echo $row['dayissued'];?></td>
                                                            <td><?php echo $row['Sem'];?></td>
                                                            <td><?php echo $row['price'];?></td>
                                                            <td><?php echo $row['date'];?></td>
                                                            <td><?php echo $row['paymentMethod'];?></td>
                                                            <td>
                                                                <form action="myorders-code.php" method="post">
                                                                    <input type="hidden" name="delete_id" value="<?php echo $row['order_id']; ?>">
                                                                
                                                                    <button type="submit" name="delete_btn" onclick="return confirm('Are you sure?')" class="btn btn-danger"> CANCEL</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    
                                                        <?php }}?>
                                                       
                                                    </tbody>
                                            </table>
                                                   
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">
                                        <form action="#" class="form form--account">
                                            <div class="row grid-space-30 mb--20">
                                                <div class="col-md-6 mb-sm--20">
                                                    <div class="form__group">
                                                        <label class="form__label" for="f_name">First name <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="f_name" id="f_name"
                                                            class="form__input">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form__group">
                                                        <label class="form__label" for="l_name">Last name <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="l_name" id="l_name"
                                                            class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="d_name">Display name <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="d_name" id="d_name"
                                                            class="form__input">
                                                        <span class="suggestion"><em>This will be how your name will be
                                                                displayed in the account section and in
                                                                reviews</em></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb--20">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="email">Email Address <span
                                                                class="required">*</span></label>
                                                        <input type="email" name="email" id="email" class="form__input">
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset class="form__fieldset mb--20">
                                                <legend class="form__legend">Password change</legend>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="cur_pass">Current password
                                                                (leave blank to leave unchanged)</label>
                                                            <input type="password" name="cur_pass" id="cur_pass"
                                                                class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="new_pass">New password
                                                                (leave blank to leave unchanged)</label>
                                                            <input type="password" name="new_pass" id="new_pass"
                                                                class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="conf_new_pass">Confirm new
                                                                password</label>
                                                            <input type="password" name="conf_new_pass"
                                                                id="conf_new_pass" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <input type="submit" value="Save Changes"
                                                            class="btn btn-style-1 btn-submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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