<?php
require '../connection.php';
	if(ISSET($_POST['submit'])){

		$merchant_id= $_POST['merchant_id'];
		$name= $_POST['name'];
		$contact_number = $_POST['contact_number'];
		$plate_number = $_POST['plate_number'];
		$username = $_POST['username'];
		$password= $_POST['password'];
		$c_password= $_POST['c_password'];
		$photo=$_POST['photo'];

		$user_data = 'username='. $username. '&name='. $name. '&plate_number='. $plate_number. '&contact_number='. $contact_number;
		
	if($password !== $c_password){
	    echo ("<script>
			alert('The confirmation password  does not match');
			document.location.href = 'add_deliveryman.php?error=The confirmation password  does not match&$user_data';
			</script>");
	}

	else{

		$sql = "SELECT * FROM deliveryman WHERE username='$username' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
	         echo ("<script>
			alert('The username is taken try another');
			document.location.href = 'add_deliveryman.php?error=The username is taken try another&$user_data';
			</script>");
		}else{

		$conn->query("INSERT INTO `deliveryman`(merchant_id, name, contact_number, plate_number, username, password,photo) VALUES('$merchant_id','$name','$contact_number','$plate_number','$username','$password','$photo')") or die(mysqli_error());
		
		echo ("<script>
		alert('Added Successfully');
		document.location.href = 'deliveryman.php';
		</script>");
		
		}
	}

	/*$conn->query("INSERT INTO `deliveryman`(merchant_id, name, contact_number, plate_number, username, password) VALUES('$merchant_id','$name','$contact_number','$plate_number','$username','$password')") or die(mysqli_error());
	echo ("<script>
		alert('Added Successfully');
		document.location.href = 'deliveryman.php';
		</script>");*/
}

?>