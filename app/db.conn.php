<?php 

// localhost
# server name
$sName = "us-cdbr-east-05.cleardb.net";
# user name
$uName = "b9700b4d479412";
# password
$pass = "d8b2b505";

# database name
$db_name = "heroku_26135876c73b685";

#creating database connection
try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}

?>