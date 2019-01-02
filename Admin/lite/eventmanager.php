<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>
<?php checkSession(); 

if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'e'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:../../login.php?msg=' . $message);
       exit();
       }
       $mid = $_SESSION['id'];
    //    echo $mid;
       $query1 = "SELECT  refNo , name  FROM tempEvents WHERE manager_id = $mid  AND status='confirmed' order by date";
       $result1 = mysqli_query($connection, $query1);
 
       ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Event Manager | Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->



    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">

    <!--This page css - Morris CSS -->
    <!-- Custom CSS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">


    <link href="css/style.css" rel="stylesheet">
    
    
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    


<!-- chart Styles -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!-- end of chart styles -->

<style>
.mylable {
    font-size : 20px !important;
    margin: 30px;
} 
</style>


</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="100" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light" >
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            
                            <!-- Light Logo icon -->
                            <img src="images/logo.png" width="90" height="60" alt="">
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                         <img src="" class="light-logo"  /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-sm-down "><a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="../../events.php"><strong style="color:White ">Events</strong>   <i class="mdi-arrow-right-bold-circle-outline"></i></a>
                            
                        </li>
                    </ul>
   
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <?php checkSession();
                       
                        echo '
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="profile.png" alt="user" class="profile-pic m-r-10" /> '.$_SESSION["f_name"] .  ' '.$_SESSION["l_name"].'</a>
                        </li>' ?>
                    </ul>
                
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="eventmanager.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="profile.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">My Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="create_event.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Create Event</span></a>
                        </li>
                      
                    
                        <li> <a class="waves-effect waves-dark" href="editevent.php" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">My Events</span></a>
                        </li>
                        
                          <li> <a class="waves-effect waves-dark" href="delete.php" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Delete Event</span></a>
                        </li>
                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="../../includes/logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> 
            </div>
            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-4 col-4 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Event Manager</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <!-- col-md-4 col-4 align-self-center -->
                    <div class="dropdown col-md-4 col-4 align-self-center">
                    
                        <form action="chart.php" method="post">
                            <label for="custID" class="col-form-label mylable" ><kbd>Select Event</kbd></label>
                            <select class="form-control" id="sel2" name="refNo">
                                <?php 
                                // <input type="hidden" name="name" value='.$row1['name'].'>'
                                     while ($row1 = mysqli_fetch_assoc($result1))   {
                                        echo '<option value ='.$row1['refNo'].' id="custId">'.$row1['name'].'</option>'
                                             ;
                                    } 
                                ?>           
                            </select>
                                <!-- <input type="" id="custId" name="refNo" value="181231134745"> -->
                               <a href="charts.php"> <button type="submit" class="btn btn-primary mylable">Get Event Reports</button></a>
                        </form>
                            
                            </div>
                        
                    
                    
                 
                    <div class="col-md-4 col-4 align-self-center">
                        <a href="create_event.php" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down mylable"> Create Event</a>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                
                
                <!-- Row  eka patan gannawa-->
    
                <!-- <iframe src="chart.php" height="200" width="300"></iframe> -->
                                
                <!-- Row  eka ewara wenawa-->
           
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> UCSC© | V K Samaranayake Auditorium  </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- 
        <script src="../assets/plugins/jquery/jquery.min.js"></script> 
        -->
    <!-- Bootstrap tether Core JavaScript -->
    <!-- 
        
        <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    -->
    <!-- slimscrollbar scrollbar JavaScript -->
    <!-- 
        <script src="js/jquery.slimscroll.js"></script> 
        -->
    <!--Wave Effects -->
    <!-- <script src="js/waves.js"></script> -->
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <!-- 
        <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script> -->
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    
    <!--c3 JavaScript -->
    <!-- 
        <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script> 
    -->

    
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>




</body>

</html>
