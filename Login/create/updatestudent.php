<?php
/*
CREATE TABLE `user`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `age` INT(10) NOT NULL , `email` CHAR(255) NOT NULL , `status` INT(2) NOT NULL , `date` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/

$mysqli= new mysqli("localhost","root","","saharauniversity");

if(isset($_POST['update'])){
	
	$sno = $_POST['sno'];
	 $regno = $_POST['regno'];
	 $stuname = $_POST['stuname'];
	 $coursename = $_POST['coursename'];
	 $dob = $_POST['dob'];
	 $studyyear = $_POST['studyyear'];
	 $status = $_POST['status'];
	 
	
	$mysqli -> query("UPDATE  `studentinfo` SET regno = '$regno' ,studentname = '$stuname' ,coursename = '$coursename' 	,dob = '$dob' ,yearstudy = '$studyyear',status = '$status' WHERE SNO = '$sno' ") ;
	
	 header( 'Location: update.php' );
}


	 