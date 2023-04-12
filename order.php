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
		$dbname = "order_data";
		$conn = mysqli_connect("127.0.0.1", "root", "", "order_data");

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)

		$name  = $_REQUEST['name'];
        $contact = $_REQUEST['contact'];
        $address= $_REQUEST['address'];
        $pincode = $_REQUEST['pincode'];
		$item = $_REQUEST['item'];
		$delivery_no = $_REQUEST['delivery_no'];
		


		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO ord_values VALUES ('$name','$contact','$address','$pincode','$item','$delivery_no')";

		if (mysqli_query($conn, $sql)) {
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$name\n $contact\n $address\n $pincode\n $item \n$delivery_no");
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