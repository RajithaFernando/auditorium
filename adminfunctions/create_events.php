<?php include('../includes/connection.php') ?>
<?php include('session.php') ?>





  
  
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS --> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
</head>

<body>
   
        
                        <!-- <?php 
                             
                         // '
                        // <li class="nav-item dropdown">
                            // <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="profile.png" alt="user" class="profile-pic m-r-10" /> '.$_SESSION["f_name"] .  ' '.$_SESSION["l_name"].'</a>
                        // </li>' ?>
                        Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<div class="row"> 
  <div class="col-3" style="margin: 15px; float: left;">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link " id="v-pills-home-tab" data-toggle="pill" href="event_confirm.php" role="tab"
        aria-controls="v-pills-home" aria-selected="true" >event confirmation</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="report_generate.php" role="tab"
        aria-controls="v-pills-profile" aria-selected="false">Report Generations</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="create_events.php" role="tab"
        aria-controls="v-pills-messages" aria-selected="false">Create Events</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
                    
       
        
        
                      
                    
                       
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                
                                <div class="alert alert-warning">
                                  <p><?php include_once('message.php'); ?></p>.
                                </div>
                                <form action="create_events_submit.php" method="post">
                                <div class="form-group row">
                                      <label for="example-text-input" class="col-2 col-form-label">Event Name</label>
                                      <div class="col-10">
                                        <input class="form-control" type="text" id="example-text-input" name="name">
                                      </div>
                                    </div>
                                
                                
                                    <div class="form-group row">
                                      <label for="example-date-input" class="col-2 col-form-label">Date</label>
                                      <div class="col-10">
                                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="date">
                                      </div>
                                    </div>
                                
                                    <div class="form-group row">
                                      <label for="example-time-input" class="col-2 col-form-label">Time</label>
                                      <div class="col-10">
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
                                      <label for="example-email-input" class="col-2 col-form-label">Uplode an Image</label>
                                      <div class="col-10">
                                        <input type="file" name="fileToUpload" id="fileToUpload">
                                        <input type="submit" value="Upload Image" name="submit">
                                      </div>
                                        
                                        <div class="col-12"><hr></div>
                                        <div class="col-4"></div>
                                        <div class=" col-3col align-self-center">
                                            <div class="form-group">
                                             
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success" value="Create Event"  name="create_event">
                                            
                                            
                                            
                                        </div>
                                        </div>
                                            
                                           
                                            
                                            
                                            <input type="hidden" value="<? php  
                                            echo $id;  ?>" name="manager_id">
                                        
                                       </form> 
                                  
                                        
                    
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        
                   
                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
           