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
				if(!empty($_POST['ussn'])){
						$qr = "update student set ssn='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['name'])){
						$qr = "update student set sname='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['addrs'])){
						$qr = "update student set saddress='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['gender'])){
						$qr = "update student set gender='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['p_no'])){
						$qr = "update student set ph_no='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['dob'])){
						$qr = "update student set dob='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['section'])){
						$qr = "update student set section='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['sem'])){
						$qr = "update student set sem='$data' where ssn='$ssn'";
						$rs=mysqli_query($conn,$qr);
				}
				elseif(!empty($_POST['d_id'])){
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
