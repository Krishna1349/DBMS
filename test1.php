<html>
<head>
<style>
body{
background-image: linear-gradient(to right, #aa789a 0%, #ffe150 100%);	
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main-css.css">
<link rel="stylesheet" href="facultypage.css">
</head>
</html>
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

		$query="SELECT ssn,pswd FROM std_pswd";
		$res=mysqli_query($conn,$query);
		$flag=0;
		while($row=mysqli_fetch_assoc($res))
		{
			if($row['ssn']==$ssn and $row['pswd']==$password)
			{
				$flag=1;
			}
		}
		if($flag==1)
		{
			//echo "<br>";

			//echo "successfully loged in";
			include "studentpage.php";
			?>
			<html>
			<body>
				<script>
				alert("successfully Logged In");
				</script>
			</body>
		</html>
		<?php
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
