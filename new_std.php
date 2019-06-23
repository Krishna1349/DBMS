<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		  // "Connection failed";
	}
	else{
        $a=$_POST['ssn'];
        $b=$_POST['name'];
        $c=$_POST['addrs'];
        $d=$_POST['gender'];
        $e=$_POST['p_no'];
        $f=$_POST['dob'];
        $g=$_POST['section'];
        $h=$_POST['sem'];
        $i=$_POST['d_id'];

      $qr="insert into student values('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
      $cv=mysqli_query($conn,$qr);
      // var_dump($cv);
      if($cv)
      {
      ?>
        <script>
            alert("successfully added");
        </script>
      <?php
       include "admin.php";
      }
      else{
        ?>
          <script>
              alert("Not updated");
          </script>
        <?php
         include "admin.php";
        }
    }
?>
