<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{

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
		<div>
			<!-- <form id="frm" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>"> -->
				<form id="frm" method="POST" action="del_upd.php">
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
				
				<button id="button" type="submit">submit</button>
			</form>

		</div>
     <?php
			// session_start();
      // if($_SERVER["REQUEST_METHOD"]=="POST")
      // {
			//
      //   //$ssn=htmlspecialchars($_REQUEST['ussn']);
			// 	$dept=htmlspecialchars($_REQUEST['d_id']);
			// 	$_SESSION['d_id']=$dept;
			// 	$sem=htmlspecialchars($_REQUEST['sem']);
			// 	$_SESSION['sem']=$sem;
			// 	$sec=htmlspecialchars($_REQUEST['sec']);
			// 	$_SESSION['sec']=$sec;
        //$query="select s.ssn from student as s where s.ssn='$ssn'";
			// 	$query="select s.ssn from student as s where s.d_id='$dept' and s.sem ='$sem' and s.section ='$sec' ";
			//
			// 	$rs=mysqli_query($conn,$query);
			//
			// 	$sns=array();
			// 	while($rw=mysqli_fetch_assoc($rs)){
			// 		$sn=$rw['ssn'];
      //     $query1="select a.c_id,a.ssn from attended as a,student as s,department as d,
      //     course as c where a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and
      //     a.c_id=c.c_id and s.ssn='$sn'";
      //     $res1=mysqli_query($conn,$query1);
			//
			// 		echo $rw['ssn'];
			// 		echo " : </br>";
				?>
					<!-- <form id="frm" method="POST" action="updt_attds.php"> -->
					<!-- <form id="frm" method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>"> -->
				<?php
				// $crs=array();
				// array_push($sns,$rw['ssn']);
				// while($row1=mysqli_fetch_assoc($res1))
        //   {
				// 		array_push($crs,$row1['c_id']);
				// 		//$_SESSION['ssn']=$row1['ssn'];
				// 		//$_SESSION['cid'][]=$row1['c_id'];
				// 			echo $row1['c_id'];
				// 			echo " : ";
				// 			?>
							<!-- <input type="hidden" name="<?php echo $row1['ssn']; ?>" value="<?php echo $row1['ssn']; ?>"> -->
	            <!-- <input id="abc" type="number" name="<?php echo $row1['c_id']; ?>" > -->
							<?php
							// echo "  ";

					// }//while

							//unset($_SESSION['ssn']);
							// $_SESSION['cid']=$crs;
							// $_SESSION['ssn']=$sns;
					?>
						<!-- <button type="submit">button</button><br><br> -->
					<!-- </form> -->
					<?php
				// }//while

			// }//IF -->
//#comment
			//ob_start();
		//	if($_SERVER["REQUEST_METHOD"]=="GET")
			//{
			// 	session_start();
			// 	$a=$_SESSION['cid'];
			// 	$b=$_SESSION['ssn'];
			// 	var_dump($a);
			// 	var_dump($b);
			// 	echo "</br>";
			// 	for ($i=0 ;$i<sizeof($a);$i++) {
			// 					@$ssn=htmlspecialchars($_REQUEST[$b[$i]]);
			// 					echo $ssn;
			// 				}
			// 	for ($i=0 ;$i<sizeof($a);$i++) {
			// 				echo $ssn;
			// 					echo "</br>";
			// 				$cid=$a[$i];
			// 				$at=htmlspecialchars($_REQUEST[$cid]);
			// 				echo $at ;
			//
			//
			// 				//$qr="UPDATE attended SET attendence='$at' where c_id='$cid' and ssn='$b'";
			// 				//$qr="update attended set attendence='$at' where c_id='$cid' and ssn='$ssn'";
			// 				//mysqli_query($conn,$qr);
			//
			// 			}
			//
			// 	echo "Upated successfully";
			// }
			//$g=ob_get_clean();
			//var_dump($g);
	?>
</body>
</html>
<?php
	}
 ?>
