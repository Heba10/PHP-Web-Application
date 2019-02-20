<html>
<head>
<meta http-equiv="refrech" content="20">
</head>
<body>
	<form method="post" >
		<select name="x">
			<option selected disabled > select Hatchet </option> 
			<?php
			    include 'function.php';
			    $con=dbconnect();
   				$sql=" SELECT * FROM ". TABLE_NAME ;//line2
   				$res =$con->query($sql);
   				while ($row = $res-> fetch_assoc()) {
   					$x =$row['Hatchet']; //line3
   					echo"<option>$x</option>";
   				
   				}
			    ?>
			
		</select><br>
		Enter new Arraign : <input name="y"><br> <!line4>
		Enter new Sustain : <input name="z"><br> <!line5>
		<input type="submit" name="update" value="update"/> <!line6>

	</form>
	<?php 
	if(isset($_POST['update']))//line7
	{

          $x=$_POST['x'];
          $y=$_POST['y'];//line8
          $z=$_POST['z'];//line9

          $sql = "update " .TABLE_NAME." set Arraign='$y',Sustain='$z' where Hatchet =$x"; //line10

             if($con->query($sql) == TRUE){
	            echo "update succ";

                  }else{
	                echo "error";
                    }
	}//end if isset

	?>
	</body>
	</html>