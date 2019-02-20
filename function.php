<?php
function dbconnect()
{ $con = new mysqli("localhost","root","","db");
  if($con->connect_error){
  	die("connection Error");


  }
  return $con;
}
const TABLE_NAME="mytable";
function tableDisplay($res){
	if($res -> num_rows > 0){
		echo "<table border='1'>";
		echo "<th>Arraign</th>";
		echo "<th>Hatchet</th>";
		echo "<th>Sustain</th>";
		while ($row=$res -> fetch_assoc()) {
			$x =$row["Arraign"];
			$y =$row["Hatchet"];
			$z =$row["Sustain"];

			echo "<tr>";
			echo "<td>$x</td>";
			echo "<td>$y</td>";
			echo "<td>$z</td>";
			echo "</tr>";

		}
		echo "</table>";
	}
	else //num=0
	{
		echo "NO data";
	}
}
?>