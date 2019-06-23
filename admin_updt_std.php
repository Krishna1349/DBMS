<?php
	$servername="localhost";
	$uname="root";
	$pswd="sagar@123";
	$conn=mysqli_connect($servername,$uname,$pswd,"college");
	if(!$conn){
		  // "Connection failed";
	}
	else{
        $ssn=$_POST['ssn'];
				$data=$_POST['data'];

				if($_POST['name']=='ssn'){
						$qr = "update student set ssn='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='name'){
						$qr = "update student set sname='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='addrs'){
						$qr = "update student set saddress='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='gender'){
						$qr = "update student set gender='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='p_no'){
						$qr = "update student set ph_no='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='dob'){
						$qr = "update student set dob='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='section'){
						$qr = "update student set section='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='sem'){
						$qr = "update student set sem='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif($_POST['name']=='d_id'){
						$qr = "update student set d_id='$data' where ssn='$ssn'";
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
