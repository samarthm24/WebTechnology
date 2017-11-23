 <?php
 session_start();
 $user=$_SESSION["username"];
$servername = "localhost";
$username = "samarth";
$password = "123";
$dbname = "wt";
$page="Area_83.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, page FROM likes where username='$user' and page='$page'";
$result = $conn->query($sql);
if($result->num_rows==0){
$sql = "INSERT INTO likes (username, page)
VALUES ('$user', '$page')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	$sql = "DELETE FROM likes WHERE username='$user' and page='$page'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}

$conn->close();
header("location:Area_83.php");
?> 
