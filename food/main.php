<!DOCTYPE html>
<html>
<head>
	<title>The Bangalore Guide</title>
	<style type="text/css">
		body{/*background: url(1.jpg) no-repeat left 140px center fixed; 
             background-size:1100px 600px;*/
             background-color: #0e2a34;
			}
		.butto {
  border-radius: 4px;
  background-color: #white;
  border: none;
  color: #grey;
  text-align: center;
  font-size: 14px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.butto span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.butto:hover span {
  opacity: 0.5;
}

		

		h1{
			align-content: center;
			color: white;
			font-family: "Lucida Console", Lucida, Monospace;
			text-shadow: 2px 2px 4px #000000;
		}
		
		
		p.welcome{
			align-content: center;+-
      
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

	</style>

</head>

<body>
<h1 align="center">The Bangalore Guide</h1>
<div class="nav">
  <p class="welcome">Welcome!</p>
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
<section class="wrapper mtop2 ptop">
            <h2 class="ui header">
                
                <span class="sub header">
                    <span class="segment_sub_heading">
                        Discover restaurants by type of meal                    </span>
                </span>
            </h2>
<a  href="north Indian/north.php">
<button class="butto"><span><img src="north.png" style="height: 48px; width: 48px; display: inline-block;"/><br/>NORTH INDIAN </span></button>
</a>
<a  href="south/south.php">
<button class="butto"><span><img src="south.png" style="height: 48px; width: 48px; display: inline-block;"/><br/>SOUTH INDIAN </span></button></a>

<button class="butto" onclick="abc()"><span><img src="continental.jpg" style="height: 48px; width: 48px; display: inline-block;"/><br/> CONTINENTAL</span></button>
<a  href="chinese/chinese.php">
<button class="butto"><span><img src="chinese.png" style="height: 48px; width: 48px; display: inline-block;"/><br/> CHINESE</span></button></a>
<a  href="italian/italian.php">
<button class="butto" ><span><img src="italian.png" style="height: 48px; width: 48px; display: inline-block;"/><br/> ITALIAN </span></button></a>
<button class="butto" onclick="abc()"><span><img src="mexican.png" style="height: 48px; width: 48px; display: inline-block;"/><br/>MEXICAN</span></button>
            
        </section>

<!--  
<a class="twitter-timeline" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw">National Park Tweets - Curated tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8">--><script type="text/javascript">
  function abc(){
    alert("coming soon!");
  }
</script>
</body>
</html>