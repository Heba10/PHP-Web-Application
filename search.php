<html>
<head>
<meta http-equiv="refrech" content="20">
</head>
<body>
	<form method="post" >
		<?php
		   const A="Any Value";
		    include 'function.php';
			    $con=dbconnect();
			    $sql=" SELECT DISTINCT Arraign FROM ".TABLE_NAME; //line 1

			    $res =$con->query($sql);
			    echo"<select name ='x'>";
			    echo"<option selected disabled>select Arraign</option>";
			    echo"<option >".A."</option>";
			
   	
   					while ($row = $res-> fetch_assoc()) {
   					$x =$row['Arraign']; //line3
   					echo"<option>$x</option>";
   				
   				}
   				echo"</select><br>";
   				
   				


   				$sql=" SELECT DISTINCT Sustain FROM ".TABLE_NAME; //line 1

			    $res =$con->query($sql);
			    echo"<select name ='y'>";
			    echo"<option selected disabled>select Sustain</option>";
			    echo"<option >".A."</option>";
			
   	
   					while ($row = $res-> fetch_assoc()) {
   					$y =$row['Sustain']; //line3
   					echo"<option>$y</option>";
   				
   				}
   				echo"</select><br>";
   				
   				


		?>  

     	<input type="submit" name="search" value="search"/> 
          </form>

<?php
          if(isset($_POST['search']))//line7
	{

          $x=$_POST['x'];
          $y=$_POST['y'];
            
     if($x!=A && $y!=A){
     	 $sql=" SELECT * FROM ".TABLE_NAME ." where Arraign ='$x'And Sustain='$y'";

 } 
    else if($x!=A && $y=A){
     	 $sql=" SELECT * FROM ".TABLE_NAME ." where Arraign ='$x'";

 }
  else if($x=A && $y!=A){
     	 $sql=" SELECT * FROM ".TABLE_NAME ." where Sustain='$y'";

 } else {
 	 $sql=" SELECT * FROM ".TABLE_NAME;
 }
$res =$con->query($sql);
tableDisplay($res);
}
?>

	</body>
	</html>