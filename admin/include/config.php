<?php
define('DB_SERVER','us-cdbr-east-06.cleardb.net');
define('DB_USER','b624e40d471799');
define('DB_PASS' ,'0102c216');
define('DB_NAME', 'heroku_68cb7c3d29ad637');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>