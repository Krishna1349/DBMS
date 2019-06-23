<html>
	<head>
			<style>
			#button{
				background-color: #4facfe;
				margin-top: 5px;
				
				width:7em;
				height:2em;
			}
			input{
				margin: 7px;

				background-color: #43e97b;
			}
		
	  body{
		  background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);
	  }
	  #back{
		display:inline-block;
		float:left;
		margin-top:20px;
	}
			</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main-css.css">
<link rel="stylesheet" href="facultypage.css">	
	</head>
  <body>
<div class="topnav" id="myTopnav">
	<form action="facultypage.php">
	<button id="back">Back</button>
	</form>
	
	  <div class="dropdown" style="float:right; margin-right:45px;">
    <button class="dropbtn" ><img src="images/logout.png">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logout.php">logout</a>
      <a href="changefacpas.html">change password</a>
    </div>
  </div>
	</div><?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{

?>
		<div>
				<form id="frm" method="POST" action="res_qr_upd.php">
				Select department : <br>
														<input type="radio" name="d_id" value="CSE" required>CSE
														<input type="radio" name="d_id" value="MECH" required>MECH</br>
														<input type="radio" name="d_id" value="ECE" required>ECE
														<input type="radio" name="d_id" value="EEE" required>EEE</br>
														<input type="radio" name="d_id" value="SPT" required>SPT
														<input type="radio" name="d_id" value="BIO" required>BIO</br>
														<input type="radio" name="d_id" value="IT" required>IT</br>

					Select Semester : <br>
														<input type="radio" name="sem" value="2" required>2
														<input type="radio" name="sem" value="4" required>4</br>
														<input type="radio" name="sem" value="6" required>6
														<input type="radio" name="sem" value="8"required>8</br>
					Select Section : <br>
														<input type="radio" name="section" value="A" required>A
														<input type="radio" name="section" value="B" required>B</br>
					Select Any one : <br>
														<input type="radio" name="res" value="esa" required>ESA
														<input type="radio" name="res" value="isa1" required>ISA-1</br>
														<input type="radio" name="res" value="isa2" required>ISA-2<br>
														<!-- <input type="radio" name="res" value="asgn">Assignment</br> -->
				<button id="button" type="submit">submit</button>
			</form>
		</div>
</body>
</html>
<?php
	}
 ?>
