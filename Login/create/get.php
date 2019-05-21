<?php
/*
CREATE TABLE `user`.`user` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `age` INT(10) NOT NULL , `email` CHAR(255) NOT NULL , `status` INT(2) NOT NULL , `date` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
*/

$id = $_POST['sno'];
$con = mysqli_connect("localhost", "root", "", "saharauniversity");
$query = mysqli_query($con, "select * from `studentinfo` where `regno` = '" . $id . "'");
$fetch = mysqli_fetch_assoc($query);
if (mysqli_num_rows($query) > 0) {
    echo json_encode($fetch);
} else {
    echo 0;
}
	
	
