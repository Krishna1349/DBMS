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
	#abc{
			color:red;

			border-color: green;
			padding: 5px;
			margin-top: 2px;
	}
	#button{
    background-color: lightblue;
    color:red;
    width:7em;
    height:2em;
  }
	body{
	background-image: linear-gradient(to right, #fa709a 0%, #fee140 100%);	
	}

	</style>
</head>
<body>
  <?php 
  session_start();
  $fid=$_SESSION['fid'];?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main-css.css">
<link rel="stylesheet" href="facultypage.css">
<div class="topnav" id="myTopnav">
  <a href="#"><?php echo $fid ; ?></a>
  <div class="dropdown">
    <button 
	class="dropbtn">attendence
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#display" onclick="atte()">display</a>
	   
      <a href="attupd.php">update</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">info of student
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#display" onclick="info()">display</a>

      <a href="stdupd.php">update</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Result
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#ISA 1" onclick="disp()">ISA 1</a>
      <a href="#ISA 2" onclick="disp1()">ISA 2</a>
      <a href="#ESA" onclick="disp2()">ESA</a>
      <a href="#Assignment" onclick="disp3()">Assignment</a>
      <a href="#">update</a>
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
<?php
 // session_start();
	if(!empty($_POST))
	// if($_SERVER["REQUEST_METHOD"]=="POST")
  {
	// $dept=$_SESSION['d_id'];
	// $sem=$_SESSION['sem'];
	// $sec=$_SESSION['sec'];

    // $ssn=htmlspecialchars($_REQUEST['ssn']);
    $dept=htmlspecialchars($_REQUEST['d_id']);//  or $_SESSION['d_id'];// or $_SESSiON['d_id'];
//    $_SESSION['d_id']=$dept;
    $sem=htmlspecialchars($_REQUEST['sem']);
    $sec=htmlspecialchars($_REQUEST['section']);
    //$query="select s.ssn from student as s where s.ssn='$ssn'";
		$qr1="delete from at_updt";
    $r5=mysqli_query($conn,$qr1);
		$q0="insert into at_updt values('$dept','$sem','$sec')";
		mysqli_query($conn,$q0);
		$query="select * from student as s where s.d_id='$dept' and s.sem ='$sem' and s.section ='$sec' ";
    $rs=mysqli_query($conn,$query);
    $sns=array();
    while($rw=mysqli_fetch_assoc($rs)){
      $sn=$rw['ssn'];
      $query1="select a.c_id,a.ssn from attended as a,student as s,department as d,
      course as c where a.ssn=s.ssn and s.sem=c.sem and s.d_id=d.d_id and
      a.c_id=c.c_id and s.ssn='$sn'";
      $res1=mysqli_query($conn,$query1);

      echo $rw['ssn'];
      echo " : </br>";
    ?>
      <form id="frm" method="POST" action="updt_attds.php">
      <!-- <form id="frm" method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>"> -->
    <?php
    $crs=array();
    array_push($sns,$rw['ssn']);
    while($row1=mysqli_fetch_assoc($res1))
      {
        array_push($crs,$row1['c_id']);
        //$_SESSION['ssn']=$row1['ssn'];
        //$_SESSION['cid'][]=$row1['c_id'];
          echo $row1['c_id'];
          echo " : ";
          ?>
          <input type="hidden" name="<?php echo $row1['ssn']; ?>" value="<?php echo $row1['ssn']; ?>">
          <input id="abc" type="number" name="<?php echo $row1['c_id']; ?>" >
          <?php
          echo "  ";

      }//while

          //unset($_SESSION['ssn']);
          $_SESSION['cid']=$crs;
          $_SESSION['ssn']=$sns;
      ?>
        <button id="button"type="submit">submit</button><br><br>
      </form>
      <?php
    }//while

  }//IF
	else{
		include "attupd.php";
	}
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
  //}
?>
</body>
</html>
<?php
}

?>
