
<?php
	$servername="localhost";
	$username="root";
	$password="sagar@123";
	$conn=mysqli_connect($servername,$username,$password,"college");
	if(!$conn)
	{
		// echo "connection not established";
	}
	else
	{
		// echo "connection estsblished successfully";
		$ssn=$_POST["ssn"];
		$password=$_POST["pwd"];

		$a="pes";
		//  $b="pes";
		if($ssn==$a and $password==$a)
		// if($b==$a and $b==$a)
		{
			// echo "successfully loged in";
			include "admin.php";
		}
		else
		{
			//echo "Enter valid credentials";
			?>
			<html>
			<body>
				<script>
				alert("Enter valid credentials");
				</script>
			</body>
		</html>
		<?php
			include "index.html";
		}
	}
?>
