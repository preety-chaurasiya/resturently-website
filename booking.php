<!DOCTYPE html>
<html>

<head>
	<title>Insert Page </title>
</head>

<body>
	<center>
		<?php

		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "booking_slot";
		$conn = mysqli_connect("127.0.0.1", "root", "", "booking_slot");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)

		$name  = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone= $_REQUEST['phone'];
		$date= $_REQUEST['date'];
		$time= $_REQUEST['time'];
		$no_of_people= $_REQUEST['no_of_people'];
        $celebration_name = $_REQUEST['celebration_name'];
		


		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO booking VALUES ('$name','$email','$phone','$date','$time','$no_of_people','$celebration_name')";

		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $email\n $phone\n $date\n $time\n $no_of_people\n $celebration_name\n ");
		} else {
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>