<html>
<head> 
   <meta http-equiv="refresh" content="60"></head>
<body>
	<form method="post">
		<?php 
		include 'function.php';
		$con =dbconnect();
		$sql="Select Distinct Arraign from mytable";
		$res =$con->query ($sql);
		while ($row=$res->fetch_assoc()) {
			$x=$row['Arraign'];
			echo "<input type='checkbox' name='c[]' value='$x'/>$x <br>";

			# code...
		}

		?>
		<input type='submit' name="search" value="search">
	</form>
	<?php 
	if (isset($_POST['search'])) {
		if(!isset($_POST['c'])){
			die("Please select at least one value ");
		}
			else{
				$sql="select * from mytable where Arraign in(";
				$s=$_POST['c'];
				$n= count($s);

				for ($i=0; $i <$n ; $i++) {
				if($i<($n-1)){
					$sql .= "'$s[$i]'," ;

				} 
				else{
					$sql .= "'$s[$i]'" ;
				}
					# code...
				}//end for
				$sql .=")";
				}//end else
				$res=$con->query ($sql);
				tableDisplay($res);
				$con->close();

			}//end if isset
		
		# code...
		?>
</body>