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
				$data=$_POST['data'];
				if($_POST['name']=='f_id'){
						$qr = "update faculty set f_id='$data' where f_id='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='name'){
						$qr = "update faculty set name='$data' where f_id='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='salary'){
						$qr = "update faculty set salary='$data' where f_id='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='d_id'){
						$qr = "update faculty set d_id='$data' where f_id='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				if($rs){
					?>
						<script>
								alert("successfully updated");
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
