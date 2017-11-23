<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>The Bangalore Guide</title>
	<style type="text/css">
		body{/*background: url(1.jpg) no-repeat left 140px center fixed; 
             background-size:1100px 600px;*/
             background-color: #0e2a34;
			}
		img.a{
			margin-left: 1100px;
			right : 0px;
			width: 350px;
			height: 275px;
			margin-bottom: 0px;
			margin-top:100px;
		}
		img.b{
			float:right;
			width: 350px;
			height: 275px;
			right : 0px;
			margin: 0 0 10px 10px;

		}

		h1{
			align-content: center;
			color: white;
			font-family: "Lucida Console", Lucida, Monospace;
			text-shadow: 2px 2px 4px #000000;
		}
		p.paragraph{
			align-content: center;
			color: white;
			font-family: "Lucida Console", Lucida, Monospace;
			font-size: 20px;
			float: left;
		}
		p.paragraph1{
			align-content: center;
			color: white;
			
			font-size: 200px;
			
		}
		div.paragraph{
			width : 1000px;
			height: 100px;
			margin-left: 250px; 
			padding-top: 100px;
			
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
img.myslides{
	margin-left: 100px;

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
input[type=password]{
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
input[type=email]{
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

/* Set a style for all buttons */
/*button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}
*/
/* Extra styles for the cancel button */
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
  <a href="3.php"><button class="button">Home</button></a>
  <a href="food\main.php"><button class="button">Food</button></a>
  <a href="Tour\Tour.php"><button class="button">Tour</button></a>
  <a href="Fun\Fun.php"><button class="button">Fun</button></a>
  <a href="Shop\Shop.php"><button class="button">Shop</button></a>
  <!-- <a href="trial3.php"><button class="button">About</button></a> -->
  <a href="..\login\logout.php"><button class="button" id="myBtn" >Sign out</button></a>
  <input type="text" name="search" placeholder="Search" width="100px"/>
</div>

<ul class="left_nav">
	<li><a href="https://www.google.co.in/destination?q=Bangalore&client=firefox-b-ab&dcr=0&site=search&output=search&dest_mid=/m/09c17&sa=X&ved=0ahUKEwi5t7up2dLXAhXIN48KHePmDNQQ6tEBCEooBDAE">Locations</a></li>
	<li><a href="https://www.google.co.in/maps/place/Bengaluru,+Karnataka/@12.9538477,77.3507442,10z/data=!3m1!4b1!4m5!3m4!1s0x3bae1670c9b44e6d:0xf8dfc3e8517e4fe0!8m2!3d12.9715987!4d77.5945627?dcr=0">Map</a></li>
	<!-- <li><a href="trial1.php">About City</a></li> -->
	<!-- <li><a href="trial1.php">Landmarks</a></li> -->
	<li><a href="https://en.wikipedia.org/wiki/Bangalore">Wiki</a></li>
	<li><a href="https://www.accuweather.com/en/in/bengaluru/204108/weather-forecast/204108">Weather</a></li>
</ul>
<div class="w3-content w3-section" style="max-width:800px;max-height:529px;margin-left: 200px;margin-top: 50px;float: left;box-shadow: 10px 10px #051014;">
  <img class="mySlides" src="1.jpg" style="width:100%">
  <img class="mySlides" src="2.jpg" style="width:100%">
  <img class="mySlides" src="3.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<!-- <a href="trial1.html"><img src="2.jpg" class="a"/></a> -->
<div class="paragraph">
<!-- <p class="paragraph">Bangalore officially known as Bengaluru , is the capital of the Indian state of Karnataka. It has a population of about 8.42 million and a metropolitan population of about 8.52 million, making it the third most populous city and fifth most populous urban agglomeration in India. It is located in southern India on the Deccan Plateau. Its elevation is over 900 m (3,000 ft) above sea level, the highest of India's major cities.</p> -->
	<h1><pre>   


	Everything 
	You  
	need 
	in 
	Bangalore!</pre></h1>
</div>
<!-- The Modal -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="3.php">
   <!--  <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div> -->

    <div class="container">
      <label><b>Username</b></label>
      <input type="email" id="email" placeholder="Enter Email" name="email" required>

      <label><b>Password</b></label>
      <input type="password" id="psw" placeholder="Enter Password" name="psw" required>
        
      <button onclick="signin()" type="submit" class="button">Login</button>
      <!-- <input type="checkbox" checked="checked"> Remember me -->
    </div>
<br/><br/>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     <!--  <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
</div>

<script>
// Get the modal
var a=document.getElementById('email');
var b=document.getElementById('psw');
a.value="";
b.value="";
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- <a href="trial1.html"><img src="3.jpg" class="b"/></a> -->
</body>
</html>