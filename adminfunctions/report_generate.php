<?php include('../includes/connection.php') ?>
<!DOCTYPE html>
<html>

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
    <!--Navbar-->
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
    
    <div class="card">

          
          <div class="card-body">
            <div class="text-center  " style="padding: 25px; ">
                <h3 style="color:#2C3E50" >Choose Reports</h3>
                <h4> <label for="Choose Report"  style="color:#E74C3C">Year</label></h4>
                <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span></span>
                    <form action="form.php" method="post">
                  <input type="" name="year" class="form-control">
                              </br><input type="submit" name="submityear" value="Get Report" class="btn btn-primary btn-lg btn3d" >
                              </div> 

      </div>
     

          </div>

      </div>
      
      
      <div class="card" style="margin-left:150px;width:3\400px">

          
          <div class="card-body">

           <div  style="padding: 15px ;  ">
                <h3 style="color:#2C3E50" >Choose Reports</h3>
                <h4> <label for="Choose Report"  style="color:#E74C3C">Month</label></h4>
                <div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-tasks"></span>
                      <form action="form.php" method="post">
                      <!-- <select class="form-control" name="month" > -->
                      <!-- <option value="1" selected>January</option> -->
                      <!-- <option value="2">February</option> -->
                      <!-- <option value="3">March</option> -->
                      <!-- <option value="4">April</option> -->
                      <!-- <option value="5">May</option> -->
                      <!-- <option value="6">June</option> -->
                      <!-- <option value="7">July</option> -->
                      <!-- <option value="8">August</option> -->
                      <!-- <option value="9">September</option> -->
                      <!-- <option value="10">October</option> -->
                      <!-- <option value="11">November</option> -->
                      <!-- <option value="12">December</option> -->
                                    
                      <!-- </select> -->
                      <!-- <input type="" name="year" class="form-control"> -->

                      </br><input type="" name="month" class="form-control">

                      </br><input type="submit" name="submit" value="Get Report" class="btn btn-primary btn-lg btn3d"  >

                </div> 

          </div>

      </div>
      
                                                       
                              
                                    




    
 
</div>

        
                                 
                                   
                                    
 
   

</body>
</html>

