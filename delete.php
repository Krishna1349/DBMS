<?php
	$servername="localhost";
	$uname="root";
	$pswd="";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{
		?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main-css.css">
<link rel="stylesheet" href="facultypage.css">

</head>
<body>
<?php $fid='fcse110';?>
<div class="topnav" id="myTopnav">
  <a href="#news"><?php echo $fid ; ?></a>
  <a href="#home" class="active">Attendence</a>
  <a href="#news">sports</a>
  <a href="#contact">address</a>

  <a href="#about">info of student</a>
  <a href="#about">Library info</a><div class="dropdown">
    <button class="dropbtn">Result
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#" onclick="disp()">ISA 1</a>
      <a href="#">ISA 2</a>
      <a href="#">ESA</a>
      <a href="#about">Assignment</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn" style="float:right;"><img src="images/logout.png">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="logout.php">logout</a>
      <a href="changefacpas.html">change password</a>
    </div>
  </div>
</div>
	<div id="isa_1">

			<form method="POST" action="update.php">
			Enter ssn : <input type="text" name="ssn" placeholder="01FB16ECS153">
						<button type="submit">submit</button>
			</form>

	</div>
	<script>
	 function disp()
   {
		   var isa1=document.getElementById('isa_1');
		     isa1.style.display='block';
	 }
	</script>
</body>
</html>
<?php
	}
?>
