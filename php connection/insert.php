<?php
		$conn = mysqli_connect("localhost", "root", "", "employee");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$employeename = $_REQUEST['employeename'];
		$salary = $_REQUEST['salary'];
		$gender = $_REQUEST['gender'];
		$sql = "INSERT INTO details VALUES ('$employeename',
			'$salary','$gender')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored</h3>";
			echo nl2br("\n$employeename\n $salary\n "
				. "$gender");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		mysqli_close($conn);
?>