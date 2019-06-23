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
		<div><?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		echo "Connection failed";
	}
	else{
		session_start();
		$a=$_SESSION['cid'];
		$b=$_SESSION['ssn'];
		//var_dump($a);
		//var_dump($b);
		//echo "</br>";

		for ($i=0 ;$i<sizeof($b);$i++) {
						@$ssn=htmlspecialchars($_REQUEST[$b[$i]]);
						ob_start();
						if($_POST[$ssn] == $ssn and $ssn != null)
						{
							ob_get_clean();
							$bd=$ssn;
							ob_start();
						}
						ob_get_clean();

}
	//echo $bd;
		for ($i=0 ;$i<sizeof($a);$i++) {
					//echo $a[$i];
						//echo "</br>";
					$cid=$a[$i];

					@$at=$_POST[$cid];
					//echo $cid ;
					//echo "<br>";
					$ab = $_POST[$bd];
					//echo $ab;
					$qr="update attended set attendence='$at' where c_id='$cid' and ssn='$bd'";
					mysqli_query($conn,$qr);
}
		session_destroy();
		include "del_upd1.php";
		echo "Upated successfully";
 }
 ?>
