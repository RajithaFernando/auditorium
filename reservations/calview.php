<?php include('../includes/connection.php') ?>
<?php 
$sss = 'date';
$events = 'SELECT * FROM events ORDER BY date' ; //Selecting all data from events table 
$query = mysqli_query($connection, $events); //Passing SQL
//$row = mysqli_fetch_assoc($query);

while ($row = mysqli_fetch_assoc($query)){
    //print_r($row['date']);
    $edats[] = $row['date'];
    //print_r($edats);
}
print_r($edats);


// while($row = mysqli_fetch_assoc($query)){
   
//     $Eventday = $row['date'];
// }


// $time  = strtotime($date);
// $day   = date('d',$time);
// $month = date('m',$time);
// $year  = date('Y',$time);

    

?>


<?php
date_default_timezone_set("	Asia/Colombo");

//taking Preview and next month
if(isset($_GET['ym'])){
    $ym = $_GET['ym'];
}
else {
    //this month
    $ym=date('y-m');
}
//cheak fomat
$timestamp = strtotime($ym,"-01");
if ($timestamp === false){
    $timestamp = time();
}

//today
$today = date('Y-m-j', time());

//for H3 Title
$html_title = date('y / m', $timestamp);

//create preview and next month links
//mktime(hour, minute,second,month,day,year )$prev = date('y-m', mktime(0, 0, 0, date('m',$timestamp)-1, 1, date('Y', $timestamp)));


$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
//$next = date('y-m', mktime(0, 0, 0, date('m',$timestamp)+1, 1, date('Y', $timestamp)));

//number of days in month
$day_count = date('t', $timestamp);

// 0: sunday, 1: monday
$str = date('w', mktime(0, 0, 0, date('m',$timestamp), 1, date('Y', $timestamp)));

// create calander
$weeks = array();
$week = '';

// add empty cell
$week .= str_repeat('<td></td>', $str);
//echo $today ;
for ( $day = 1; $day <= $day_count; $day++, $str++){
    $date = $ym.'-'.$day;

    // if ($today == $date) {
    //     $week .= '<td class="today">' . $day;

    // }

    // else{
    //     $week .= '<td>'.$day;
    // }



    foreach($edats as $Eventdate){
       // $Eventdate = $row['date'];

        // $time  = strtotime($Eventdate);
        // $Eventday   = date('d',$time);
        // $Eventmonth = date('m',$time);
        // $Eventyear  = date('Y',$time);

        
        if ($Eventday == $date){
            $week .= '<td class="Eventday">' . $day;
            //array_splice($row['date'],0);
            //echo $row['date'];
            //break;
            
        }   
        
        
    }
    if ($today == $date) {
       $week .= '<td class="today">' . $day; 
       echo $date;   
        }
     else{
        $week .= '<td>'.$day;
        
    }

   
    // End of the week OR end of the month
    if ($str %7 == 6 || $dat == $day_count){
        if ($day == $day_count){
            // Add empty cell
            $week .= str_repeat('<td></td>',6-($str %7));
        }

        $weeks[] = '<tr>'.$week.'</tr>';
        
        //prepare for new week
        $week = '';

    

    }

    
}

?>



<!DOCTYPE html >

<html language="ja">
<head>
    <meta charset="utf-8">
    <title>EVENT CALANDER</title>
        
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <style>
        .container {
            font-family: 'Noto Sans', sans-serif;
            margin-top:'80px';
        }
        th {
            height:30px;
            text-align:center;
            font-weight:700;  
        }
        td {
            height: 100px;

        }
        .today {
            font-size: 20px;
            background:orange;
            
        }
        th:nth-of-type(7),td:nth-of-type(7){
            color:blue;

        }
        th:nth-of-type(1),td:nth-of-type(1){
            color:red;
            
        }
        .Eventday {
            background:purple;
            z-index: -1;
        }
    
    
    </style>

</head>
<body>
    <div class="container">

        <h3><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</a></h3>
        
        
        <br>
        <table class="table table-bodered">
            <tr>
                <th>S</th>
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
            </tr>
            <?php
                foreach($weeks as $week){
                    echo $week ;
                }


            ?>

            


        </table>
    </div>

     

</body>
</html>