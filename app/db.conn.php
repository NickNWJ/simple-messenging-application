<?php 

// localhost
// # server name
// $sName = "localhost";
// # user name
// $uName = "root";
// # password
// $pass = "";

// # database name
// $db_name = "chat_app_db";

// #creating database connection
// try {
//     $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
//                     $uName, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//   echo "Connection failed : ". $e->getMessage();
// }

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>