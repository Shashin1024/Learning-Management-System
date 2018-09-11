<?php 


if (isset($_POST['submit'])) {
	
include_once 'dbh-inc.php';

$uname = mysqli_real_escape_string($conn,$_POST['uname']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$pass = mysqli_real_escape_string($conn,$_POST['pass']);
$passcon = mysqli_real_escape_string($conn,$_POST['passcon']);

 //email cheacking
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	# code...
	window.location="../submitlms/Reg-form?signup=email";
exit();
} else{
	$sql = "SELECT * FROM signup WHERE  email='$email'";
	$result = mysqli_query($conn,$sql);
	$resultcheck = mysqli_num_rows($result);


	if ($resultcheck > 0) {
		# code...
		window.location="../submitlms/Reg-form?signup=usertaken";      
	} else {
			//hashed pw
		$hashpPwd = password_hash)($pass, PASSWORD_dEFAULT);

		//INSERT Student to db

		$s ql = "INSERT INTO signup (name, name, email, pass, passcon) VALUES ('$uname', '$uname', '$email' ,'$hashpPwd' ,'$hashpPwd');";

		 mysqli_query($conn, $sql);
		 window.location="../submitlms/Reg-form?signup=success";
		 exit(); 
	}
}

}


}  else{
	window.location="../submitlms/Reg-form.php"
	exit();

}

 ?>