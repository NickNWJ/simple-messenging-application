<?php 

//Get Heroku ClearDB connection information
$cleardb_server = "us-cdbr-east-05.cleardb.net";
$cleardb_username = "b9700b4d479412";
$cleardb_password = "d8b2b505";
$cleardb_db = "heroku_26135876c73b685";

// Connect to DB
$conn = new mysqli($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

?>