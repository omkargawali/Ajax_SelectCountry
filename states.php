<?php
$connection = mysqli_connect('localhost:3307', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'phpajax');
if(!$selectdb){
	die("Database Selection Failed" . mysqli_error($connection));
}
$country_id = (int) $_GET['country_id'];
$sql = "SELECT * FROM states WHERE country_id=$country_id";
$result = mysqli_query($connection, $sql);
	echo "<option disabled selected>Please Select State</option>";
while($row = mysqli_fetch_assoc($result)){
	echo "<option value='" . $row['id'] . "'>" . $row['name'] ."</option>";
}

?>