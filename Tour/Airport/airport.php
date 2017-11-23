 <?php
 session_start();
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

$sql = "SELECT id, username, page FROM likes where page='airport.php'";
$result = $conn->query($sql);
$no_likes=$result->num_rows;
// if ($result->num_rows > 0) {
//     // output data of each row
    
// } else {
//     echo "0 results";
// }
$conn->close();
?> 

<!DOCTYPE html>
<html>
<head>
    
	<title>The Bangalore Guide</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css">
		body{/*background: url(1.jpg) no-repeat left 140px center fixed; 
             background-size:1100px 600px;*/
             background-color: #0e2a34;
			}
		
		

		h1{
			align-content: center;
			color: white;
			font-family: "Lucida Console", Lucida, Monospace;
			text-shadow: 2px 2px 4px #000000;
		}
		
		
		p.welcome{
			align-content: center;
			color: black;
			font-family: "Lucida Console", Lucida, Monospace;
			font-size: 15px;
			float: left;
			padding-left: 20px;
			padding-right: 20px;
		}
		div.nav{
			position: sticky;
			width:100%;
			background-color: #009999;
			color: black;
			float: left;
			display: inline-block;
		}
		.button {
    		background-color: #009999; /* Green */
    		border: 1px solid black;
    		/*border-top-style: none;
    		border-bottom-style: none;*/
    		border-style: none; 
    		color: white;
    		padding: 15px 32px;
    		text-align: center;
    		text-decoration: none;
    		display: inline-block;
    		font-size: 16px;
    		cursor: pointer;
    		float: left;
    		margin-top: 4px;
    		margin bottom: 4px;
		}
		 .button:not(:last-child) {
    	border-right: none; /* Prevent double borders */
		}
		.button:active {
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
        div.content{
            position: relative;
            top: 100px;
            left: 250px;
            margin-top: 25px;
            margin-left: 100px;
            align-content: center;
        }
        button.maps{
            background-color: #000080; /* Green */
            /*background-image: url(like.png);*/
            /*background-size:10px 20px;*/
            border: 1px solid black;
            /*border-top-style: none;
            border-bottom-style: none;*/
            border-style: none; 
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
           /* display: inline-block;*/
            font-size: 16px;
            cursor: pointer;
            /*float: left;*/
            margin-top: 4px;
            margin bottom: 4px;
        }
        button.like{
            background-color: #000080; /* Green */
            /*background-image: url(like.png);*/
            /*background-size:10px 20px;*/
            border: 1px solid black;
            /*border-top-style: none;
            border-bottom-style: none;*/
            border-style: none; 
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
           /* display: inline-block;*/
            font-size: 16px;
            cursor: pointer;
            /*float: left;*/
            margin-top: 4px;
            margin bottom: 4px;
        }
        button.dislike{
            background-color: #000080; /* Green */
            border: 1px solid black;
            position: relative;
            left: 20px;
            /*border-top-style: none;
            border-bottom-style: none;*/
            border-style: none; 
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
           /* display: inline-block;*/
            font-size: 16px;
            cursor: pointer;
            /*float: left;*/
            margin-top: 4px;
            margin bottom: 4px;
        }
        .like:hover {
        background-color: #00ffff;
        color: #051014;
        transition: 0.7s;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .dislike:hover {
        background-color: #00ffff;
        color: #051014;
        transition: 0.7s;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
		.button:hover {
    	background-color: #00ffff;
    	color: #051014;
    	transition: 0.7s;
    	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
		}
		ul.left_nav{
			list-style-type: none;
    		margin-top: 75px;
   		    padding: 0;
    		width: 12%;
    		background-color: #0e2a34;
    		/*position: fixed;*/
    		height: 80%;
    		overflow: auto;
    		font-size: 20px;
    		color: #009999;
		}
		li a {
    		display: block;
    		color: #009999;
    		padding: 8px 0 8px 16px;
    		text-decoration: none;
}

li a.active {
    		background-color: #4CAF50;
    		color: black;
}
div.content2{
    position: relative;
    height: 500px;
    width: 600px;
    float: right;
    /*left: 200px;*/
    top: 100px;
    margin-right: 100px;
}
p.content{
    color: white;
    font-family: "Lucida Console", Lucida, Monospace;
    font-size: 15px;
    text-align:  justify;
}
li a:hover:not(.active) {
    background-color: #009999;
    color: white;
    transition: 0.6s;
}

input[type=text]{
    width: 500px;
    padding: 12px 20px;
    margin: 8px ;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-image: url("searchicon.png");
    box-sizing: border-box;
    background-color: white;
    color:black;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
	</style>

</head>

<body>

<h1 align="center">The Bangalore Guide</h1>
<div class="nav">
  <p class="welcome" id="fisrt_par">Welcome</p>
  <script type="text/javascript">
        var username="<?php echo $_SESSION['username'];?>"
        var welcome=document.getElementById('fisrt_par');
        welcome.innerHTML="Hey "+username;
    </script>
  <a href="../../3.php"><button class="button">Home</button></a>
  <a href="../../food/main.php"><button class="button">Food</button></a>
  <a href="../../Tour/Tour.php"><button class="button">Tour</button></a>
  <a href="../../Fun/Fun.php"><button class="button">Fun</button></a>
  <a href="../../Shop/Shop.php"><button class="button">Shop</button></a>
  <!-- <a href="trial3.html"><button class="button">About</button></a> -->
  <a href="../../../login/logout.php"><button class="button" id="myBtn">Sign out</button></a>
  <input type="text" name="search" placeholder="Search" width="100px"/>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form>
    
    
    <input type="text" name="username">user_name</input>
    <button id="myBtn1">Post</button>

  </form>
  </div>

</div>

<h1 align="center" style="margin-top: 10px;"> Airport </h1>
<div class="w3-content w3-display-container" style="height: 600px;width: 700px;float: left;position: relative;left: 30px;">
  <img class="mySlides" src="1.jpg" style="width:100%;height: 80%;box-shadow: 10px 10px #051014;">
  <img class="mySlides" src="2.jpg" style="width:100%;height: 80%;box-shadow: 10px 10px #051014;">
  <img class="mySlides" src="3.jpg" style="width:100%;height: 80%;box-shadow: 10px 10px #051014;">
  <!-- <img class="mySlides" src="4.jpg" style="width:100%;height: 80%"> -->
  <!-- <img class="mySlides" src="img_forest.jpg" style="width:100%"> -->

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
<div class="content">
    <form action="like.php" method="post">
<button class="like" id="like">Like</button></form>
<script> 
        var no_likes = "<?php echo $no_likes;?>"
            // alert(no_likes);
            if(no_likes!=0)
            {
                var like_btn=document.getElementById('like');
                like_btn.innerHTML="Like "+no_likes;
            }
</script>
<!-- <button class="dislike" id="myBtn" >Comment</button><br/><br/> -->
<a href="https://www.google.co.in/maps/place/Kempegowda+International+Airport/@13.1986348,77.7044041,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae1cfe75446265:0x296c70e9a129418e!8m2!3d13.1986348!4d77.7065928"><button class="like">G Maps</button></a>
<a href="https://www.google.co.in/search?q=Bangalore+airport&source=lnms&tbm=isch&sa=X&ved=0ahUKEwiQncqxs6_XAhXDMo8KHesDCZQQ_AUIDCgD&biw=1536&bih=758"><button class="dislike">Google Images</button></a>
</div>
<div class="content2">
<p class="content">Kempegowda International Airport (IATA: BLR, ICAO: VOBL) is an international airport serving Bangalore, the capital of the Indian state of Karnataka. Spread over 4,000 acres (1,600 ha), it is located about 40 kilometres (25 mi) north of the city near the village of Devanahalli. It is owned and operated by Bangalore International Airport Limited (BIAL), a public–private consortium. The airport opened in May 2008 as an alternative to increased congestion at HAL Airport, the original primary commercial airport serving the city. It is named after Kempe Gowda I, the founder of Bangalore. Kempegowda International Airport became Karnataka's first fully solar powered airport developed by CleanMax Solar.</p></div>

<script>
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>