<?php include('../../includes/session.php') ?>



  <?php 
  checkSession();

  if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'e'){
    $message = base64_encode(urlencode("Please Login"));
    header('Location:../../login.php?msg=' . $message);
    exit();
}

                       
    $id = $_SESSION["id"]; 
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
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
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
                        <?php
                             
                        echo '
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="profile.png" alt="user" class="profile-pic m-r-10" /> '.$_SESSION["f_name"] .  ' '.$_SESSION["l_name"].'</a>
                        </li>' ?>
                    </ul>
                </div>
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

                         <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">My Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="create_event.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Create Event</span></a>
                        </li>
                        
                        <!--
                        <li> <a class="waves-effect waves-dark" href="icon-material.html" aria-expanded="false"><i class="mdi mdi-emoticon"></i><span class="hide-menu">Icons</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Google Map</span></a>
                        </li>
-->
                      
                    
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.php" aria-expanded="false"><i class="mdi mdi-help-circle"></i><span class="hide-menu">My Events</span></a>
                        </li>
                        
                          <li> <a class="waves-effect waves-dark" href="delete.php" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Delete Event</span></a>
                        </li>
                  
                    
                    </ul>
                   
                    <!--
                    
                    <div class="text-center m-t-30">
                        <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-warning hidden-md-down"> Upgrade to Pro</a>
                    </div>

                -->
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="logout.php" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
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
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                            
                        </ol>
                    </div>
                    <!--
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                -->
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                
                                <div class="alert alert-warning">
                                  <p><?php include_once('message.php'); ?></p>.
                                </div>
                                <form action="create_event_submit.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                      <label for="example-text-input" class="col-2 col-form-label">Event Name</label>
                                      <div class="col-7">
                                        <input class="form-control" type="text" id="example-text-input" name="name">
                                      </div>
                                    </div>
                                
                                
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                        <div class="col-3">
                                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date">
                                        </div>

                                        <label for="example-time-input" class="col-1 col-form-label">Time</label>
                                        <div class="col-3">
                                            <input class="form-control" type="time" value="13:45:00" id="example-time-input" name="time">
                                        </div>
                                    </div>
                                
                                    
                                
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Website</label>
                                        <div class="col-10">
                                            <input class="form-control" type="url" placeholder="https://website.com" id="example-url-input" name="web_url">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Facebook URL</label>
                                        <div class="col-10">
                                            <input class="form-control" type="url" placeholder="https:/facebook.com" id="example-url-input" name="fb_url">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Twitter URL</label>
                                        <div class="col-10">
                                            <input class="form-control" type="url" placeholder="https://twitter.com" id="example-url-input" name="twitter_url">
                                        </div>
                                    </div>
                                <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Google + URL </label>
                                        <div class="col-10">
                                            <input class="form-control" type="url" placeholder="https://googleplus.com" id="example-url-input" name="google_url">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                          <label for="comment" class="col-2 col-form-label">Event Discription</label>
                                        <div class="col-10">
                                          <textarea class="form-control" rows="5" id="example-text-input" name="description" placeholder="DIscrive Your Event"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-3 col-form-label">Ticket price (VIP)</label>
                                        <div class="col-6">
                                            <input class="form-control" type="number" id="example-text-input" name="ticket1">
                                        </div>
                                            <div class="col3"></div>

                                    </div>
                                
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-3 col-form-label">Ticket price First class</label>
                                        <div class="col-6">
                                            <input class="form-control" type="number" id="example-text-input" name="ticket2">
                                        </div>
                                            <div class="col3"></div>

                                    </div>
                                
                                     <div class="form-group row">
                                        <label for="example-text-input" class="col-3 col-form-label">Ticket price Second class</label>
                                        <div class="col-6">
                                            <input class="form-control" type="number" id="example-text-input" name="ticket3">
                                        </div>
                                            <div class="col3"></div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label class="col-2 col-form-label">Uplode an Image</label>
                                        <div class="col-10">
                                            
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        
                                    </div>
                                        
                                        <div class="col-12"><hr></div>
                                        <div class="col-4"></div>
                                        <div class=" col-3col align-self-center">
                                            <div class="form-group">
                                             
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" value="Create Event"  name="create_event">
                                            
                                            
                                            
                                        </div>
                                        </div>
                                            
                                            <input type="hidden" name="manager_id" value= "<?php echo $id; ?>" >
                                        
                                       </form> 
                                  
                                        
                    
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
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
            
                    
                    <footer class="footer"> Footerrerere  <?php echo $id   ;?>
                
                                            
            </footer>';
                   
                    
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
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
