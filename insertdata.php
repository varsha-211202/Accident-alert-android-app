<?php
include "connection.php";
if(!empty($_POST)){
	$name=$_POST['username'];
	$email=$_POST['email'];
	$mobile_num=$_POST['mobile_num'];
	$alter_num=$_POST['alter_num'];
	$password=$_POST['password'];

	$sql="INSERT INTO reg_table (username,email,mobile_num,alter_num,password,state)VALUES('$name','$email','$mobile_num','$alter_num','$password',0)";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "<script>alert('Added Successfully');
		window.location.href='index.php';
		</script>";
	}
}