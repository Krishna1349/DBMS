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

<link rel="stylesheet" href="css/main-css.css">
<link rel="stylesheet" href="facultypage.css">	
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>
<body>
<?php

  session_start();
    //query to retrieve from table craeted
    $qr9="select * from reslt_updt";
    $r5=mysqli_query($conn,$qr9);
    $ro=mysqli_fetch_assoc($r5);
    $dept = $ro['d_id'];
    $sem =$ro['sem'];
    $sec=$ro['section'];
		$res12=$ro['res'];

		$query="select * from student as s where s.d_id='$dept' and s.sem ='$sem' and s.section ='$sec' ";
    $rs=mysqli_query($conn,$query);
    $sns=array();
    while($rw=mysqli_fetch_assoc($rs)){
      $sn=$rw['ssn'];
      $query1="select a.c_id,a.ssn from exams as a,student as s,department as d,
      course as c where a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and
      a.c_id=c.c_id and s.ssn='$sn'";
      $res1=mysqli_query($conn,$query1);

      echo $rw['ssn'];
      echo " : </br>";
    ?>
      <form id="frm" method="POST" action="updt_res.php">

    <?php
    $crs=array();
    array_push($sns,$rw['ssn']);
    while($row1=mysqli_fetch_assoc($res1))
      {
        array_push($crs,$row1['c_id']);
          echo $row1['c_id'];
          echo " : ";
          ?>
          <input type="hidden" name="<?php echo $row1['ssn']; ?>" value="<?php echo $row1['ssn']; ?>">
          <input id="abc" type="number" name="<?php echo $row1['c_id']; ?>" autofocus>
          <?php
			echo "  ";

      }//while

          $_SESSION['cid']=$crs;
          $_SESSION['ssn']=$sns;

      ?>
        <button id="button" type="submit">submit</button><br><br>
      </form>
      <?php
    }
    ?>
</body>
</html>
  <?php
}
?>
