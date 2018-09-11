


 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lmssignup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$uname = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pwd1'];
	$passcon = $_POST['pwd2'];

$sql = "INSERT INTO signup(uname,name,email,pass,passcon) values ('$uname','$name','$email','$pass','$passcon')";

if ($conn->query($sql) === TRUE) {
    include 'index.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


/*
//validate email and password
$slquery = "SELECT 1 FROM signup WHERE email = '$email'";
$selectresult = mysql_query($slquery);
if(mysqli_num_rows($selectresult)>0)
    {
         $msg = 'email already exists';
    }
    elseif($pwd1 != $pwd2){
         ?>

         <script>
         	alert("Password did not match");
         </script>

         <?php 
    }


*/




if ($_POST['pwd1']!= $_POST['pwd2'])
 {
     ?>

<script>
    alert("Passwords did not matching, Please Try again");
</script>

     <?php 
 }

$conn->close();
?>
