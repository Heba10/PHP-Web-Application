<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='refrech' content='5'>
</head>
<body>
<?php 
   include 'function.php';
   $con=dbconnect();
   $sql=" SELECT * FROM ".TABLE_NAME;
   $res =$con->query($sql);
   tableDisplay($res);
   $con->close();

   ?>
</body>
</html>