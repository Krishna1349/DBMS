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
        $query2="select ssn from student where ssn='$ssn'";
        if(mysqli_query($conn,$query2)){

          $query1="select m.c_id,m.isa2 from marks as m ,student as s,
					course as c where m.ssn='$ssn' and c.c_id=m.c_id and s.ssn=m.ssn and s.sem=c.sem";
          $res1=mysqli_query($conn,$query1);
					?>
					<table id="isa2">
						<tr>
							<th>course id</th>
							<th>ISA2 Marks</th>
						</tr>
					<?php
					while($row7=mysqli_fetch_array($res1))
					{
					?>
						<tr>
							<td><?php echo $row7[0]; ?></td>
							<td><?php echo $row7[1]; ?></td>
						</tr>
						<?php

					}
				?>
</body>
</html>
<?php
	}
}
?>
