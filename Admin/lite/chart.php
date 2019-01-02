<?php include('../../includes/connection.php') ?>
<?php include('../../includes/session.php') ?>
<?php checkSession(); 

if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'e'){
       $message = base64_encode(urlencode("Please Login"));
       header('Location:../../login.php?msg=' . $message);
       exit();
       }

    $ref= $_POST['refNo'];
       $query = "SELECT * FROM sales WHERE eventRef = ".$ref  ;
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
<!DOCTYPE HTML>
<html>
<head>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

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
<body>

                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-sm-12" style= "height:300px;">

                        <div id="chartContainer" style="height: 100%;">
                        </div>
                    <?php echo '  
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
                </div>';
                ?>

<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

</body>
</html>                              