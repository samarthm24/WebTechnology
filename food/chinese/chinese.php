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
.button1{
  background-color: #009999; /* Green */
        border: 1px solid black;
        /*border-top-style: none;
        border-bottom-style: none;*/
        border-style: none; 
        color: white;
        padding: 15px 22px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
        /*float: left;*/
        /*margin-top: 4px;*/
        /*margin bottom: 4px;*/
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
.button1:hover{
  background-color: #00ffff;
        color: #051014;
        transition: 0.7s;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
div.table1{
  position : relative;
  top:40px;
  left:20px;
  /*box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);*/
  /*background-color: #66ffcc;*/
}
/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}
.button:hover {
      background-color: #00ffff;
      color: #051014;
      transition: 0.7s;
      box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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

<!-- food special styles starts here -->
.table_img{
    background-repeat: repeat;
  display: block;
  }
  .table_css{
    border: 2px solid black;
     border-radius: 4px;
    background-color: white;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
    color: grey;
    position : relative;
  top:40px;
  height: 300px;
  width: 700px;
  left:20px;
  }
  .table_data_grey{
    color:grey;
    font-size: 10pt;
  }
  .table_rest_name{
    color:red;
    font-size: 16pt;
    font-weight: bold;
  }
  .table_rest_location{
    color:black;
    font-size: 12pt;
    font-weight: bold;
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
<h1 align="center">chinese Restraurants in Bangalore</h1>
</script>
<!-- the body of food starts here  -->
<!-- <div class="table1"> -->
<!-- </div> -->
<a target="_blank" href="hunan/hunan.php">
<table class="table_css" align="center" margin-top:100px >
  <tr >
    <td colspan="3" rowspan="4"><img src="hunan.png" class="table_img" height="150" width="200"></td>
    <td class="table_data_grey">Casual Dining,Bar</td>

    <tr><td class="table_rest_name">Hunan</td></tr>
  </tr>
  <tr>
    <td>
    
  Koramangala 5th Block</td></tr>
  <tr>
  <td class="table_data_grey">
  123, 1st Floor, KHB Colony, Opposite California Pizza Kitchen
  </td>
  </tr>
  <tr>
    <td colspan="4"><hr></td>
  </tr>
  <tr rowspan="2">
    <td class="table_data_grey" colspan="3">CUISNES:</td>
    <td >Chinese, Thai, Seafood
    </td>
  </tr>
  <tr >
    <td colspan="3" class="table_data_grey">COST FOR TWO:</td>
    <td>Rupees:1,100</td>
  </tr>
  <tr rowspan="2">
    <td colspan="3" class="table_data_grey" >HOURS:</td>
    <td >
  12 Noon to 4 PM, 7 PM to 11:30 PM (Mon-Sun) 
    </td>
  </tr>
  <tr>
    <td colspan="3" class="table_data_grey">FEATURED IN:</td>
    <td>
  Pan-Asian delicacies</td>
  </tr>
</table></a>

<a target="_blank" href="mainland/mainland.php">
<table class="table_css" align="center" margin-top:100px >
  <tr >
    <td colspan="3" rowspan="4"><img src="mainland.png" class="table_img" height="150" width="200"></td>
    <td class="table_data_grey">Casual Dining</td>

    <tr><td class="table_rest_name">The Mainland China</td></tr>
  </tr>
  <tr>
    <td>
    
  Indiranagar</td></tr>
  <tr>
  <td class="table_data_grey">4032, 100 ft Road, HAL II stage Next to Domlur Bridge, Indiranagar</td>
  </tr>
  <tr>
    <td colspan="4"><hr></td>
  </tr>
  <tr rowspan="2">
    <td class="table_data_grey" colspan="3">CUISNES:</td>
    <td >Chinese
    </td>
  </tr>
  <tr >
    <td colspan="3" class="table_data_grey">COST FOR TWO:</td>
    <td>Rupees:1,700</td>
  </tr>
  <tr rowspan="2">
    <td colspan="3" class="table_data_grey" >HOURS:</td>
    <td >12:30 PM to 3:30 PM, 7 PM to 11 PM (Mon-Sun) 
    </td>
  </tr>
  <tr>
    <td>
  </td>
  </tr>
</table></a>

<a target="_blank" href="chungs/chungs.php">
<table class="table_css" align="center" margin-top:100px >
  <tr >
    <td colspan="3" rowspan="4"><img src="chungs.png" class="table_img" height="150" width="200"></td>
    <td class="table_data_grey">CASUAL DINING</td>

    <tr><td class="table_rest_name">Chung's Chinese Corner</td></tr>
  </tr>
  <tr>
    <td>
    
  Malleshwaram</td></tr>
  <tr>
  <td class="table_data_grey">88/1, Shubha Arcade, 16th Cross, Margosa Road, Malleshwaram, Bangalore </td>
  </tr>
  <tr>
    <td colspan="4"><hr></td>
  </tr>
  <tr rowspan="2">
    <td class="table_data_grey" colspan="3">CUISNES:</td>
    <td >Chinese
    </td>
  </tr>
  <tr >
    <td colspan="3" class="table_data_grey">COST FOR TWO:</td>
    <td>Rupees:700</td>
  </tr>
  <tr rowspan="2">
    <td colspan="3" class="table_data_grey" >HOURS:</td>
    <td >12 Noon to 3:30 PM, 7 PM to 11 PM (Mon-Sun) 
    </td>
  </tr>
</table></a>

<a target="_blank" href="sichuan/sichuan.php">
<table class="table_css" align="center" margin-top:100px >
  <tr >
    <td colspan="3" rowspan="4"><img src="sichuan.png" class="table_img" height="150" width="200"></td>
    <td class="table_data_grey">CASUAL DINING</td>

    <tr><td class="table_rest_name">Sichuan</td></tr>
  </tr>
  <tr>
    <td>
    
  HSR</td></tr>
  <tr>
  <td class="table_data_grey">1552, 19th Main, Sector 1, Opposite Indian Oil Petrol Bunk,Bangalore</td>
  </tr>
  <tr>
    <td colspan="4"><hr></td>
  </tr>
  <tr rowspan="2">
    <td class="table_data_grey" colspan="3">CUISNES:</td>
    <td >Chinese
    </td>
  </tr>
  <tr >
    <td colspan="3" class="table_data_grey">COST FOR TWO:</td>
    <td>Rupees:700</td>
  </tr>
  <tr rowspan="2">
    <td colspan="3" class="table_data_grey" >HOURS:</td>
    <td >
11 AM to 3 PM, 7 PM to 11 PM (Mon-Sun)  
    </td>
  </tr>
</table></a>




</body>
</html>