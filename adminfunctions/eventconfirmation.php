<?php include('../includes/connection.php') ;
 $id=$_POST['id'];
echo $id;

$sql="UPDATE events
SET status= 'confirmed' 
WHERE id=$id";

$query=mysqli_query($connection,$sql);




?>