<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		  // "Connection failed";
	}
	else{
        $a=$_POST['f_id'];
        $b=$_POST['salary'];
        $c=$_POST['name'];
        $d=$_POST['d_id'];

      $qr="insert into faculty values('$a','$b','$c','$d')";
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
              alert("Unable to add new data");
          </script>
        <?php
         include "admin.php";
        }
    }
?>
