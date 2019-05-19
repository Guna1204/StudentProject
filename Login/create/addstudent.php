<?php
/*
CREATE TABLE `user`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `age` INT(10) NOT NULL , `email` CHAR(255) NOT NULL , `status` INT(2) NOT NULL , `date` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/

$mysqli= new mysqli("localhost","root","","saharauniversity");

if(isset($_POST['save'])){
	
	
	 $regno = $_POST['regno'];
	 $stuname = $_POST['stuname'];
	 $coursename = $_POST['coursename'];
	 $dob = $_POST['dob'];
	 $studyyear = $_POST['studyyear'];
	 $status = $_POST['status'];
	 
	
	$mysqli -> query("INSERT INTO `studentinfo` (regno,studentname,coursename,dob,yearstudy,status) values ('$regno','$stuname', '$coursename', '$dob','$studyyear','$status')");
	 header( 'Location: create.php' );
}


	// $con =  mysqli_connect("localhost","root","","saharauniversity");
	// $query = mysqli_query($con,"select * from `userinfo` where `username` = '".$_POST['username']."'");
	// $query = mysqli_query($con,"INSERT INTO `studentinfo` (regno,studentname,coursename,dob,yearstudy,status) values ('".$_POST['regno']."',	
	// '".$_POST['stuname']."', '".$_POST['coursename']."', '".$_POST['dob']."','".$_POST['studyyear']."','".$_POST['status']."'");
	
	
	
	
	// $fetch = mysqli_fetch_assoc($query);
	// if(mysqli_num_rows($query) > 0) {
		// echo json_encode($fetch);
		
	// }
	// else {
		// echo 0;
	// }
	
	