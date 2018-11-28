<?php require_once('connection.php'); ?>
<?php require_once('session.php'); ?>

<?php
session_start();

if (isset($_SESSION['id'])){
		session_unset($_SESSION['f_name']);
    
        session_unset($_SESSION['usertype']);
        session_unset($_SESSION['id']);
		$message = base64_encode(urlencode(("Logged Out Successfully")));
		header('Location:login.php?msg=' . $message);
		exit();
	}

?>
