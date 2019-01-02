<?php

include('connection.php');
include('session.php');
include('message.php');
?>
<?php

$dbservername = "localhost";
$dbUsername = "laravel";
$dbPassword = "Raji@123";
$dbName = "auditorium";

$connection = mysqli_connect($dbservername, $dbUsername, $dbPassword,$dbName);

if ($connection->connect_error) {
	die("Connection Failed". $conn->connect_error);
}		


?>

  <?php checkSession();
                       
     $id = $_SESSION["id"]; 
    
	
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name']; 
$email = $_POST['email'];
$password  = $_POST['password'];
$password2  = $_POST['password2'];
$mobile  = $_POST['mobile'];

if ($password != $password2){
        $message = base64_encode(urlencode("Passwords do not match"));
        header('Location:profile.php?msg=' . $message);
        exit();
    }
    else{
        $EditQuery= "UPDATE users SET f_name = '$f_name',l_name = '$l_name', email ='$email', password = '$password', mobile = '$mobile' WHERE id = $id ";

        if (mysqli_query($connection,$EditQuery) === TRUE) {
                $message = base64_encode(urlencode("Successfully Edited!"));
				header('Location:profile.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:profile.php?msg=' . $message);
				exit();
            }
    }


   
//$ss = "UPDATE events SET name = 'Rajiadasdasdtha' WHERE id='$eid' ";
//$sss = "INSERT INTO `events` (`id`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) VALUES (NULL, 'a', '22', '2018-09-05', '05:00:00', '1', '1', '1', '11', '1', '1', '1', '1', '1')";

//$event = "UPDATE events SET name = '$name' WHERE id=$eid";


/*
$event = "UPDATE  events SET name = '$name' , manager_id = '$manager_id',   web_url = '$web_url' , fb_url = '$fb_url' , twitter_url = '$twitter_url' , google_url = '$google_url', description  = '$description' WHERE id =$eid";
 
//mysqli_query($connection,$event); 
if (mysqli_query($connection,$event) ) {
            $message = base64_encode(urlencode("Event Created Succesfully"));
            header('Location:pages-error-404.php?msg=' . $message);
            exit();}
    */
     //echo 'Successfull';
   
    

/*
else {
        $message = base64_encode(urlencode("SQL Error while Creating Event"));
        header('Location:pages-error-404.php?msg=' . $message);
        exit();
        }



####################################
'$name' , '$manager_id' , '$date' , '$time' , '$web_url' , '$fb_url' , '$twitter_url' , '$google_url' , '$description' , '$image'
 , '$ticket1' , '$ticket2' , '$ticket3'
 
 
 */
?>