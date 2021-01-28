
<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$subject = $_POST['subject'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'business');

if($conn->connect_error){

	die('Connection Failed   : '.$conn->connect_error);

}else{
	$stmt = $conn->prepare("insert into mytable1(firstname, lastname, email, subject) values(?, ?, ?, ?)");

	 $stmt->bind_param("ssss",$firstname, $lastname, $email, $subject);
	 $stmt->execute();
	 echo "Your Information has been sent to us, we would get to you shortly.";
	 $stmt->close();
	 $conn->close();


}




?>