<?php include('connection.php') ?>
<?php include('session.php') ;


include('message.php');
?>
 

  <?php checkSession();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'e'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:login.php?msg=' . $message);
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
    <title>Event Manager | Dashboard</title>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" /> '.$_SESSION["f_name"] .  ' '.$_SESSION["l_name"].'</a>
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
        
        <?php
                            $profile = "SELECT * FROM tempEvents WHERE  manager_id = '$id' ";

                            $query = mysqli_query($connection,$profile);

                            
                    


                   

                        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
      <div class="container">
      <div class="row">
			<div class="[ col-lg-12 col-lg-offset-2 col-sm-8 ]">
                <ul class="">
                    
                    <hr>
  
  <?php
    while($row = mysqli_fetch_assoc($query)){
                    $eid = $row['id'];
                    $name = $row['name'];
                    $date = $row['date'];
                        //$day   = date('d',$time);
                        //$month = date('m',$time);
                        //$year  = date('Y',$time);
                    $time = $row['time'];
                    $web_url = $row['web_url'];
                    $fb_url = $row['fb_url'];
                    $twitter_url = $row['twitter_url'];
                    $google_url = $row['google_url'];
                    $description = $row['description'];
                    $image = $row['image'];
                    $ticket1 = $row['ticket1'];
                    $ticket2 = $row['ticket2'];
                    $ticket3 = $row['ticket3'];



                    //$time  = strtotime($date);
                    $day   = date('d',$time);
                    $month = date('m',$time);
                    $year  = date('Y',$time);

                    $monthNum = sprintf("%02s", $result["month"]);
                    $monthName = date("F", strtotime($monthNum));

        //echo 'something';
        echo '
        <form action="edit_event.php" method="post">
                                <div class="form-group row">
                                      <label for="example-text-input" class="col-2 col-form-label">Event Name</label>
                                      <div class="col-10">
                                        <input class="form-control" type="text" id="example-text-input" name="name" value=" '.$name.' ">
                                      </div>
                                    </div>
                                
                                
                                    <div class="form-group row">
                                      <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                      <div class="col-10">
                                        <input class="form-control" type="text" value=" '.$date.' " id="example-date-input" name="date">
                                      </div>
                                    </div>
                                
                                    <div class="form-group row">
                                      <label for="example-time-input" class="col-2 col-form-label">Time</label>
                                      <div class="col-10">
                                        <input class="form-control" type="text" value=" '.$time.' " id="example-time-input" name="time">
                                      </div>
                                    </div>
                                
                                    <div class="form-group row">
                                      <label for="example-url-input" class="col-2 col-form-label">Website</label>
                                      <div class="col-10">
                                        <input class="form-control" type="url" value=" '.$web_url.' " id="example-url-input" name="web_url">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="example-url-input" class="col-2 col-form-label">Facebook URL</label>
                                      <div class="col-10">
                                        <input class="form-control" type="url" value=" '.$fb_url.' " id="example-url-input" name="fb_url">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="example-url-input" class="col-2 col-form-label">Twitter URL</label>
                                      <div class="col-10">
                                        <input class="form-control" type="url" value=" '.$twitter_url.' " id="example-url-input" name="twitter_url">
                                      </div>
                                    </div>
                                <div class="form-group row">
                                      <label for="example-url-input" class="col-2 col-form-label">Google + URL </label>
                                      <div class="col-10">
                                        <input class="form-control" type="url" value=" '.$google_url.' " id="example-url-input" name="google_url">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        
                                          <label for="comment" class="col-2 col-form-label">Event Discription</label>
                                        <div class="col-10">
                                          <input class="form-control" rows="5" id="example-text-input" name="description" value=" '.$description.' ">
                                        </div>
                                    </div>
                                <div class="form-group row">
                                      <label for="example-text-input" class="col-3 col-form-label">Ticket price (VIP)</label>
                                      <div class="col-6">
                                        <input class="form-control" type="text" id="example-text-input" name="ticket1" value=" '.$ticket1.' ">
                                      </div>
                                         <div class="col3"></div>

                                    </div>
                                
                                    <div class="form-group row">
                                      <label for="example-text-input" class="col-3 col-form-label">Ticket price First class</label>
                                      <div class="col-6">
                                        <input class="form-control" type="text" id="example-text-input" name="ticket2" value=" '.$ticket2.' ">
                                      </div>
                                        <div class="col3"></div>

                                    </div>
                                
                                     <div class="form-group row">
                                      <label for="example-text-input" class="col-3 col-form-label">Ticket price Second class</label>
                                      <div class="col-6">
                                        <input class="form-control" type="text" id="example-text-input" name="ticket3" value=" '.$ticket3.' ">
                                      </div>
                                         <div class="col3"></div>
                                    </div>
            
                                    
                                        <div class=" col-3col align-self-center">
                                            <div class="form-group">
                                            <input type="hidden" value="
                                            '. $eid.'" name="eid">
                                             
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Edit Event"  name="create_event">
                                            <p><?php echo $id ;?></p>
                                            
                                            
                                        </div>
                                        </div>
                                            
                                           
                                            
                                            
                                            
                                        
                                       </form><hr><hr><hr>' ;
        
        
        
        }
                    ?>
                  

					
				</ul>
			</div>
		</div>
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
