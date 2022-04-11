<?php  

session_start();

// setting up the time zone based on location
define('TIMEZONE', 'Asia/Kuala_Lumpur');
date_default_timezone_set(TIMEZONE);

$currentTime = time();

# check if the user is logged in
if (isset($_SESSION['username'])) {
	
	# database connection file
	include '../db.conn.php';

	# get the logged in user's username from SESSION
	$id = $_SESSION['user_id'];

	$sql = "UPDATE users
	        SET last_seen = $currentTime 
	        WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

}else {
	header("Location: ../../index.php");
	exit;
}