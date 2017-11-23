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

$sql = "SELECT id, username, page FROM likes where page='Snow_city.php'";
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
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: #ffffff; /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

	</style>

</head>

<body>
<h1 align="center">The Bangalore Guide</h1>
<div class="nav">
  <p class="welcome">Welcome!</p>
  <a href="../../3.php"><button class="button">Home</button></a>
  <a href="../../food/main.php"><button class="button">Food</button></a>
  <a href="../../Tour/Tour.php"><button class="button">Tour</button></a>
  <a href="../../Fun/Fun.php"><button class="button">Fun</button></a>
  <a href="../../Shop/Shop.php"><button class="button">Shop</button></a>
  <!-- <a href="trial3.html"><button class="button">About</button></a> -->
  <a href="C:\xampp\htdocs\login\logout.php"><button class="button" id="myBtn">Sign out</button></a>
  <input type="text" name="search" placeholder="Search" width="100px"/>
</div>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <button id="myBtn">login</button>
    <form>
    <input type="text" name="username">user_name</input>
    <input type="password" name="password">password</input>

  </form>
  </div>

</div>

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
<h1 align="center" style="margin-top: 10px;"> Snow City </h1>
<div class="w3-content w3-display-container" style="height: 600px;width: 700px;float: left;position: relative;left: 30px;">
  <img class="mySlides" src="1.jpg" style="width:100%;height: 80%;box-shadow: 10px 10px #051014;">
  <img class="mySlides" src="2.jpg" style="width:100%;height: 80%;box-shadow: 10px 10px #051014;">
  <img class="mySlides" src="3.jpg" style="width:100%;height: 80%;box-shadow: 10px 10px #051014;">
  <!--<img class="mySlides" src="4.jpg" style="width:100%;height: 80%">-->
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
<a href="https://www.google.co.in/maps/place/Snow+City/@13.0063474,77.5897756,17z/data=!3m1!4b1!4m5!3m4!1s0x3bae164e98b3c235:0xbb66b50f30bb665b!8m2!3d13.0063422!4d77.5919643"><button class="like">G Maps</button></a>
<a href="https://www.google.co.in/search?q=snow+city+bangalore&rlz=1C1CHBF_enIN719IN719&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi0kO664MjXAhVEjLwKHf59B88Q_AUICygC&biw=1396&bih=657"><button class="dislike">Google Images</button></a>
</div>
<div class="content2">
<p class="content">Welcome to Snow City@Bengaluru

"Oh! the snow, the beautiful snow, Filling the sky and earth below, over the housetops, over the street, over the heads of the people you meet. Dancing, Flirting, and Skimming along. A massive indoor snow theme park covering 12500 sq.ft with temperature maintained at subzero degree centigrade. Entire area is filled with snow made out of water and air, which is eco-friendly and edible too. Snow City offers an experience in snow balling, mountain climbing, sliding, Zorbing, basketball, dancing, etc. alongside a fantasy snow castle and first of a kind 5D theatre enhancing your experience. One of the biggest indoor snow park and entertainment center in South India. Snow City is the first attraction which is ready as part of the Phase I initiative. Other attractions will be ready as part of the Phase || by the end of 2012. All attractions are now concepts, suitable for family entertainment, enticing tourists from all over India to Bangalore. Snow City is aimed to become the flagship project of Karnataka Tourism. It is a must-visit attraction and will regale adults and children alike. It offers an experience of snowy bliss. </p></div>
<script type="text/javascript">
    var l=0;
    var dl=0;
    function like(x){
        l+=1;
        x.innerHTML="Like  "+l;
    }

    function dislike(x){
        dl+=1;
        x.innerHTML="Dislike  "+dl;
    }
</script>
</body>
</html>