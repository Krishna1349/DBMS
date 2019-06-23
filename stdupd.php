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
  <html>
  <head>
	<style>
		#bx{
		  margin-left:125px;
		  width:40em;
		  font-size: 15px;
	  }
	  body{
		  background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);
	  }
	</style>
  </head>
  <body>
    <div>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h3>Enter ssn:</h3><input id="bx" type="text" name="ussn" placeholder="Student USN"></br>
        <h3>Name:<h3/><input id="bx" type="text" name="name" placeholder="Name"></br>
        <h3>Address:<h3/><input id="bx" type="text" name="addr" placeholder="Address"></br>
        <h3>Phone:<h3/><input id="bx" type="text" name="ph" placeholder="eg.7019936415"></br>
        <br></br><button style="width:220px; margin-left:30%;background-color:green;padding:6px;" type="submit">submit</button>
      </form>
    </div>
    <?php
    //  $ssn=$_POST['ssn'];
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
        $ssn=htmlspecialchars($_REQUEST["ussn"]);
        $m1=htmlspecialchars($_REQUEST["name"]);
        $m2=htmlspecialchars($_REQUEST["addr"]);
        $m3=htmlspecialchars($_REQUEST["ph"]);
        settype($m3,'int');
        //$me=array($m1,$m2,$m3);
        $query="select s.ssn from student as s where s.ssn='$ssn'";
        if(mysqli_query($conn,$query))
        {
            $sql="UPDATE student set sname='$m1',saddress='$m2',ph_no='$m3' where ssn='$ssn'";
            if(mysqli_query($conn,$sql))
            {
              echo "record updated";

            }
      }
     ?>
</body>
</html>
<?php
}
}
?>
