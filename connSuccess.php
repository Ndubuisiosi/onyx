<?php
require('dbsetup.php');

if(isset($_POST["submit"])){

$filename = 'user.json';

$onyx = file_get_contents($filename);

$array = json_decode($onyx, true);

foreach($array as $row) {
	$sql = "INSERT INTO onyx (userId, id, title, body) VALUES ('".$row["userId"]."', '".$row["id"]."', '".$row["title"]."', '".$row["body"]."')";

}

// $userId = $_POST['userid'];	
// $id = $_POST['id'];
// $title = $_POST['title'];
// $body = $_POST['body'];

// $sql = "INSERT INTO onyx SET
// 	    userId = '$userId',	
// 		id = '$id',
//         title = '$title',	
// 		body = '$body'";
		
$result = mysqli_query($connection , $sql);
header("Location: index.php");
}	
?>