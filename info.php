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
		$ssn=$_POST['ssn'];
		?>
<html>
<style>
	body{
		background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);
	}
</style>
</head>
	<body>
      <?php
			$query="select *from student_dtls where ssn='$ssn'";
			$res=mysqli_query($conn,$query);
			$row=mysqli_fetch_array($res);
			?>
			<h4> SSN : <?php echo $row[0];?></h4>

      <h4>student name : <?php echo $row[1];?></h4>
      <h4>Gender : <?php echo $row[3];?></h4>
<h4>DOB : <?php echo $row[5];?></h4>
<h4>Section : <?php echo $row[6];?></h4>

<h4>Sem : <?php echo $row[7];?></h4>

<h4>Dept : <?php echo $row[8];?></h4>

<h4>Age : <?php echo $row[9];?></h4>
			<h4> Adress : <?php echo $row[2];?></h4>



      <h4> Ph number : <?php echo $row[4];?></h4>




</body>
</html>
<?php
	}
?>
