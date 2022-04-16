<?php  

session_start();

# check if the user is logged in
if (isset($_SESSION['username'])) {
	
	# database connection file
	include '../db.conn.php';

	# get the logged in user's username from SESSION
	$id = $_SESSION['user_id'];
	
	//set sql server time zone
	$sql = "SET GLOBAL time_zone = 'Asia/Kuala_Lumpur';";
	$sql .= "UPDATE users
	        SET last_seen = NOW() 
	        WHERE user_id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$id]);

}else {
	header("Location: ../../index.php");
	exit;
}