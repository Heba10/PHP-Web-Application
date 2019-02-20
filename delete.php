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
   				$sql=" SELECT * FROM ".TABLE_NAME;//line2
   				$res =$con->query($sql);
   				while ($row = $res-> fetch_assoc()) {
   					$x =$row['Hatchet']; //line3
   					echo"<option>$x</option>";
   				
   				}
			    ?>
			
		</select><br>
		
		<input type="submit" name="delete" value="delete"/> <!line6>

	</form>
	<?php 
	if(isset($_POST['delete']))//line7
	{

          $x=$_POST['x'];
        

          $sql="delete from mytable where Hatchet=$x"; //line10

             if($con->query($sql) == TRUE){
	            echo "deleted succ";

                  }else{
	                echo "error";
                    }
	}//end if isset

	?>
	</body>
	</html>