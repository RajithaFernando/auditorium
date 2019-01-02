<?php include('includes/connection.php') ?>
<?php include('includes/session.php') ?>
<?php include('includes/message.php') ?>

<?php


if(isset($_POST['login-submit'])){
	//echo "something";
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password =($_POST['password']);
    
    
    //echo $password ;
    //Select User from database
    $userQuery = "SELECT * FROM users WHERE email ='$email' and password='$password'";
    $userResult= mysqli_query($connection, $userQuery);
    //print_r($userResult);
    //echo $password ;
    //User Exists
    if (mysqli_num_rows($userResult) == 1) {
            $userRow = mysqli_fetch_array($userResult);
            //print_r($userRow);
            
            //Creating Session
            checkSession();  
            $_SESSION["f_name"] = $userRow['f_name'];
            $_SESSION["l_name"] = $userRow['l_name'];
        
            $_SESSION["id"] = $userRow['id'];
            $_SESSION["usertype"] = $userRow['usertype'];
        
            $usertype= $userRow['usertype'];
            //echo "sss";
            if($usertype == 'e' ){
            header("Location:Admin/lite/eventmanager.php" );
            }

            elseif($usertype=='m'){
                header("Location:adminfunctions/admin.php");

            }
            //}
            
            
    }
    else{        
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    } 
    
}

mysqli_close($connection);
    
    
?>