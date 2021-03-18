<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'hms');
// define('DB_SERVER','sql304.byethost18.com');
// define('DB_USER','b18_27779050');
// define('DB_PASS' ,'31248408');
// define('DB_NAME', 'b18_27779050_hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>