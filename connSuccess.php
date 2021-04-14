<?php
require('dbsetup.php');

$userId = $_POST['userid'];	
$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];

$sql = "INSERT INTO onyx SET
	    userId = '$userId',	
		id = '$id',
        title = '$title',	
		body = '$body'";
		
$result = mysqli_query($connection , $sql);
	
?>