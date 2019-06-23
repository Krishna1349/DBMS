<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{
		$ssn=$_POST['ssn'];
		session_start();
		$fid=$_SESSION['fid'];
		$_SESSION['fid']=$fid;
		?>
<html>
<head>
<style>
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
	</div>
      <?php
			$query="select a.ssn,a.c_id,a.attendence from attended a,student as s,department as d,course as c
				where s.ssn='$ssn' and a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and a.c_id=c.c_id";
			$res=mysqli_query($conn,$query);
			$flag=0;
			?>
			<table id="attend">
					<tr>
						<th><?php echo $ssn; ?></th>

					</tr>
			<?php
			 while($row=mysqli_fetch_array($res))
			{
				?>

					<tr>
						<td><?php echo $row[1]; ?></td>
						<td><?php echo $row[2]; ?></td>
					</tr>

					<?php
			}

				?>
</body>
</html>
<?php
	}
?>