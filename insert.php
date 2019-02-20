<?php 
if(isset($_POST['insert']))
{$x=$_POST['x'];
$y=$_POST['y'];
$z=$_POST['z'];
 if(!is_numeric($y)){
 	die('Invalid data');
 }
 include 'function.php';
 $con =dbconnect();

 $sql = "INSERT INTO mytable Values('$x',$y,'$z')";
 if($con->query ($sql) == TRUE){
	echo "Record inserted";

}else{
	echo "Record Not inserted";
}
$con->close();
}
?>