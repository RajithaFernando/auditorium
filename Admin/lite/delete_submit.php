<?php

include('../../includes/connection.php');
include('../../includes/session.php');
include('../../includes/message.php');
?>


  <?php checkSession();
                       
     $id = $_SESSION["id"]; 
    
	


    $eid=$_POST['eid'];
    //echo $eid;
    $delQuery= "DELETE FROM events WHERE id = $eid ";

    $delResult = mysqli_query ($connection, $delQuery);
    header('Location:delete.php');


mysqli_close($connection);
    
    

?>