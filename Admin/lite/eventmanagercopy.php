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
     //XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX  
    //    $connect = mysqli_connect("localhost", "root", "", "testing");
    //    $query1 = "SELECT refNo FROM tempEvents WHERE manager_id = $mid  AND status	='confirmed' order by date";
    //    $result1 = mysqli_query($connection, $query1);
    //    $row1 = mysqli_fetch_array($result1);
      
      
    //   while ($row1){

    //   }
       $query = "SELECT * FROM sales WHERE eventRef = '181231134745'  ";
       $result = mysqli_query($connection, $query);
       $ticket1 = 0;
       $ticket2 = 0;
       $ticket3 = 0;
       //
       $tcount1 = 0;
       $tcount2 = 0;
       $tcount3 = 0;   

       
       while($row = mysqli_fetch_array($result))
       {
            if ($row["Catagory"] == 1){
                $ticket1=$ticket1+  $row["ticketValue"];
                $tcount1=$tcount1 + 1;               
            }
            elseif($row["Catagory"] == 2){
                $ticket2=$ticket2+  $row["ticketValue"];
                $tcount2=$tcount2 + 1;
            }
            elseif($row["Catagory"] == 3){
                $ticket3=$ticket3+  $row["ticketValue"];
                $tcount3=$tcount3 + 1;
            }
            $totalTicket = $ticket1 + $ticket2 + $ticket3;
        }

        // round_to_2dp
        // round(520.34345,2)
        //$ticket1p1= (($ticket1/$totalTicket)*100) ;
        $ticket1p = round((($ticket1/$totalTicket)*100),1) ;
        $ticket2p = round((($ticket2/$totalTicket)*100),1) ;
        $ticket3p = round((($ticket3/$totalTicket)*100),1) ;

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
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


<!-- chart Styles -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!-- end of chart styles -->

<style>
#chartContainer div canvas{
    position:relative !important;
}
.canvasjs-chart-credit{
    display:none;
}
</style>

<script>
   window.onload = function () {
    //Better to construct options first and then pass it as a parameter
    var options = {
        animationEnabled: true,
        title: {
            text: "Ticket Sales of Event A",                
            fontColor: "Peru"
        },	
        axisY: {
            tickThickness: 0,
            lineThickness: 0,
            valueFormatString: " ",
            gridThickness: 0                    
        },
        axisX: {
            tickThickness: 0,
            lineThickness: 0,
            labelFontSize: 18,
            labelFontColor: "Peru"				
        },
        data: [{
            indexLabelFontSize: 12,
            toolTipContent: "<span style=\"color:#62C9C3\">{indexLabel}:</span> <span style=\"color:#CD853F\"><strong>{y}</strong></span>",
            indexLabelPlacement: "inside",
            indexLabelFontColor: "white",
            indexLabelFontWeight: 600,
            indexLabelFontFamily: "Verdana",
            color: "#62C9C3",
            type: "bar",
            dataPoints: [
                { y: <?php echo $ticket1; ?>, label: "<?php echo $ticket1p; ?>", indexLabel: "VIP" },
                { y: <?php echo $ticket2; ?>, label: "<?php echo $ticket2p; ?>", indexLabel: "First Class" },
                { y: <?php echo $ticket3; ?>, label: "<?php echo $ticket3p; ?>", indexLabel: "Second Class" }                                                
            ]
        }]
    };
    $("#chartContainer").CanvasJSChart(options);
}
</script>




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
                        <li> <a class="waves-effect waves-dark" href="pages-profile.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">My Profile</span></a>
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
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    
                    
                 
               <div class="col-md-7 col-4 align-self-center">
                        <a href="create_event.php" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> Create Event</a>
                    </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                
                
                <!-- Row  eka patan gannawa-->
                
                
                <?php
                for ($i=0;$i<3; $i++){

               
                
                echo '
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-sm-12" style= "height:300px;">

                        <div id="chartContainer" style="height: 100%;">
                        </div>
                      
                    </div>
                    </div class="col-lg-6 col-sm-12">
                        <table class="table table-striped table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Ticket Price</th>
                                <th scope="col">Soled Tickets</th>
                                <th scope="col">Avilable Seats</th>
                              </tr>
                            </thead>     
                            <tbody>
                              <tr>
                                <th scope="row">VIP</th>
                                <td>Mark</td>
                                <td>'.$tcount1.'</td>
                                <td>'.$vip.'</td>
                              </tr>
                              <tr>
                                <th scope="row">First Class</th>
                                <td>Jacob</td>
                                <td>' .$tcount2. ' </td>
                                <td>'.$fc.'</</td>
                              </tr>
                              <tr>
                                <th scope="row">Second Class</th>
                                <td>Larry</td>
                                <td>'.$tcount3.'</td>
                                <td>'.$sc.'</</td>
                              </tr>
                            </tbody>
                        <table>
                        </div>
                    </div>
                </div>  '
                ;

                }
                ?>               
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
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>

    
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


</body>

</html>
