<?php

require_once 'connection.php';

if ($_GET['winner'] && $_GET['loser']) {
	$name=$_GET['winner'];
	$check_photo = mysqli_query($conn, "SELECT points FROM photos WHERE name = '$name'");
	$count=$check_photo->num_rows;
	if ($count == 1) {
		echo 'found';
		while ($row = $check_photo->fetch_object())
		{
			$point = $row->points;
			$new_point = ++$point;
			$update = mysqli_query($conn, "UPDATE photos SET points = '$new_point' WHERE name = '$name'");
		}
		
	} else {
		echo 'not found';
		$insert_photo = mysqli_query($conn, "INSERT INTO photos (id, name, points) VALUES (NULL, '$name', 1)");
	}
	

}
$conn->close();
header('location: foto.php');

?>