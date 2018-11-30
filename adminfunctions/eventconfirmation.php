<?php include('../includes/connection.php') ;
 $refNo=$_POST['refNo'];
echo $refNo;

$sql="UPDATE tempEvents
SET status= 'confirmed' 
WHERE refNo ='$refNo'";

$query=mysqli_query($connection,$sql);




?>