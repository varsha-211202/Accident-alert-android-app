<?php
session_start();
include "connection.php";
if($_POST['username']=='doctor@gmail.com'){
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM reg_table WHERE email='$name' AND password='$password'";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$_SESSION['status']=$rows['state'];
				header('location:doctor_check.php');
			}
		}
}elseif($_POST['username']=='police@gmail.com'){
	// echo 1;
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM reg_table WHERE email='$name' AND password='$password'";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$_SESSION['status']=$rows['state'];
				header('location:police_check.php');
			}
		}
}elseif($_POST['username']=='driver@gmail.com'){
	// echo 2;
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM reg_table WHERE email='$name' AND password='$password'";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$_SESSION['status']=$rows['state'];
				header('location:driver_check.php');
			}
		}
}else{
	// echo 3;
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * FROM reg_table WHERE email='$name' AND password='$password'";
	$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			while($rows=mysqli_fetch_assoc($result)){
				$_SESSION['status']=$rows['state'];
				$_SESSION['userid']=$rows['id'];
				header('location:user_check.php');
			}
		}

}


