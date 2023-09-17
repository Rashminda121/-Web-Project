<?php  


if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name) || empty($email)) {
		header("Location: contact.html");
	}else {

		$sql = "INSERT INTO contact(name,email, message) VALUES('$name','$email' ,'$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo '<script type="text/javascript">'; 
			echo 'alert("Your message was sent successfully!");'; 
			echo 'window.location.href = "contact.html";';
			echo '</script>';
			
		}else {
			echo '<script type="text/javascript">'; 
			echo 'alert("Your message could not be sent!");'; 
			echo 'window.location.href = "index.html";';
			echo '</script>';
		}
	}

}else {
	header("Location: index.html");
}