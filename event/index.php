<?php include('../includes/connection.php') ?>
<?php
    $ref = $_POST['ref'];
    $query = "SELECT * FROM tempEvents WHERE refNo =". $ref  ;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);

    $img = $row['image'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Conference</title>

    <!-- css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">

    <style>
        .site-header {
            width: 100%;
            height: 100%;
            min-height: 100vh;
            position: relative;
            text-align: center;
            background: url(../Admin/lite/EventImages/<?php echo $img ?>) no-repeat center center/cover;
            display: table;
        }
        .discription{
            font-family: 'Rancho', cursive;
            font-size: 30px;

        }

    </style>


</head>
<body data-spy="scroll" data-target="#site-nav">
    
    <!--
    
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        
        <div class="container">
            <div class="navbar-header">

                
                <div class="site-branding">
                    <a class="logo" href="index.html">
                       
                        <img src="assets/images/logo.png" alt="Logo">

                        Conference 2015
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                
                    <li class="active"><a data-scroll href="#about">About</a></li>
                    <li><a data-scroll href="#speakers">Speakers</a></li>              
                    <li><a data-scroll href="#schedule">Schedule</a></li>                  
                    <li><a data-scroll href="#partner">Partner</a></li>                  
                   
                    <li><a data-scroll href="#faq">FAQ</a></li>
                    <li><a data-scroll href="#photos">Photos</a></li>
                
                </ul>
            </div>
        </div>
    </nav>
-->
    <header id="site-header" class="site-header valign-center"> 
        <div class="intro">

            <h2></h2>
            
            <h1><?php echo $row['name']; ?></h1>
            
            <p>First &amp; Largest Conference</p>
            
            <a class="btn btn-white" data-scroll href="#registration">View 360 Image</a>
        
        </div>
    </header>

    <section id="about" class="section about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <h3 class="section-title">About <?php echo $row['name'] ?></h3>

                    <p class="discription"><?php echo $row['description']?></p>

                    

                </div><!-- /.col-sm-6 -->

                <div class="col-sm-6">

                        <figure>
                        <!-- assets/images/about-us.jpg" -->
                                <img alt="" class="img-responsive" src="assets/images/backgrounds/bg-2.jpg">
                        </figure>

                    

                </div><!-- /.col-sm-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>


    <section id="registration" class="section registration">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Registration &amp; Pricing</h3>
                </div>
            </div>
                
            <form action="#" id="registration-form">
                <div class="row">
                    <div class="col-md-12" id="registration-msg" style="display:none;">
                        <div class="alert"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name" id="fname" name="fname" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name" id="lname" name="lname" required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone" id="cell" name="cell" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" id="address" name="address" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Zip Code" id="zip" name="zip" required>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="city" id="city" required>
                                <option readonly>City</option>
                                <option>City Name 1</option>
                                <option>City Name 2</option>
                                <option>City Name 3</option>
                                <option>City Name 4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="program" id="program" required>
                                <option readonly>Select Your Program</option>
                                <option>Program Name 1</option>
                                <option>Program Name 2</option>
                                <option>Program Name 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center mt20">
                    <button type="submit" class="btn btn-black" id="registration-submit-btn">Submit</button>
                </div>
            </form>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="site-info">Designed and <br> Developed by <a href="http://technextit.com">Technext Limited</a></p>
                    <ul class="social-block">
                        <li><a href=""><i class="ion-social-twitter"></i></a></li>
                        <li><a href=""><i class="ion-social-facebook"></i></a></li>
                        <li><a href=""><i class="ion-social-linkedin-outline"></i></a></li>
                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- script 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/js/main.js"></script> -->
</body>
</html>