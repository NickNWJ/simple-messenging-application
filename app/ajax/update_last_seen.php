<?php  

session_start();

# check if the user is logged in
if (isset($_SESSION['username'])) {
	
	# database connection file
	include '../db.conn.php';

	# get the logged in user's username from SESSION
	$id = $_SESSION['user_id'];

	$date = new DateTime();
	$date->setTimezone(new DateTimeZone('Asia/Kuala Lumpur'));

	$fdate = $date->format('Y-m-d H:i:s');

	$sql = "UPDATE users
	        SET last_seen = '$fdate'
	        WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

}else {
	header("Location: ../../index.php");
	exit;
}