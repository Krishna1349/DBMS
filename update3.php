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
	</div>
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
		?>
<html>
	<body>
      <?php
        $query2="select ssn from student where ssn='$ssn'";
        if(mysqli_query($conn,$query2)){

          $query1="SELECT distinct a.c_id ,a.score,a.a_num from assignment as a,
				 						student as s,enrolls as e,course as c where s.ssn='$ssn'  and s.sem =c.sem and e.c_id =c.c_id
				  					 and a.c_id=e.c_id and s.ssn=a.ssn";
          $res1=mysqli_query($conn,$query1);
					?>
					<table id="assign">
						<tr>
							<td>course Id</td>
							<td>score</td>
							<td>Assign Number</td>
						</tr>
						<?php
						while($row1=mysqli_fetch_array($res1))
						{
							?>
							<tr>
								<td><?php echo $row1[0]; echo " "; ?></td>
								<td style="padding:3px; margin-left:3px;"><?php echo $row1[1]; ?></td>
								<td style="text-align:center;"><?php echo $row1[2]; ?></td>
								
							</tr>
							<?php
						}

				}
				?>
</body>
</html>
<?php
	}

?>
