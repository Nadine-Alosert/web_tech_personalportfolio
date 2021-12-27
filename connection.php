<?php
//
$server = "host";
$user = "UserName123";
$pass = "Password!123";


$connect = mysql_connect($servername, $username, $password);//form connection

if (!$connect) {//checking for connection
    die("Connection error: " . mysql_connect_error());//if there's invalid inputs + no connection, there's an error in connection
}

$database = "CREATE Database admin";
if (mysql_query($connect, $database)) {
    echo "Database admin created successfully";//database created
}
else
{
    echo "Error creating database: " . mysql_error($connect);//data base not created
}

mysql_close($connect);

 ?>
