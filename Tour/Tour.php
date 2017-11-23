<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>The Bangalore Guide</title>
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
            /*position: relative;
            top:20px;*/
        }
		

		h1.a{
			align-content: center;
			color: white;
			font-family: "Lucida Console", Lucida, Monospace;
			text-shadow: 2px 2px 4px #000000;
            position: relative;
            top:20px;
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
    		position: fixed;
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
div.gallery {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
    height: 250px;
    position: relative;
    left: 20px;
    background-color: white;

}

div.gallery:hover {
    border: 1px solid #777;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    background-color: #bfbfbf;
}

div.gallery img {
    width: 100%;
    height: auto;
    height: 75%;
}

div.desc {
    padding: 15px;
    text-align: center;
    /*color: white;*/
            font-family: "Lucida Console", Lucida, Monospace;
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
  <a href="../3.php"><button class="button">Home</button></a>
  <a href="../food/main.php"><button class="button">Food</button></a>
  <a href="../Tour/Tour.php"><button class="button">Tour</button></a>
  <a href="../Fun/Fun.php"><button class="button">Fun</button></a>
  <a href="../Shop/Shop.php"><button class="button">Shop</button></a>
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

<script>0
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
<br/>
<h1 align="center" color="white" class="a">Look around the city</h1><br/>
<div class="gallery" style="position: relative;left: 100px;">
  <a  href="Airport/airport.php">
    <img src="Airport/1.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc">Kempegowda International Airport</div>
</div>

<div class="gallery" style="position: relative;left: 100px;">
  <a  href="Bpalace/Bpalace.php">
    <img src="Bpalace/1.jpeg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Bangalore Palace</div>
</div>

<div class="gallery" style="position: relative;left: 100px;">
  <a  href="Chinnaswamy/chinnaswamy.php">
    <img src="Chinnaswamy/1.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">M Chinnaswamy Stadium</div>
</div>

<div class="gallery" style="position: relative;left: 100px;margin-right: 100px; ">
  <a  href="Cubbon/cubbon.php">
    <img src="Cubbon/1.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Cubbon Park</div>
</div><br/>
<br/>
<div class="gallery" style="position: relative;left: 100px;">
  <a  href="HAL/HAL.php">
    <img src="HAL/1.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc">HAL museum</div>
</div>

<div class="gallery" style="position: relative;left: 100px;">
  <a  href="Isckon/Isckon.php">
    <img src="Isckon/1.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Isckon</div>
</div>

<div class="gallery" style="position: relative;left: 100px;">
  <a  href="LalBagh/LalBagh.php">
    <img src="LalBagh/1.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Lal Bagh</div>
</div>

<div class="gallery" style="position: relative;left: 100px;margin-right: 100px;">
  <a  href="Majestic/Majestic.php">
    <img src="Majestic/1.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Majestic</div>
</div><br/>
<br/>
<div class="gallery" style="position: relative;left: 100px;">
  <a  href="Museum/Museum.php">
    <img src="Museum/1.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc">Visvesvaraya Industrial and Technological Museum</div>
</div>

<div class="gallery" style="position: relative;left: 100px;">
  <a  href="Nandi/Nandi.php">
    <img src="Nandi/1.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Nandi Hills</div>
</div>

<div class="gallery" style="position: relative;left: 100px;">
  <a  href="Nationalpark/Nationalpark.php">
    <img src="Nationalpark/1.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">National Park</div>
</div>

<div class="gallery" style="position: relative;left: 100px;margin-right: 100px;">
  <a  href="Vidhana/vidhana.php">
    <img src="Vidhana/1.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Vidhana Soudha</div>
</div>
<!-- <a href="trial1.html"><img src="3.jpg" class="b"/></a> -->
</body>
</html>