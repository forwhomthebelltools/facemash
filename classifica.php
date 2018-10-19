<?php

require_once 'connection.php';
//preparazione ed esecuzione query
$ratings = mysqli_query($conn, "SELECT * FROM photos ORDER BY points DESC");
?>
<html>
<head>
</head>
<body>
<table border="1">
<tr>
<td><b>Name</b></td>
<td><b>Points</b></td>
</tr>
<?php
while ($record = mysqli_fetch_array($ratings, MYSQL_ASSOC))
{
	echo "<tr><td>{$record['name']}</td>";
	echo "<td>{$record['points']}</td></tr>";
}

//vedi funzione mysqli_fetch_assoc e mysqli_num_rows

$conn->close();
?>
</table>
</br>
<a href="foto.php">Go to photos</a>
</body>
</head>		