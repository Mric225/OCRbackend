<?php 
	$db = mysqli_connect('localhost','root','','flutter');

	$email = $_POST['email'];
	$motdepasse = $_POST['motdepasse'];

	
    // check user
    $sql = "SELECT * FROM inscription WHERE email = '".$email."' AND motdepasse = '".$motdepasse."'";
	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Success");
		
	}else{
		echo json_encode("Error");
	}

?>
