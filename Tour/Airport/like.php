 <?php
 session_start();
 $user=$_SESSION["username"];
$servername = "localhost";
$username = "samarth";
$password = "123";
$dbname = "wt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, page FROM likes where username='$user' and page='airport.php'";
$result = $conn->query($sql);
if($result->num_rows==0){
$sql = "INSERT INTO likes (username, page)
VALUES ('$user', 'airport.php')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
	$sql = "DELETE FROM likes WHERE username='$user'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

}

$conn->close();
header("location:airport.php");
?> 
