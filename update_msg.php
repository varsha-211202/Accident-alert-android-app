<?php
session_start();

if(isset($_SESSION['userid'])){
	$userid=$_SESSION['userid'];
}
include "connection.php";
if(isset($_SESSION['status'])){
	$status=$_SESSION['status'];
	if($status==0){
		$cond="UPDATE  reg_table SET issactive=1 WHERE state=0";

	}elseif($status==1){
		 $patient=$_POST['patient'];
		 $q2=$_POST['Message'];
		$cond="'null','$q2','Accident Happened','1',0,'$patient'";

	}elseif($status==2){
	
		$cond="'null','null','Accident Happened','2',0";

	}elseif($status==3){
		$q1=$_POST['hospital'];
        $q2=$_POST['Message'];
        $patient=$_POST['patient'];

		$cond="'$q1','$q2','Accident Happened','3',0,'$patient'";

	}
}


$sql="INSERT INTO alert_table (map1,map2,messgae,cond,userid,patient) VALUES($cond)";
$result=mysqli_query($conn,$sql);
	if($result&&$status==0){
		echo "<script>alert('Alert send Successfully');
		window.location.href='mall_check.php';
		</script>";
	}elseif($result&&$status==1){
		echo "<script>alert('Alert send Successfully');
		window.location.href='doctor_check.php';
		</script>";
	}elseif($result&&$status==2){
		echo "<script>alert('Alert send Successfully');
		window.location.href='police_check.php';
		</script>";
	}elseif($result&&$status==3){
		echo "<script>alert('Alert send Successfully');
		window.location.href='driver_check.php';
		</script>";
	}
