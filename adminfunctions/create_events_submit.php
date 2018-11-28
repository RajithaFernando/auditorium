


<?php include('../includes/connection.php') ;
include('session.php');
include('message.php');?>




  <?php checkSession();
                       
     // $id = $_SESSION["id"]; 
    
  

$name = $_POST['name'];
$manager_id = '12';
$date = $_POST['date'];
$time  = $_POST['time'];
$web_url  = $_POST['web_url'];
$fb_url  = $_POST['fb_url'];
$twitter_url  = $_POST['twitter_url'];
$google_url  = $_POST['google_url'];
$description  = $_POST['description'];
$image =  'saas';
$ticket1 = $_POST['ticket1'];
$ticket2 = $_POST['ticket2'];
$ticket3 = $_POST['ticket3'];
    
    

//$sss = "INSERT INTO `events` (`id`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) VALUES (NULL, 'a', '22', '2018-09-05', '05:00:00', '1', '1', '1', '11', '1', '1', '1', '1', '1')";


$event = "INSERT INTO events (name , manager_id , date , time , web_url , fb_url , twitter_url , google_url , description , image , ticket1 , ticket2 , ticket3) VALUES ('$name' , '$manager_id' , '$date' , '$time' , '$web_url' , '$fb_url' , '$twitter_url' , '$google_url' , '$description' , '$image' , '$ticket1' , '$ticket2' , '$ticket3')";
 
//mysqli_query($connection,$event); 
if (mysqli_query($connection,$event) === TRUE) {
            $message = base64_encode(urlencode("Event Created Succesfully"));
            header('Location:create_events.php?msg=' . $message);
            exit();}

else {
        $message = base64_encode(urlencode("SQL Error while Creating Event"));
        header('Location:create_events.php?msg=' . $message);
        exit();
        }
/*
'$name' , '$manager_id' , '$date' , '$time' , '$web_url' , '$fb_url' , '$twitter_url' , '$google_url' , '$description' , '$image'
 , '$ticket1' , '$ticket2' , '$ticket3'
 
 
 */
?>





  