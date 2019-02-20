<html>
<head>
<meta http-equiv="refrech" content="20">
</head>
<body>
	<form method="POST" >
		<select name="x" onchange="this.form.submit()">
			<option selected disabled > select Hatchet </option> 
			<?php
			    include'function.php';
			    $con=dbconnect();
   				$sql=" SELECT * FROM ".TABLE_NAME ;//line2
   				$res =$con-> query($sql);
   				while ($row =$res-> fetch_assoc()) {
   					$x=$row['Hatchet']; //line3
   					echo"<option>$x</option>";
   				
   				}
			    ?>
			
		</select><br>
		<?php 
		if(isset($_POST["x"])){

			$a=$_POST["x"];
			$sql="select * from mytable where Hatchet=$a";
			$res=$con->query($sql);
			$row =$res->fetch_assoc();

			$b=$row ["Arraign"];

			$c=$row ["Sustain"];

			echo"Hatchet:<input name='x2' value=$a readonly><br>";

			echo"Arraign:<input name='y' value=$b ><br>";

			echo"Sustain:<input name='z' value=$c ><br>";

			echo"<input type='submit' value='update' name='update' ><br>";

		}

		?>

	</form>
	<?php 

	if(isset($_POST['update']))//line7
	{
          $x=$_POST['x2'];
          $y=$_POST['y'];//line8
          $z=$_POST['z'];//line9

          $sql="update ".TABLE_NAME ." set Arraign='$y' ,Sustain='$z' where Hatchet=$x"; //line10

             if($con->query ($sql) == TRUE){

	            echo "update succ";

                }else{
	               echo "error";
                }
	}

	?>
	</body>
	</html>