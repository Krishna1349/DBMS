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
  $ssn=$_POST["ssn"];
  $query="SELECT *from student  where ssn=$ssn";
//$query="SELECT ssn,pswd FROM std_pswd";
  $res=mysqli_query($conn,$query);
  echo "$res";

}


 ?>
