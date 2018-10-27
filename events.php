<?php include('includes/connection.php') ?>

<html>

<head>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="css/custome.css">
    
<!------ 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
Include the above in your HEAD tag ---------->
        
</head>
<body>
   
    <?php include('includes/hedder.php') ?>
    <?php
    
    $events = 'SELECT * FROM events ORDER BY date' ; //Selecting all data from events table 
    $query = mysqli_query($connection, $events); //Passing SQL
    
   

    ?>
    <h1>Upcomming events</h1>


<div class="container">
      <div class="row">
			<div class="[ col-lg-12 col-lg-offset-2 col-sm-8 ]">
                <ul class="event-list">
  
  <?php
    while($row = mysqli_fetch_assoc($query)){
        echo '
        
		
				
					<li>';
                      

        $name = $row['name'];
        $date = $row['date'];
            $day   = date('d',$time);
            $month = date('m',$time);
            $year  = date('Y',$time);
        $time = $row['time'];
        $web_url = $row['web_url'];
        $fb_url = $row['fb_url'];
        $twitter_url = $row['twitter_url'];
        $google_url = $row['google_url'];
        $description = $row['description'];
        $image = $row['image'];
        $price = $row['price'];


    
        $time  = strtotime($date);
        $day   = date('d',$time);
        $month = date('m',$time);
        $year  = date('Y',$time);

        $monthNum = sprintf("%02s", $result["month"]);
        $monthName = date("F", strtotime($monthNum));

                        echo '
						<time datetime=".">
							<span class="day"> '. $day. '</span>
							<span class="month">' .$monthName.'</span>
							<span class="year">' . $year. '</span>
							<span class="time">ALL DAY</span>
						</time>
						<img alt=" '.$name.' " src="https://farm4.staticflickr.com/3100/2693171833_3545fb852c_q.jpg" />
						<div class="info">
							<h2 class="title">' .$name. '</h2>
                            <p class="desc">' .$description. '</p>
                            <ul>
								<li style="width:44%;"><a href=" '.$web_url.' "><span class="fa fa-globe"></span>' .$web_url. '</a></li>
                                <li style="width:25%;"><a href="event/index.html"><span class="fa fa-info-circle"></span> view more </a></li>
                                <li style="width:25%;"><a href="event/index.html#registration"><span class="fa fa-money"></span> book seats </a></li>
                            </ul>
    
                            
                            
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><img src="" alt=""><a href="'.$fb_url.'"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href=" '.$twitter_url.' "><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href=" '.$google_url.' "><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
                    </li>';   }
                    ?>
                    <!--
                            end of one event
                            <i class="fas fa-ticket-alt"></i>
                            
                            <i class="fas fa-ticket-alt"></i>
                            <i class="fas fa-money-bill-alt"></i>
                        -->





<!--
					<li>
						<time datetime="2014-07-20 0000">
							<span class="day">8</span>
							<span class="month">Jul</span>
							<span class="year">2014</span>
							<span class="time">12:00 AM</span>
						</time>
						<div class="info">
							<h2 class="title">One Piece Unlimited World Red</h2>
							<p class="desc">PS Vita</p>
							<ul>
								<li style="width:50%;"><a href="#website"><span class="fa fa-globe"></span> Website</a></li>
								<li style="width:50%;"><span class="fa fa-money"></span> $39.99</li>
							</ul>
						</div>
						<div class="social">
							<ul>
								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>
							</ul>
						</div>
					</li>

					-->

					
				</ul>
			</div>
		</div>
	</div>

</body>