<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		  // "Connection failed";
	}
	else{
        $ssn=$_POST['f_id'];
        $qr="delete from faculty where f_id='$ssn'";
        $res=mysqli_query($conn,$qr);
        if($res){
					?>
						<script>
								alert("successfully deleted");
						</script>
					<?php
					 include "admin.php";
					}
					else{
						?>
							<script>
									alert("Not deleted");
							</script>
						<?php
						 include "admin.php";
						}
        }
?>
