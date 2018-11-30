<?php

// include('../../includes/connection.php');
// include('../../includes/session.php');
// include('../../includes/message.php');

include('connection.php');
include('session.php');
include('message.php');


?>



<?php 
// checkSession();
                      
// if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'e'){
//         $message = base64_encode(urlencode("Please Login"));
//         header('Location:../../login.php?msg=' . $message);
//         exit();
// }

// $id = $_SESSION["id"]; 

    
        
// making RefNO Using date and time
date_default_timezone_set('Asia/Colombo');

$day   = date('d');
$month = date('m');
$year  = date('y');
$hour = date('H');
$min = date('i');
$sec = date('s');

$refCode = $year.$month.$day.$hour.$min.$sec;
settype($refCode, "integer");

// echo $refCode;




//image upload
        $target_dir = "EventImages/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["create_event"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";

                // $message .= base64_encode(urlencode("File is a Image "));
                // header('Location:create_event.php?msg=' . $message);
                $uploadOk = 1;
        } else {
                // echo "File is not an image.";
                $message .= base64_encode(urlencode("File is not an image."));
                header('Location:create_event.php?msg=' . $message);
                $uploadOk = 0;
        }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
                $message .= base64_encode(urlencode("Sorry, file already exists. "));
                header('Location:create_event.php?msg=' . $message);
        // echo "Sorry, file already exists.";
                $message .= base64_encode(urlencode("File is a Image"));
                header('Location:create_event.php?msg=' . $message);

        $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
        // echo "Sorry, your file is too large.";
                $message .= base64_encode(urlencode("Sorry, your file is too large. "));
                header('Location:create_event.php?msg=' . $message);
        
        $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $message .= base64_encode(urlencode("Sorry, only JPG, JPEG, PNG & GIF files are allowed."));
                header('Location:create_event.php?msg=' . $message);
        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
                $message .= base64_encode(urlencode("Sorry, your file was not uploaded. "));
                header('Location:create_event.php?msg=' . $message);
        // if everything is ok, try to upload file
        } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                        // $message .= base64_encode(urlencode("File was Uploaded "));
                        // header('Location:create_event.php?msg=' . $message);
        } else {
                // echo "Sorry, there was an error uploading your file.";
                $message .= base64_encode(urlencode("Sorry, there was an error uploading your file. "));
                header('Location:create_event.php?msg=' . $message);
        }
        }



$name = $_POST['name'];
$manager_id = $_POST['manager_id'];
$date = $_POST['date'];
$time  = $_POST['time'];
$web_url  = $_POST['web_url'];
$fb_url  = $_POST['fb_url'];
$twitter_url  = $_POST['twitter_url'];
$google_url  = $_POST['google_url'];
$description  = $_POST['description'];
$ticket1 = $_POST['ticket1'];
$ticket2 = $_POST['ticket2'];
$ticket3 = $_POST['ticket3'];
$imageName = $_FILES["fileToUpload"]["name"];
    


// echo $name;
// echo $manager_id;
// echo $imageName;



    

//$sss = "INSERT INTO `tempEvents` (`id`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) VALUES (NULL, 'a', '22', '2018-09-05', '05:00:00', '1', '1', '1', '11', '1', '1', '1', '1', '1')";

// not working working
// $event = "INSERT INTO tempEvents (RefNo , name , manager_id , date , time , web_url , fb_url , twitter_url , google_url , description  , image , ticket1 , ticket2 , ticket3 )VALUES ('$refCode','$name' , $manager_id , '$date' , '$time' , '$web_url' , '$fb_url' , '$twitter_url' , '$google_url' , '$description'  , $imageName , '$ticket1' , '$ticket2' , '$ticket3')";
 
// $event = "INSERT INTO tempEvents ('RefNo' , 'name' , 'manager_id' , 'date' , 'time' , 'web_url' , 'fb_url' , 'twitter_url' , 'google_url' , 'description'  , 'image' , 'ticket1' , 'ticket2' , 'ticket3' ) VALUES ('$refCode','$name' , '$manager_id' , '$date' , '$time' , '$web_url' , '$fb_url' , '$twitter_url' , '$google_url' , '$description'  , '$imageName' , '$ticket1' , '$ticket2' , '$ticket3')";
 

$event = "INSERT INTO `tempEvents` (`refNo`, `name`, `manager_id`, `date`, `time`, `web_url`, `fb_url`, `twitter_url`, `google_url`, `description`, `image`, `ticket1`, `ticket2`, `ticket3`) 
VALUES ('$refCode', '$name', '$manager_id', '$date', '$time', '$web_url', '$fb_url', '$twitter_url', '$google_url', '$description', '$imageName', '$ticket1', '$ticket2', '$ticket3');";
 

// mysqli_query($connection,$event); 
if (mysqli_query($connection,$event) === TRUE) {
            $message .= base64_encode(urlencode("Event Created Succesfully"));
            header('Location:create_event.php?msg=' . $message);
            exit();}

else {
        $message .= base64_encode(urlencode("SQL Error while Creating Event"));
        header('Location:create_event.php?msg=' . $message);
        exit();
        }


/*
'$name' , '$manager_id' , '$date' , '$time' , '$web_url' , '$fb_url' , '$twitter_url' , '$google_url' , '$description' , '$image'
 , '$ticket1' , '$ticket2' , '$ticket3'
 
 
 */
?>